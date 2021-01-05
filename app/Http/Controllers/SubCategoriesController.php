<?php

namespace App\Http\Controllers;

use App\Categories;
use App\SubCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoriesController extends Controller
{
    //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $get=Categories::all();
        return view('subCategories/sub', ['var' => $get]);
    }
    public function find_sub_cat(Request $request){
        $getdata = SubCategories::where('category_id','=',$request->id)->get();
        foreach($getdata as $g){
            $data[] = array('id' => $g->id,'value' => $g->sub);
        }
        return json_encode($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_id = $request->category_id;
        $sub = $request->sub;
        $value = $request->value;

        $s=new SubCategories();
        $s->category_id = $category_id;

        $s->sub = $sub;
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
    public function show()
    {
        //$get=Recipient::all();
        /*  $get=Recipient :: raw('categories')
              ->join('recipients','categories.id','=','recipients.category_id')
              ->select('categories.name')->get();*/
        /*$get = Category::join('recipients', 'recipients.category_id', '=', 'categories.id')
            ->select('recipients.*' )
            ->get();//join migration*/
        $get =Categories::select(DB::raw('*,sub_categories.id as sid'))->join('sub_categories', 'sub_categories.category_id', '=', 'categories.id')

            ->get();//join migration
        return view('subCategories/show', ['var' => $get]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $data=SubCategories::where('id','=',$id)->first(); //first use for one row access
        $get=Categories::all();
        return view('subCategories/edit',['show' => $data, 'cat' =>$get]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id=$request->id;
        // echo $id; die();
        $category_id = $request->category_id;
        $sub = $request->sub;
        $value = $request->value;
        // echo $role; die();
        SubCategories::where('id','=',$id)->update([ 'value' => $value ,'category_id'=>$category_id, 'sub'=>$sub]);

        return $this->show();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $id=$request->id;
        SubCategories::where('id', '=' ,$id)->delete();
        return $this->show();
    }
}
