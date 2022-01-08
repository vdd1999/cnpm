<?php
  require_once('conn.php');
  $getInfo = getInfoWeb();
  if ($getInfo['code'] == '0') {
    $info = $getInfo['result'];
    $row = $info->fetch_assoc();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Giới thiệu</title>
  <!-- STYLE-->
  <link rel="stylesheet" href="style.css" />
  <?php
include_once('header.php');
?>
</head>

<body>
</body>
	<?php
		include_once('footer.php');
	?>