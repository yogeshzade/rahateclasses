<?php

use Illuminate\Database\Seeder;
use App\NewsAndUpdate;

class NotificationUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $notifications  = array(

        	array(

        	'notification_title' => 'Now Apply Admission Online',
        	'notification_body' => 'CLick Here To Apply Online',
        	'notification_link' => '/student/register',

        	),

        	array(

        	'notification_title' => 'Now Check And Pay Fees Online',
        	'notification_body' => 'Click Here To Check',
        	'notification_link' => '/student/register',

        	)

        );

        NewsAndUpdate::insert($notifications);

      
    }
}
