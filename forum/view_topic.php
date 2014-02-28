<?php
	require '../header.php';
?>

<hr />
<div id="wrapper">
	<div id="content">
		<?php 
			include_once'connect.php';
			$cid = $_GET['cid'];
			$tid = $_GET['tid'];
			
			$sql = "SELECT * FROM topics WHERE category_id='".$cid."' AND id='".$tid."' LIMIT 1";
			$res = mysql_query($sql) or die(mysql_error());
			
			if(mysql_num_rows($res) == 1){
			
				echo "<table width='100%'>";
				if($_SESSION['uid']){
					echo "<tr><td colspan='2'><input type='submit' value='Reply' onClick=\"window.location = post_reply.php?cid=".$cid."&tid=".$tid."\" /><hr />";
				}else{
					echo "<tr><td colspan='2'><p>You must be logged in to reply!</p></td></tr>";
				}
				
				while($row = mysql_fetch_assoc($res)){
					$sql2 = "SELECT * FROM posts WHERE category_id='".$cid."' AND topic_id='".$tid."'";
					$res2 = mysql_query($sql2) or die(mysql_error());
					
					while($row2 = mysql_fetch_assoc($res2)){
						echo "<tr><td valign='top' style='border: 1px solid black;'><div style='min-height: 125px;'>".$row['topic_title']."<br /> by ".$row2['post_creator']." - ".$row2['post_date']."<hr />".$row2['post_content']."</div></td><td width='200px' valign='top' align='center' style='border: 1px solid black;'>User Info Here</td></tr><tr><td colspan='2'><hr /></td></tr>";
					}
				}
			}else{
				echo "<p>Topic not found!</p>";
			}
		?>
	</div>
</div>

<?php
	require '../footer.php';
?>
