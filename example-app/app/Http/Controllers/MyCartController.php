<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use DB;
use Session;

class MyCartController extends Controller
{
    //for request login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_to_cart($product_id=null){
        if(Auth::user()->role==1){
            if($product_id!=null){
                $d=DB::select("SELECT * FROM `mycart` WHERE status=1 and product_id=$product_id and user_id=".Auth::user()->id);

                if($d){
                    $data['qty']=((int)$d[0]->qty)+1;
                    DB::table('mycart')->where('id',$d[0]->id)->update($data);
                    return  redirect()->back();
                }else{
                    $data['product_id']=$product_id;
                    $data['qty']=1;
                    $data['user_id']=Auth::user()->id;
                    $data['status']=1;

                    DB::table("mycart")->insert($data);
                    return  redirect()->back();
                }
            }
        }else{
            return Redirect::to('/');
        }

    }

    public function my_cart(){
        $data['d']=DB::select("SELECT mc.*,p.img,p.title,p.subtitle,p.star,p.price FROM `mycart` mc inner join products p on mc.product_id=p.id WHERE mc.status=1 and mc.user_id=".Auth::user()->id);
        return view('mycart.my_cart',$data);
    }

    public function remove_cart($id=null){
        $d=DB::select("SELECT * FROM `mycart` WHERE id=$id and user_id=".Auth::user()->id);
        if($d){
            DB::table("mycart")->where("id",$id)->update(["status"=>3]);
        }
        return  redirect()->back();
    }

    public function update_cart($id=null,$qty=null){
        $d=DB::select("SELECT * FROM `mycart` WHERE id=$id and user_id=".Auth::user()->id);
        if($d){
            DB::table("mycart")->where("id",$id)->update(["qty"=>$qty]);
        }
        return  redirect()->back();
    }
    public function profile(){
        $data['d']=DB::select("SELECT t.*,DATE_FORMAT(t.create_at,'%Y-%m-%d') by_at,p.img FROM `transaction_detail` t inner join products p on t.product_id=p.id WHERE t.create_by=".Auth::user()->id);
        return view("mycart.profile",$data);
    }
}
