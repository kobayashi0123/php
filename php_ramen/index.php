<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html;charset=Shift_JIS">
 <style type = "text/css">
 <!--
 	strong{color : red;}
 	body{
    	padding: 0.5em 1em;
    	background: -moz-linear-gradient(#faf0e6, #fffacd);
    	background: -webkit-linear-gradient(#faf0e6, #fffacd);
    	background: linear-gradient(to right, #faf0e6,#fffacd);
    	color: #2f4f4f;
	}
 	.box26 {
    position: relative;
    margin: 2em 0;
    padding: 0.5em 1em;
    border: solid 3px #006400;
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
    background: #faf0e6;
    color: #006400;
    font-weight: bold;
}
.box26 p {
    margin: 0; 
    padding: 0;
}
		.box17{
    	margin:2em 0;
    	position: relative;
    	padding: 0.5em 1.5em;
    	border-top: solid 2px #006400;
   		border-bottom: solid 2px #006400;
	}
	.box17:before, .box17:after{
    	content: '';
    	position: absolute;
    	top: -10px;
    	width: 2px;
    	height: -webkit-calc(100% + 20px);
    	height: calc(100% + 20px);
    	background-color: #006400;
	}
	.box17:before {left: 10px;}
	.box17:after {right: 10px;}
	.box17 p {
    	margin: 0; 
 	   padding: 0;
	}
 -->
 </style>
 <title>入力フォーム</title>
</head>
<body>
<form action="check.php" method="post">
<div class = "box26">
	 <span class="box-title">ラーメン店アンケート</span>
	<br>
	<p>
	<strong>※</strong> は必須項目です
	</p>
	<p>
		<label for = "your_name"> 氏名<strong>※</strong> </label><br>
		　　　　　<input type="text" name = "your_name" id = "your_name" size = "35" maxlength = "255" required/>
	</p>
	<p>性別 : <br>
		　　　　　<input type = "radio" name = "gender" id = "gender_male" value = "男性" checked/>
		<label for = "gender_male"> 男性 </label>
		　　　　　<input type = "radio" name = "gender" id = "gender_female" value = "女性"/>
		<label for = "gender_female"> 女性 </label>
	</p>
	<p>年齢 : <br>
		　　　　　<select name = "age">
		<?php
		for($i = 5; $i <= 60; $i++){
			echo '<option value = "',$i,'">' ,$i,'</option>';
			}
		?>
		</select>歳
	</p>
	<p>郵便番号 : <br>
		　　　　　〒<input type = "text" name = "post_namber" id = "post_numberl" size = "3" maxlength = "3" /> ー <input type = "text" name = "post_number" id = "postnumberr" size = "4" maxlength = "4" />
	</p>
	<p>Eメールアドレス<strong>※</strong> : <br>
		　　　　　<input type = "text" name = "e_mail" id = "e_mail" size = "70" maxlength = "300" required/>
	</p>
	<p>一番好きなラーメン : <br>
		　　　　　<select name = "flavor">
		<?php
			echo '<option value = "',"soy",'">',"醤油ラーメン",'</option>';
			echo '<option value = "',"miso",'">',"味噌ラーメン",'</option>';
			echo '<option value = "',"pig",'">',"とんこつラーメン",'</option>';
			echo '<option value = "',"solt",'">',"塩ラーメン",'</option>';
		?>
		</select>
	</p>
	<p>お好きなトッピング : <br>
		　　　　　<input type = "checkbox" name = "toping[]" id = "menma" value = "メンマ"/>
		<label for = "menma"> メンマ </label>
		　　　　　<input type = "checkbox" name = "toping[]" id = "pig" value = "チャーシュー"/>
		<label for = "pig"> チャーシュ </label>
		　　　　　<input type = "checkbox" name = "toping[]" id = "egg" value = "煮卵"/>
		<label for = "egg"> 煮卵 </label>
	</p>
	<p>ご意見・ご感想<br>
		<div class = "box17">
		　　　　　<textarea name = "opinion" id ="opinion" cols = "100" rows = "10"></textarea>
		</div>
	</p>
	<hr>
	<p>
		　　　　　　　　<input type = "submit" value = "送信"/>
		　　　　　　　　<input type = "reset" value = "取消"/>
	</p>
</div>
</form>
</body>
</html>