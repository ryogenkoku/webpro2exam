<html>
<head>
<title>
</title>
</head>
<body>
	<form name="form1" method="post" action="./sales.php">
	<ul class="products">
<?php
try {
	echo $_GET["id"];
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
    $stmt = $pdo->query('SELECT * FROM products where id = '.$_GET["id"]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo"<li>".$row["name"]."</li><li>".$row["price"]."</li>";
        echo"<input name='ming' type='hidden' value='".$row["name"]."' />";
         echo"<input name='jia' type='hidden' value='".$row["price"]."' />";
         echo"<input name='hao' type='hidden' value='".$row["id"]."' />";

    
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
}



$pdo = null;
?>


	<input name="shuliang" type="text" size="12" maxlength="6" /> 
  <input type="button" name="Button" value="Button" onClick="submit()">
</form>

</body>
</html>