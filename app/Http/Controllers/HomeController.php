<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Donor;
use App\Recipient;
use App\Role;
use App\Stock;
use App\SubCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->roles()->first()->name == 'Donor')
       {
           $get = Categories::all();
           $sub = SubCategories::all();
           return view('donor/donor', ['var' => $get, 's' => $sub]);
        }
        elseif (Auth::user()->roles()->first()->name == 'Recipient' )
        {
            $get = Categories::all();
            $sub = SubCategories::all();
            return view('recipient/recipient', ['var' => $get, 's' => $sub]);
        }
        elseif(Auth::user()->roles()->first()->name =='Admin') {
            $donate = Donor::where('status', '=', null)->get();
            $recipient = Recipient::where('status', '=', null)->get();
            return view('home', compact('donate', 'recipient'));
        }
        else{

            $data=Role::all();
            //$get=Role::all(); //select * from model--migration
            return view( 'auth.reg',['var' => $data]);
        }
    }
// Donor notifaction  Delete

    public function delete(Request $request)
    {

        $id=$request->id;
        Donor::where('id', '=' ,$id)->delete();
        return $this->index();
    }

    // Recipient notifaction  Delete

    public function R_delete(Request $request)
    {

        $id=$request->id;
        Recipient::where('id', '=' ,$id)->delete();
        return $this->index();
    }

    //management
    public function mstock(Request $request)
    {

        $get = SubCategories::select(DB::raw('*,stocks.id as sid'))->join('stocks', 'stocks.subCategory_id', '=', 'sub_categories.id')
            ->join('categories', 'stocks.categor_id', '=', 'categories.id')
            ->get();
return view('stock/show',['var' => $get]);
    }

}
