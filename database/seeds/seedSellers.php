<?php

use Illuminate\Database\Seeder;
use App\sellers;

class seedSellers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new sellers();
        $obj->name = 'Bassem Khaled';
        $obj->email = 'bassemkhaled137@gmail.com';
        $obj->image = 'images/user/user.png';
        $obj->phone = '01273726382';
        $obj->descri = 'Hello Rent House';
        $obj->save();
    }
}
