<!DOCTYPE HTML>
<html>
	<head>
<?php require_once("../../admin/config.php"); ?>
<?php if(file_exists($configRootDir."admin/.initlock")) header("Location: /index.php"); ?>
		<title>��ʼ����������������С���</title>
	</head>
	<body>
<?php
	echo "		�����������硭��<br/>\n";
	require_once($configRootDir."admin/databaseInfo.php");
	echo "		��ʼ�������ύ���������ݡ���<br/>\n";
	$sql = "INSERT INTO admin (username, password) VALUES ('".$_POST['adminUsername']."', '".hash("sha256", $_POST['adminPassword'])."');";
	mysqli_query($conn, $sql);
?>
	</body>
</html>