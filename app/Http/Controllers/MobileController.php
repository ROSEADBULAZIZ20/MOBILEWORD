<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
class MobileController extends Controller
{
  
   public $Eppid='';
  
   public function A1(Request $request){
   session::put('empid','1');
    return"the varible is stord";
   }
   public function A2(Request $request){
    $phone=DB::table('users')->where('id','=',$request->session()->get('empid'))->get();
    dd($phone);

   }
    public function invoic(Request $request)
    {
        //dd($request);
       //insert
       
       $row=[
        'name'=>$request->fullname,
        'country'=>$request->country,
        'BirthDate'=>$request->d,
        'phone'=>$request->phone,
        'emali'=>$request->email,
        'address'=>$request->address,
        'productname'=>$request->productname,
        'price'=>$request->price,
        'Total'=>$request->tottal,
       ];
       DB::table('invoic')->insert($row);
       $iphone=DB::table('invoic')->where('phone', '=' ,$request->phone)->first();
       //dd($iphone);
       return view('invo',['inv'=>$iphone]);
    }
    public function mobiletype()
    {
        $ph=DB::table('products') ->get();//get all
        return view('mobile',['mobile'=>$ph]);
    }

    public function Checkout($id)
    {
        $phon=DB::table('products')->where('id','=',$id)->first();//first one array
        
        return view('checkout',['phone'=>$phon]);
    }
    
}
