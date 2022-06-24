<?php


namespace App\Services;


use App\Order;

class OrderService
{
    public function storeNewPDF(
        String $first_name,
        String $last_name,
        String $email,
        Int $whatsapp_number,
        String $message) : Order
    {
        $order = Order::create([
            'First_name' => $first_name,
            'Last_name' => $last_name,
            'Email'      => $email,
            'whatsapp_number' => $whatsapp_number,
            'Message'   => $message
        ]);
        return $order;
    }
}
