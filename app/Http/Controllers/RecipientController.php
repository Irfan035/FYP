<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Category;
use App\Country;
use App\Recipient;
use App\Stock;
use App\SubCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecipientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recipient()
    {
        if(Auth::user() == null){
            return redirect('login');
        }else {
            $get = Categories::all();
            $sub = SubCategories::all();
            return view('recipient/recipient', ['var' => $get, 's' => $sub]);
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
    public function r_store(Request $request)
    {
        $recipient_id = $request->recipient_id;
        $category_id = $request->category_id;
        $subCategory_id = $request->subCategory_id;

        $value = $request->value;
        $unit = $request->unit;
        $message = $request->message;
        //$bill = $request->bill;
        $image = $request->file('bill');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $uploadpath="img/";
        $imgurl=$uploadpath.$filename;
        $success=$image->move($uploadpath,$filename);

        $s=new Recipient();
        $s->recipient_id = $recipient_id;
        $s->category_id = $category_id;
        $s->subCategory_id = $subCategory_id;
        $s->value = $value;
        $s->unit = $unit;
        $s->message = $message;

        $s->Ebill=$imgurl;
        $s->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function r_show()
    {
        //$get=Recipient::all();
      /*  $get=Recipient :: raw('categories')
            ->join('recipients','categories.id','=','recipients.category_id')
            ->select('categories.name')->get();*/
        /*$get = Category::join('recipients', 'recipients.category_id', '=', 'categories.id')
            ->select('recipients.*' )
            ->get();//join migration*/
/*        $get = Categories::select(DB::raw('*,recipients.id as rid'))
            ->join('recipients', 'recipients.category_id', '=', 'categories.id')
            ->join('sub_categories','sub_categories.id','=','recipients.subCategory_id')
            ->get();*/
        $sub = SubCategories::select(DB::raw('*,recipients.id as rid'))
            ->join('recipients', 'recipients.subCategory_id', '=', 'sub_categories.id')
            ->join('categories', 'recipients.category_id', '=', 'categories.id')
            ->get();//join migration
        //dd($get);
        return view('recipient/showRecipient', [/*'var' => $get, */'s'=>$sub]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function r_edit(Request $request)
    {
        $id=$request->id;
        $data=Recipient::where('id','=',$id)->first(); //first use for one row access
        $get=Categories::all();
        $sub=SubCategories::all();
        return view('recipient/editRecipient',['show' => $data, 'cat' =>$get, 's'=>$sub]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function r_update(Request $request)
    {

        $id=$request->id;
        // echo $id; die();
        $recipient_id = $request->recipient_id;
        $category_id = $request->category_id;
        $subCategory_id = $request->subCategory_id;
        $value = $request->value;
        $unit = $request->unit;
        $message = $request->message;
        $image = $request->file('image');
        $filename= time() . '.' . $image->getClientOriginalExtension();
        $uploadpath="img/";
        $imgurl=$uploadpath.$filename;
        $success=$image->move($uploadpath,$filename);
        // echo $role; die();
        Recipient::where('id','=',$id)->update(['recipient_id' => $recipient_id ,'Ebill' => $imgurl ,'message' => $message ,'unit' => $unit , 'value' => $value ,'category_id'=>$category_id, 'subCategory_id'=>$subCategory_id]);

        return $this->r_show();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function r_destroy(Request $request)
    {

        $id=$request->id;
        Recipient::where('id', '=' ,$id)->delete();
        return $this->r_show();
    }
    public function subtract(Request $request){
        $id = $request->id;
        $getThisIDRecord = Recipient::where('id','=',$id)->first();
        //categor_id subCategory_id
        $getIfAlreadyHaveCatAndSubCat = Stock::where('categor_id',$getThisIDRecord->category_id)
            ->where('subCategory_id',$getThisIDRecord->subCategory_id)->get();
        if(count($getIfAlreadyHaveCatAndSubCat) > 0){
            $getIfAlreadyHaveCatAndSubCatGET = Stock::where('categor_id',$getThisIDRecord->category_id)
                ->where('subCategory_id',$getThisIDRecord->subCategory_id)->first();
            $updateStock = Stock::where('categor_id',$getThisIDRecord->category_id)
                ->where('subCategory_id',$getThisIDRecord->subCategory_id)->update([
                    'value' => $getIfAlreadyHaveCatAndSubCatGET->value - $getThisIDRecord->value
                ]);
        }else{
//            $save = new Stock();
//            $save->category_id = $getThisIDRecord->category_id;
//            $save->subCategory_id= $getThisIDRecord->subCategory_id;
//            $save->value =$getThisIDRecord->value;
//            $save->unit = $getThisIDRecord->unit;
//            $save->save();

        }
        Recipient::where('id','=',$id)->update(['status' => 1]);
        return back();
    }
}
