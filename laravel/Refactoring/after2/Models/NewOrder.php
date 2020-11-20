<?php
use App\Item;
use App\Log;
use App\Order;


class NewOrder{
    public function register($r,$id){
        $user_id = $id;
        $items = $r["items"];
        DB::beginTransaction();
        try{
            Order::register;

            foreach($items as $item){
                Item::register;
            };
            Log::register;
            DB::commit();
        }catch(\Exception $e) {
            DB::roolback();
        };
    }
}