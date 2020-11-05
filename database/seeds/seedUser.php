<?php

use Illuminate\Database\Seeder;
use App\Users;
class seedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = new users();
        $obj->name = 'Bassem Khaled';
        $obj->email = 'bassemkhaled137@gmail.com';
        $obj->password = bcrypt('123456');
        $obj->save();
    }
}
