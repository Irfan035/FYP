<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{

    public function donor()
    {
        $get= Categories::all();

        return view('donor/donor', ['var'=>$get]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function d_store(Request $request)
    {
        $category_id = $request->category_id;
        $country = $request->country;
        $city = $request->city;
        $value = $request->value;

        $s=new Donor();
        $s->categor_id = $category_id;
        $s->country = $country;
        $s->city = $city;
        $s->value = $value;
        $s->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function d_show()
    {
        //$get=Recipient::all();
        /*  $get=Recipient :: raw('categories')
              ->join('recipients','categories.id','=','recipients.category_id')
              ->select('categories.name')->get();*/
        $get = Categories::select(DB::raw('*,donors.id as did'))->join('donors', 'donors.categor_id', '=', 'categories.id')

            ->get();//join migration
        return view('donor/showDonor', ['var' => $get]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function d_edit(Request $request)
    {
        $id=$request->id;
        $data=Donor::where('id','=',$id)->first(); //first use for one row access
        $get=Categories::all();
        return view('donor/editDonor',['show' => $data, 'cat' =>$get]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function d_update(Request $request)
    {

        $id=$request->id;
        //echo $id; die();
        $category_id = $request->category_id;
        $country = $request->country;
        $city = $request->city;
        $value = $request->value;
        // echo $role; die();
        Donor::where('id','=',$id)->update([ 'value' => $value ,'categor_id'=>$category_id, 'country'=>$country,'city'=>$city]);

        return $this->d_show();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function d_destroy(Request $request)
    {

        $id=$request->id;
        Donor::where('id', '=' ,$id)->delete();
        return $this->r_show();
    }
}
