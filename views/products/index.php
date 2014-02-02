<html>
<head>
<title>
</title>
</head>
<body>
	<ul class="products">
<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
    $stmt = $pdo->query('SELECT * FROM products');

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo"<li><a href='views/sales/new.php?id=".$row["id"]."'>".$row["name"]."</a></li>";
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
}

$pdo = null;
?>
</body>
</html>