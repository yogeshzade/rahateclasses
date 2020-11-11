<?php

use Illuminate\Database\Seeder;
use App\Popup;

class PopUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $popup = new Popups;
        // $popup->status = 1;
        // $popup->img_path = "homeassets\images\rahate-campus-campus.jpg";
        // $popup-save();

    Popup::create([
        'status' => 1,
        'img_path' => "homeassets\images\rahate-campus-campus.jpg"
    ]);


       
    }
}
