

	<?php
class ProductsController1 {
	public function index() {	


$name = $_POST['shuliang'];

$name3 = $_POST['hao'];

$name4 = date('Y-m-d');


try {
    $pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2examdb; charset=utf8;', 'root', '');
    $stmt = $pdo->prepare('INSERT INTO sales (product_id, sales_at, quantity) VALUES (:CONTENT, now(), :CONTENT)');
 
    $stmt->bindValue('CONTENT', $name3);
   
    $stmt->bindValue('CONTENT', $name);
    $stmt->execute();  
    
    
    } 
catch (PDOException $e) {
    var_dump($e->getMessage());
                        }

$pdo = null;

include('./index.php');
}

}

$controller1 = new ProductsController1();
$controller1->index();

?>
