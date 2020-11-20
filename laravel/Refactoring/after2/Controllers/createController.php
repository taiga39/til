<?php

use App\NewOrder;
class OrderCreateContoroller{

    public function store(Request $r,$id){
        $order = new NewOrder;
        $order->register($r,$id);
    }
}