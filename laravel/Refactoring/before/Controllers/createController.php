<?php

use App\Order;
use App\Item;
use App\UseLog;

class OrderCreateContoroller{

    public function store(Request $r,$id){
        $user_id = $id;
        $items = $r["items"];
        DB::beginTransaction();
        try{
            $order = Order::create([
                "number" => "Order-123456"
            ]);

            foreach($items as $item){
                Item::create([
                    "name" => $item["name"],
                    "order_id" => $order->id
                ]);
            };
            UseLog::create([
                "order_id" => $order->id,
                "user_id" => $user_id,
            ]);
            DB::commit();
        }catch(\Exception $e) {
            DB::roolback();
        };
    }
}

