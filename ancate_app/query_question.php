<!DOCTYPE html>
<html>
<head>
  <meta charset = "utf8">
  <title>アンケート検索</title>
</head>
<body>
検索条件を入力してください<br>
<form action = "show_question_db.php" method = "post">
購入日:<br>
<input type = "text" name = "sdate" value = "<?php echo date('Y/m/d' , strtotime('-1 month')); ?>">
~<input type = "text" name ="edate" value = "<?php echo date('Y/m/d'); ?>">
<br>
<br>
ソート:<br>
<input type = "radio" name = "sort" value = "date" checked>購入日でソートする
<input type ="radio" name = "sord" value = "star">評価でソートする
<input type = "radio" name = "sort" value = "entry_date" >アンケートの登録日でソートする
<br>
<br>
<input type = "submit" value = "アンケートを表示する">

</form>
</body>
</html>