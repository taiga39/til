<?php
use App\Item;
use App\UseLog;

class Order{

    public function register($r,$id){
        $user_id = $id;
        $items = $r["items"];
        $order->register($r);
        DB::beginTransaction();
        try{
            $order = $this->create([
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