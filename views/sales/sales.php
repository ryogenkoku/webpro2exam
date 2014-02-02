

	<?php
class SalesController {
	public function index() {	


$quantity = $_POST['shuliang'];

$id = $_POST['hao'];




try {
    $pdo = new PDO('mysql:host=127.0.0.1; dbname=webpro2examdb; charset=utf8;', 'root', '');
    $stmt = $pdo->prepare('INSERT INTO sales (product_id, sales_at, quantity) VALUES (:CONTENT, now(), :CONTENT)');
 
    $stmt->bindValue('CONTENT', $id);
   
    $stmt->bindValue('CONTENT', $quantity);
    $stmt->execute();  
    
    
    } 
catch (PDOException $e) {
    var_dump($e->getMessage());
                        }

$pdo = null;

include('./index.php');
}

}

$controller = new SalesController ();
$controller->index();

?>
