<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   /* public function user()
    {
        return view('account/addUsers');
    }*/

    public function adduser()
    {
        $data = Role::all();
        return view('account/addUsers', ['var' => $data]);
    }

    public function saveUser(Request $request)
    {
       // dd($request);die();
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $phone=$request->phone;
        $cnic=$request->cnic;
        $role = $request->role;

        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $uploadpath="img/";
        $imgurl=$uploadpath.$filename;
        $success=$image->move($uploadpath,$filename);

        $s = new User();
        $s->name = $name;
        $s->email = $email;
        $s->password = Hash::make($password);
        $s->phone=$phone;
        $s->cnic=$cnic;
        $s->image=$imgurl;
        $s->save();
        $s->attachRole($role);

        return back();
        // return view();
    }
    public function manageUser( ) //manage User
    {

        $get=User::select(DB::raw('*,users.id as uid,roles.name as rolename'))->join('role_user','role_user.user_id','=','users.id')->join('roles','role_user.role_id','=','roles.id')->get(); //join migration
        return view('account/manageUser', ['var' => $get]);
    }
    public function editUser(Request $request){
        $id=$request->id;
        $data=User::where('id','=',$id)->first(); //first use for one row access
        $role=Role::all();
        return view('account/editUser',['show' => $data, 'role' =>$role]);
    }
    public function updateUser(Request $request)
    {
        $id=$request->id;
       // echo $id; die();
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $phone=$request->phone;
        $cnic=$request->cnic;
        $role = $request->role;
       // echo $role; die();
         $image = $request->file('image');
        $filename= time() . '.' . $image->getClientOriginalExtension();
        $uploadpath="img/";
        $imgurl=$uploadpath.$filename;
        $success=$image->move($uploadpath,$filename);

        User::where('id','=',$id)->update(['name' => $name, 'email' => $email, 'password' =>  Hash::make($password),'phone'=>$phone, 'cnic'=>$cnic, 'image'=>$imgurl]);
        $Updaterole=DB::table('role_user')->where('user_id','=',$request->id)->update([
            'role_id' => $role
        ]);
        return $this->manageUser();
    }
    public function deleteUser(Request $request)
    {
        $id=$request->id;
        User::where('id', '=' ,$id)->delete();
        return $this->manageUser();
    }
    public function adminProfile()
    {
        return view( 'auth.adminProfile');

    }
}