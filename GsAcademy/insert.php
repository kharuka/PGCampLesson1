<?php

// 入力チェック（受信確認処理追加）
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["sex"]) || $_POST["sex"]=="" ||
  !isset($_POST["course"]) || $_POST["course"]=="" ||
  ((!isset($_POST['accessroot']) || $_POST['accessroot']=="") && is_array($_POST['accessroot'])) ||
  !isset($_POST['accessroot']) || $_POST['accessroot']=="" ||
  !isset($_POST["date_time"]) || $_POST["date_time"]=="" ||
  !isset($_POST["textarea"])
  ){
     exit('ParamError');
   }

// if(
// !empty($_POST["name"])
// !empty($_POST["email"])
// !empty($_POST["naiyou"])
// ){
//   exit('ParamError');
// }

// POSTデータ取得
$name=$_POST["name"];
$email=$_POST["email"];
$sex=$_POST["sex"];
$course=$_POST["course"];
$accessroot=implode(",",$_POST['accessroot']);
// var_dump($accessroot);
$date_time=$_POST["date_time"];
if($_POST["textarea"]==""){
  $textarea=$_POST["textarea"]."未入力";
}else {
  $textarea=$_POST["textarea"];
}

// DB接続します（エラー処理追加）
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
  exit('DbConnectError:'.$e->getMessage());
}

// データ登録SQL作成
$sql="INSERT INTO gs_academy_table(id,name,email,sex,course,accessroot,date_time,textarea,datetime)
VALUES(NULL,:a1,:a2,:a3,:a4,:a5,:a6,:a7,sysdate())";

$stmt=$pdo->prepare($sql);

$stmt->bindValue(':a1',$name,PDO::PARAM_STR);
$stmt->bindValue(':a2',$email,PDO::PARAM_STR);
$stmt->bindValue(':a3',$sex,PDO::PARAM_STR);
$stmt->bindValue(':a4',$course,PDO::PARAM_STR);
$stmt->bindValue(':a5',$accessroot,PDO::PARAM_STR);
$stmt->bindValue(':a6',$date_time,PDO::PARAM_STR);
$stmt->bindValue(':a7',$textarea,PDO::PARAM_STR);

// SQL実行
$status = $stmt->execute();

// データ登録処理後
if($status == false){
  // SQL実行時にエラーがある場合（エラーオブジェクトを取得して表示）
  $error=$stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  // リダイレクト
  header("Location: index.php");
  exit;
}

 ?>
