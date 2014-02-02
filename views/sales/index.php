<html>
<head>
<title>
</title>
</head>
<body>
	<table class="sales">

<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
    $stmt = $pdo->query('SELECT products.id,sales.id,sales.sales_at,products.name,products.price,sales.quantity FROM sales, products where sales.product_id=products.id');
    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo"<tr><td>".$row["sales_at"]."</td>";  
        echo"<td>".$row["quantity"]."</td>";
        echo"<td>".$row["name"]."</td>";  
        echo"<td>".$row["price"]."</td></tr>";
    } 
} catch (PDOException $e) {
    var_dump($e->getMessage());
}

$pdo = null;

?>

</table>
  
</body>
</html>

