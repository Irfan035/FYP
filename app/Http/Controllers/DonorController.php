<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Donor;
use App\Stock;
use App\SubCategories;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DonorController extends Controller
{

    public function donor()
    {
       // $donor=Auth::user()->roles()->first()->name;

        //Check |Login
            if(Auth::user() == null){
                return redirect('login');
            }
            else
            {
                $get = Categories::all();
                $sub = SubCategories::all();
                return view('donor/donor', ['var' => $get, 's' => $sub]);
            }

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
        $donor_id = $request->donor_id;
        $category_id = $request->category_id;
        $subCategory_id = $request->subCategory_id;
        $value = $request->value;
        $unit = $request->unit;
        $s=new Donor();
        $s->donor_id = $donor_id;
        $s->categor_id = $category_id;
        $s->subCategory_id = $subCategory_id;
        $s->unit = $unit;
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
      /*  $get = Categories::select(DB::raw('*,donors.id as did'))
            ->join('donors', 'donors.categor_id', '=', 'categories.id')
            ->join('sub_categories','sub_categories.id','=','donors.subCategory_id')
            ->get();//join migration*/
      $get = SubCategories::select(DB::raw('*,donors.id as did'))->join('donors', 'donors.subCategory_id', '=', 'sub_categories.id')
          ->join('categories', 'donors.categor_id', '=', 'categories.id')
            ->get();
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
        $sub=SubCategories::all();
        return view('donor/editDonor',['show' => $data, 'cat' =>$get, 's'=>$sub]);
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
        $donor_id = $request->donor_id;
        $category_id = $request->category_id;
        $subCategory_id = $request->subCategory_id;
        $value = $request->value;
        $unit = $request->unit;
        // echo $role; die();
        Donor::where('id','=',$id)->update([ 'donor_id' => $donor_id ,'value' => $value ,'categor_id'=>$category_id, 'subCategory_id'=>$subCategory_id, 'unit'=>$unit]);

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

    //dontion Managemnt
    public function sumDonation(Request $request){
        $id = $request->id;
        $getThisIDRecord = Donor::where('id','=',$id)->first();
        //categor_id subCategory_id
        $getIfAlreadyHaveCatAndSubCat = Stock::where('categor_id',$getThisIDRecord->categor_id)
            ->where('categor_id',$getThisIDRecord->subCategory_id)->get();
        if(count($getIfAlreadyHaveCatAndSubCat) > 0){
            $getIfAlreadyHaveCatAndSubCatGET = Stock::where('categor_id',$getThisIDRecord->categor_id)
                ->where('categor_id',$getThisIDRecord->subCategory_id)->first();
            $updateStock = Stock::where('categor_id',$getThisIDRecord->categor_id)
                ->where('categor_id',$getThisIDRecord->subCategory_id)->update([
                    'value' => $getIfAlreadyHaveCatAndSubCatGET->value + $getThisIDRecord->value
                ]);
        }else{
            $save = new Stock();
            $save->categor_id = $getThisIDRecord->categor_id;
            $save->subCategory_id= $getThisIDRecord->subCategory_id;
            $save->value =$getThisIDRecord->value;
            $save->unit = $getThisIDRecord->unit;
            $save->save();

        }
        Donor::where('id','=',$id)->update(['status' => 1]);
        return back();
    }
  //end management
}
