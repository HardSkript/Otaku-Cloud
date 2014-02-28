<?php
	require '../header.php';
	
	if((!isset($_SESSION['uid'])) || ($_GET['cid'] == "")){
		header("Location: index.php");
		exit();
	}
	
	$cid = $_GET['cid'];
	
?>

<hr />
<div id="wrapper">
	<div id="content">
	
		<form action="create_topic_parse.php" method="POST">
			<p>Topic Title</p>
			<input type="text" name="topic_title" size="48" maxlength="150" />
			<br /><br />
			<p>Content</p>
			<textarea name="topic_content" rows="5" cols="75"></textarea>
			<br /><br />
			
			<input type="hidden" name="cid" value="<?php echo $cid; ?>" />
			<button type="submit" name="topic_submit">Create Topic</button>
		</form>
	</div>
</div>

<?php
	require '../footer.php';
?>
