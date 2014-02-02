<?php
class ProductsController {
    public function index() {
       
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