<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\ScheduleCategory;
use App\Models\Opinion;
use App\Models\PostalCode;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
      $s =Slider::where('status',1)->get();
      $sc=ScheduleCategory::where('status',1)->first();
      $op=Opinion::get();
      $mytime = Carbon::now();
      $t =$mytime->format('H') +1;
      $simage=Slider::where('imageUrl','!=','')->first();

$data =['sc'=>$sc,'s'=>$s,'op'=>$op,'t'=>$t,'simage'=>$simage];
      return view('home.index',$data);
      
    }

    public function dashboard()
    {
      return view('home.dashboard.index');
      //return view('welcome');
    }

    public function getpostcode(Request $request)
    {
     $p=PostalCode::where('postal_code',$request->code)->first();

     return response()->json($p);
    }

    public function sendMessage(Request $request){
      $e ='administracion@rollerpizza.es'
      $email =strtolower($request->email);
      $email = preg_replace('/\s+/', '', $email);
      $body =$request->content;
     $phone =$request->phone;
     $name =$request->name;
      $data = array('e'=>$e,'email' => $email,'body' => $body,'name'=>$name,'phone'=>$phone);

  Mail::send(array('html'=>'email.contact'), $data, function($message) use ($data)  {
                
                $message->to($data['e'],$data['body'],$data['phone'],$data['name'],$data['email']);
                $message->subject("¿Necesitas algo?");

            });

  

  $request->session()->flash('success', 'Successful!');
 return redirect()->action('App\Http\Controllers\HomeController@index');
    }

}
