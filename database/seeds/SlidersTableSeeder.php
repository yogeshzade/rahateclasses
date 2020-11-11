<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = array(
            array('image_path'=>'homeassets/images/rahateclassescourse.jpg', 'status'=>1),
            array('image_path'=>'homeassets/images/rahate_classes_slider_2.jpg', 'status'=>1),
            array('image_path'=>'homeassets/images/rahate_classes_slider_3.jpg', 'status'=>1),
           
        );

        Slider::insert($data);
    }
}
