<?php

namespace App\Http\Controllers;

use App\contact;
use App\Mail\sendmail;
use App\Role;
use App\User;
use App\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegController extends Controller

{


    public function index()
    {
        return view('Index');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactForm(Request $request)
    {

        $name=$request->name;
        $company=$request->company;
        $email=$request->email;

        $phone=$request->phone;
        $message=$request->message;

        // dd($name,$email,$password,$role);

        $s=new contact();
        $s->name=$name;
        $s->company=$company;
        $s->email=$email;
        $s->phone=$phone;
        $s->message=$message;
        /*$s->name=$role;*/
        $s->save();
        return view('contact');
    }

    public function volunteer()
    {
        return view('volunteer');
    }
    public function volunteerform(Request $request)
    {

        $name=$request->name;
        $province=$request->province;
        $skill=$request->skill;
        $email=$request->email;
        $phone=$request->phone;
        $message=$request->message;


        /* dd($name,$email,$skill,$province,$phone,$message);
         die();*/

        $s=new Volunteer();
        $s->name=$name;
        $s->province=$province;
        $s->skill=$skill;
        $s->email=$email;
        $s->phone=$phone;
        $s->message=$message;
        /*$s->name=$role;*/
        $s->save();
        return view('volunteer');
    }

    public function Donation()
    {
        return view('donor');
    }
    public function impact()
    {
        return view('impact');
    }

    public function partner()
    {
        return view('partner');
    }
    public function whyjoin()
    {
        return view('whyjoin');
    }
    public function cash()
    {
        return view('programs.cash');
    }
    public function clothes()
    {
        return view('programs.clothes-bank');
    }
    public function dowry()
    {
        return view('programs.dowry');
    }
    public function food()
    {
        return view('programs.food');
    }
    public function healthcare()
    {
        return view('programs.healthcare');
    }
    public function tents()
    {
        return view('programs.tents');
    }




    public function registration()
    {
        $data=Role::all();
        //$get=Role::all(); //select * from model--migration
        return view( 'auth.reg',['var' => $data]);
      //return view('auth.reg');
    }
    public function editProfile()
    {
       // $data=Role::all();
        //$get=Role::all(); //select * from model--migration
        return view( 'auth.editProfile');
        //return view('auth.reg');
    }
public function reg(Request $request)
{
  /*  $this->validate($request,[
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'phone'=>['required','string','min:11', 'unique:users'],
        'cnic'=>['required','string','min:13', 'unique:users'],
        'role' => ['required', 'string'],
    ]);
    $data= array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'phone' => $request->phone,
        'cnic' => $request->cnic,
        'role' => $request->role,
    );*/

  $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'phone'=>['required','string','min:11', 'unique:users'],
        'cnic'=>['required','string','min:13', 'unique:users'],
        'role' => ['required', 'string'],

    ]);
    //echo $request;die;
    //dd($request);die();
   // $request->validate()

    $name=$request->name;
    $email=$request->email;
    $password=$request->password;
    $phone=$request->phone;
    $cnic=$request->cnic;
   $role=$request->role;
  // dd($name,$email,$password,$role);

    $s=new User();
    $s->name=$name;
    $s->email=$email;
    $s->password=\Illuminate\Support\Facades\Hash::make($password);
    $s->phone=$phone;
    $s->cnic=$cnic;
   /*$s->name=$role;*/
    $s->save();
   // $s=new Role();
    $s->attachRole($role);
   // $get=Role::all(); //select * from model--migration
  // Mail::to('irfangujjar035@gmail.com')->send(new Auth($request));
    return view( 'welcome',['var' => $s]);
   // return view();
}
}
