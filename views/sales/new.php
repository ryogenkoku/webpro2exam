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
<li><a href="http://localhost/webpro2exam/views/products/index.php">商品一覧</a></li>
<li><a href="index.php">売上一覧</a></li>
  </ul></div>
  <h1>商品詳細</h1>
  <p>購入数を入力して、購入ボタン押してください</p>
  <table>
	<form name="form1" method="post" action="./sales.php">
	
<?php
try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=webpro2examdb;charset=utf8;', 'root', '');
    $stmt = $pdo->query('SELECT * FROM products where id = '.$_GET["id"]);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo"<tr><td>商品名</td><td>".$row["name"]."</td></tr><tr><td>価格</td><td>".$row["price"]."</td></tr>";
        echo"<input name='ming' type='hidden' value='".$row["name"]."' />";
         echo"<input name='jia' type='hidden' value='".$row["price"]."' />";
         echo"<input name='hao' type='hidden' value='".$row["id"]."' />";

    
    }
} catch (PDOException $e) {
    var_dump($e->getMessage());
}



$pdo = null;
?>



	<tr><td>購入数</td><td><input name="shuliang" type="text" size="12" maxlength="6" /> 

  <input type="button" name="Button" value="購入" onClick="submit()"></td></tr>
</form>
  </tables>

</body>
</html>