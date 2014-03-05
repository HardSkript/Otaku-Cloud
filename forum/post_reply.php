<?php
	require '../header.php';
	
	if((!isset($_SESSION['uid'])) || ($_GET['cid'] == "")){
		header("Location: index.php");
		exit();
	}
	
	$cid = $_GET['cid'];
	$tid = $_GET['tid'];
	
?>

<hr />
<div id="wrapper">
	<div id="content">
	
		<form action="post_reply_parse.php" method="POST">
		<h4>Reply Content</h4>
		<textarea name="reply_content" rows="5" cols="75"></textarea>
		<br /><br />
		<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
		<input type="hidden" name="tid" value="<?php echo $tid ?>" />
		<input type="submit" name="reply_submit" value="Post Reply" />
</div>

<?php
	require '../footer.php';
?>
