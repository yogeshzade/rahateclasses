<?php

use Illuminate\Database\Seeder;
use App\CourseClass;

class CourseClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(

            array(
                'classname'=>'7th', 
                'type'=>'NCERT'
              
               ),

               array(
                'classname'=>'7th', 
                'type'=>'INTEGRATED NCERT + PRE FOUNDATION'
              
               ),

               array(
                'classname'=>'7th', 
                'type'=>'STATE BOARD'
              
               ),

               array(
                'classname'=>'8th', 
                'type'=>'NCERT'
              
               ),

               array(
                'classname'=>'8th', 
                'type'=>'INTEGRATED NCERT + PRE FOUNDATION'
              
               ),

               array(
                'classname'=>'8th', 
                'type'=>'STATE BOARD'
              
               ),

            //    9th

            
            array(
                'classname'=>'9th', 
                'type'=>'NCERT'
              
               ),

               array(
                'classname'=>'9th', 
                'type'=>'INTEGRATED NCERT + PRE FOUNDATION'
              
               ),

               array(
                'classname'=>'9th', 
                'type'=>'STATE BOARD'
              
               ),
               

               array(
                'classname'=>'10th', 
                'type'=>'NCERT'
              
               ),

               array(
                'classname'=>'10th', 
                'type'=>'INTEGRATED NCERT + PRE FOUNDATION'
              
               ),

               array(
                'classname'=>'10th', 
                'type'=>'STATE BOARD'
              
               ),

               array(
                'classname'=>'11th + 12th', 
                'type'=>'JEE (MAIN + ADVANCED) / UG - NEET'
              
               ),

               array(
                'classname'=>'11th + 12th', 
                'type'=>'BOARD & COMPETATIVE FEES'
              
               ),

               
               

              
           
            
        );

        CourseClass::insert($data);


    }
}
