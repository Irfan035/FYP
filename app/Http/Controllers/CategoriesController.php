<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function donationItem()
    {
        return view('categories/donationItem');
    }
    public function addItem(Request $request)
    {
        $name = $request->name;


        $s=new Categories();
        $s->name = $name;

        $s->save();
        return back();
    }
    public function manageItem( ) //manage User
    {

        $get=Categories::all();
        return view('categories/manageCategories', ['var' => $get]);
    }
    public function editItem(Request $request){
        $id=$request->id;
        $data=Categories::where('id','=',$id)->first(); //first use for one row access
        return view('categories/editItem',['show' => $data]);
    }
    public function updateItem(Request $request)
    {
        $id=$request->id;
        // echo $id; die();
        $name = $request->name;

        // echo $role; die();
        Categories::where('id','=',$id)->update(['name' => $name]);

        return $this->manageItem();
    }
    public function deleteItem(Request $request)
    {
        $id=$request->id;
        Categories::where('id', '=' ,$id)->delete();
        return $this->manageItem();
    }
}
