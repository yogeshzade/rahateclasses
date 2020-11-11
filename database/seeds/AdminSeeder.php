<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = "Rahate Admin";
        $user->email = "rahate@admin.com";
        $user->password = "$2y$10$7/sow9qH8ftGsvGN2of3i.aLR5OiH312XxL4f8sc/P0Y.p7Rzs5fC"; //12345678
        $user->is_admin = 1;
        $user->mobile = "9765679147";
        $user->save();
    }
}
