<style>
 #buner {
   
 position: relative;
 overflow: hidden;
 }
 #buner li{
    float:left;
   padding-left:20px;
    margin:20px;
    border-left:solid 1px #000;
 }
 p{margin-left:50px;}
.products li{
    padding-top:10px;
}
td {padding:5px;
text-align:center;}

</style>
<html>
<head>
<title>
</title>
</head>
<body>
    <div id="buner">
    <ul>
<li><a href="../products/index.php">商品一覧</a></li>
<li><a href="#">売上一覧</a></li>
    </ul></div>
	<table class="sales">
<tr><td>購入時間</td><td>購入数</td><td>商品名</td><td>価格</td></tr>
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

