<?php

use App\Order;
class OrderCreateContoroller{

    public function store(Request $r,$id){
        $order = new Order;
        $order->register($r,$id);
    }
}