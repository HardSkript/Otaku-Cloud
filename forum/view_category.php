<?php
	require '../header.php';
?>

<hr />
<div id="wrapper">
	<div id="content">
		<?php
			include_once 'connect.php';
			
			$cid = $_GET['cid'];
			
			if(isset($_SESSION['uid'])){
				$logged = " | <a href='create_topic.php?cid=".$cid."'>Create Topic</a>";
			}else{
				$logged = " | You must be logged in to create a topic.";
			}
			
			$sql = "SELECT id FROM categories WHERE id='".$cid."' LIMIT 1";
			$res = mysql_query($sql) or die(mysql_error());
			
			if(mysql_num_rows($res) == 1){
				
				$sql2 = "SELECT * FROM `topics` WHERE `category_id`='".$cid."' ORDER BY topic_reply_date DESC";
				$res2 = mysql_query($sql2) or die(mysql_error());
				
				if(mysql_num_rows($res2) > 0){
				
				$topics = "";
				
					$topics .= "<table width='100%' style='border-collapse: collapse;'>";
					$topics .= "<tr><td colspan='3'><a href='index.php'>Return To Forum Index</a>".$logged."<hr /></td></tr>";
					$topics .= "<tr style='background-color: #dddddd;'><td>Topic Title</td><td width='65' align='center'>Replies</td><td width='65' align='center'>Views</td></tr>";
					$topics .= "<tr><td colspan='3'><hr /></td></tr>";
					
					while($row = mysql_fetch_assoc($res2)){
						
						$tid = $row['id'];
						$title = $row['topic_title'];
						$views = $row['topic_views'];
						$date = $row['topic_date'];
						$creator = $row['topic_creator'];
						
						$topics .= "<tr><td><a href='view_topic.php?cid=".$cid."$tid=".$tid."'>".$title."</a><br /><span class='post_info'>Posted by: ".$_SESSION['username']." on ".$date."</span></td><td align='center'>0</td><td align='center'>".$views."</td></tr>";
						$topics .= "<tr><td colspan='3'><hr /></td></tr>";
						
						
					}
					
					$topics .= "</table>";
					
					echo $topics;
					
				}else{
					echo "<a href='index.php'>Return to forum index</a><hr />";
					echo "<p>There are currently no topics!".$logged."</p>";
				}
			}else{
				echo "<a href='index.php'>Return to forum index</a><hr />";
				echo "<p>You are trying to view something that does not exist!";
			}
		?>
	</div>
</div>

<?php
	require '../footer.php';
?>
