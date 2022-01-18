<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/

use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;

use Auth;
use DB;
class PayPalPaymentController extends Controller
{
    private $_api_context;
    public function __construct()
    {
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);

    }

    public function makePayment(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');
        $total=0;
        $d=DB::select("SELECT mc.*,p.img,p.title,p.subtitle,p.star,p.price,p.id p_id FROM `mycart` mc inner join products p on mc.product_id=p.id WHERE mc.status=1 and mc.user_id=".Auth::user()->id);
        $items = [];
        $i=0;
        foreach ($d as $v){
            $items[$i] = new Item();
            $items[$i]->setName($v->subtitle)
                ->setCurrency('USD')
                ->setQuantity((int)$v->qty)
                ->setPrice((float)$v->price);
            $i++;
            $total+=((float)$v->price)*((int)$v->qty);

        }
        $item_list = new ItemList();
        $item_list->setItems($items);
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($total);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::to('getPaymentStatus'))
        ->setCancelUrl(URL::to('getPaymentStatus'));

        $payment = new Payment();
        $payment->setIntent("Sale")
        //$payment->setIntent(Auth::user()->name)
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));
        try {

            $payment->create($this->_api_context);

        } catch (\PayPal\Exception\PPConnectionException $ex) {

            if (\Config::get('app.debug')) {

                \Session::put('error', 'Connection timeout');
                return Redirect::to('/');

            } else {

                \Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::to('/');

            }

        }
        foreach ($payment->getLinks() as $link) {

            if ($link->getRel() == 'approval_url') {

                $redirect_url = $link->getHref();
                break;

            }

        }
        Session::put('paypal_payment_id', $payment->getId());

        if (isset($redirect_url)) {
            return Redirect::away($redirect_url);

        }

        Session::put('error', 'Unknown error occurred');
        return Redirect::to('/');

    }

    public function getPaymentStatus()
    {
        $request=request();
        $payment_id = Session::get('paypal_payment_id');
        Session::forget('paypal_payment_id');
        if (empty($request->PayerID) || empty($request->token)) {

            Session::put('error', 'Payment failed');
            return Redirect::to('my-cart');

        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->PayerID);
        $result = $payment->execute($execution, $this->_api_context);
        if ($result->getState() == 'approved') {
            Session::put('success', 'Payment success! Thank You...');
            $d=DB::select("SELECT mc.*,p.img,p.title,p.subtitle,p.star,p.price,p.id p_id FROM `mycart` mc inner join products p on mc.product_id=p.id WHERE mc.status=1 and mc.user_id=".Auth::user()->id);
            foreach ($d as $v){
                $data =["product_id"=>$v->p_id,
                    "product_name"=>$v->subtitle,
                    "qty"=>$v->qty,
                    "price"=>$v->price,
                    "create_by"=>Auth::user()->id,
                    "paymentId"=>$request->paymentId,
                    "token"=>$request->token,
                    "PayerID"=>$request->PayerID];

                DB::table('transaction_detail')->insert($data);
            }

            DB::table('mycart')->where('status',1)->where('user_id',Auth::user()->id)->update(['status'=>2]);

            return Redirect::to('my-cart');
        }
        Session::put('error', 'Payment failed');
        return Redirect::to('my-cart');

    }

}
