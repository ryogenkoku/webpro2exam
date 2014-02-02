<?php
class ProductsController {
    public function index() {
        // 何かの処理...

        $model_data = array('テレビ', '掃除機', '洗濯機');
        include('views/products/index.php');
    }
}

$controller = new ProductsController();
$controller->index();

class SalesController {
   public function newActionP(){

   	     include('views/sales/new.php');
   }

}