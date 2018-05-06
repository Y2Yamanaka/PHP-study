<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<title>regist_check.php</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
  print ("登録済み:<br />");
  print ($_SESSION['syouhin']."<br />");
?>
<a href=session.html>追加登録</a>
</body>
</html>
