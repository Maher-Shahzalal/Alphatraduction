<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class,1000)->create();
/**
    	Order::create(
    		[
    		'First_name'      => 'Maher',
            'Last_name'       => 'Shahzalal',
            'Email'           => 'maher@gmail.com',
            'whatsapp_number' => '00249908805068',
            'Message'         => 'I am so hungry'
    		]
    	);

    	Order::create(
    		[
    		'First_name'      => 'Nawarh',
            'Last_name'       => 'Ayachi',
            'Email'           => 'ayachinour@gmail.com',
            'whatsapp_number' => '00249908805068',
            'Message'         => 'I am so mad'
    		]
    	);
  **/
    }
}
