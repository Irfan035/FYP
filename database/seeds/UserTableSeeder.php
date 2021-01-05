<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $u= new \App\User();
        $u->name="Irfan";
        $u->email="admin@gmail.com";
        $u->phone="46546565454";
        $u->cnic="4654654654654";
        $u->password=\Illuminate\Support\Facades\Hash::make("1234567");
        $u->image="4654654654654";
        $u->save();
//Admin
        $r= new \App\Role();
        $r->name="Admin";
        $r->save();
        $u->attachRole($r->id);


        /*$r= new \App\Role();
        $r->name="Manager";
        $r->save();*/

        //Donor
        $r= new \App\Role();
        $r->name="Donor";
        $r->save();

        //Recipient
        $r= new \App\Role();
        $r->name="Recipient ";
        $r->save();


    }
}
