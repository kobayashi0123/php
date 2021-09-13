<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html;charset=Shift_JIS">
 <style type = "text/css">
 <!--
 .box26 {
    position: relative;
    margin: 2em 0;
    padding: 0.5em 1em;
    border: solid 3px black;
    border-radius: 8px;
}
.box26 .box-title {
    position: absolute;
    display: inline-block;
    top: -13px;
    left: 10px;
    padding: 0 9px;
    line-height: 1;
    font-size: 19px;
    background: #FFF;
    color: black;
    font-weight: bold;
}
.box26 p {
    margin: 0; 
    padding: 0;
}
 -->
 </style>
 <title>出力フォーム</title>
</head>
<body>
<div class = "box26">
<span class = "box-title">入力確認</span>
<br>
<?php
	$name=$_POST['your_name'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$addrres=$_POST['post_number'];
	$e_mail=$_POST['e_mail'];
	$flavor=$_POST['flavor'];
	$topings=$_POST['toping'];
	$opinion=$_POST['opinion'];
	echo htmlspecialchars($name,ENT_QUOTES),'様の登録内容は、以下の内容でよろしいでしょうか？','</br>';
	echo '氏名 :','</br>','　　　　　',htmlspecialchars($name,ENT_QUOTES),'</br>';
	echo '性別 :','</br>','　　　　　',htmlspecialchars($gender,ENT_QUOTES),'</br>';
	echo '年齢 :','</br>','　　　　　',htmlspecialchars($age,ENT_QUOTES),'歳','</br>';
	echo '郵便番号 :','</br>','　　　　　',htmlspecialchars($addrres,ENT_QUOTES),'</br>';
	echo 'Eメールアドレス :','</br>','　　　　　',htmlspecialchars($e_mail,ENT_QUOTES),'</br>';
	echo '一番好きなラーメン :','</br>','　　　　　',htmlspecialchars($flavor,ENT_QUOTES),'</br>';
	echo 'お好きなトッピング :','</br>';
	foreach($topings as $toping){
		echo '　　　　　・',htmlspecialchars($toping,ENT_QUOTES),'</br>';
		}
	echo 'ご意見・ご感想 :','</br>','　　　　　',htmlspecialchars($opinion,ENT_QUOTES),'</br>';
?>
	<hr>
	　　　　　　　　<input type = "submit" value = "確認"/>
	　　　　　　　　<input type = "submit" value = "修正"/>
</div>
</body>
</html>