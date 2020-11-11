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
          User::create([
        'name' => "Rahate Admin",
        'email' => "rahate@admin.com",
        "password" => "$2y$10$7/sow9qH8ftGsvGN2of3i.aLR5OiH312XxL4f8sc/P0Y.p7Rzs5fC", //12345678
        "is_admin" => 1,
        "mobile" => "9765679147",
    ]);

    }
}
