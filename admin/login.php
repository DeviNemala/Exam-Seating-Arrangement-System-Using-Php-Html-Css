<?php 
   $pdo=new PDO('mysql:host=localhost;port=3306;dbname=exam_allot','root' );
   $pdo->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
 try{  if(isset($_POST['ac']) && isset($_POST['pw'])){
     session_start();
    $stmt=$pdo->query("select * from admins");
    while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
      if($row['aname']==$_POST['ac'] && $row['apass']==$_POST['pw'] ){
        $_SESSION['name']=$row['aname'];
      }
      
 }


if($_SESSION['name']==$_POST['ac'])
{
  $_POST=array();
  header("Location: ../new/roomdetail.php");
}
}
 }catch(Exception $e)
  {
      echo "Internal Error Contact Admin";
      error_log("aindex.php,SQL error=".$e->getMessage());
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="logincss.css">
	<script type="text/javascript" src="js.js"></script>
</head>
<body>
<body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form name="form1" class="box" method="post">
      <h4>Admin<span>Dashboard</span></h4>
      <h5>Sign in to your account.</h5>
        <input type="text" name="ac" placeholder="id" id="ac" autocomplete="off" required>
        <input type="password" name="pw" placeholder="Passsword" id="pw" autocomplete="off" required>
        <input type="submit" value="Sign in" class="btn1">
      </form>
  </div> 
       <div class="footer">
       <span>Made by CSE Srikakulam</span>
    </div>
</div>
</body>
</html>