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
</style>
<html>
<head>
<title>
</title>
</head>
<body>
	<div id="buner">
	<ul>
<li><a href="#">商品一覧</a></li>
<li><a href="http://localhost/webpro2exam/views/sales/index.php">売上一覧</a></li>
	</ul></div>
	<p>商品を選択してください</p>
	<ul class="products">
<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
    $stmt = $pdo->query('SELECT * FROM products');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo"<li><a href='http://localhost/webpro2exam/views/sales/new.php?id=".$row["id"]."'>".$row["name"]."</a></li>";
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
}

$pdo = null;
?>
</body>
</html>