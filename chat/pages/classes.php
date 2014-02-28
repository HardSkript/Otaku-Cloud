<?php 

class user{
	private $UserId, $UserName, $UserMail, $UserPassword;

	public function getUserId(){
		return $this->UserId;
	}
	
	public function setUserID($UserId){
		$this->UserId = $UserId;
	}
	
	public function getUserName(){
		return $this->UserName;
	}
	
	public function setUserName($UserName){
		$this->UserName=$UserName;
	}
	
	public function getUserMail(){
		return $this->UserMail;
	}
	
	public function setUserMail($UserMail){
		$this->UserMail = $UserMail;
	}
	
	public function getUserPassword(){
		return $this->UserPassword;
	}
	
	public function setUserPassword($UserPassword){
		$this->UserPassword = $UserPassword;
	}
	
	public function InsertUser(){
		include "conn.php";

		try{

		$req=$bdd->prepare("INSERT INTO users(`UserName`, `UserMail`, `UserPassword`) VALUES (:UserName, :UserMail, :UserPassword)");

		$req->execute(array(
   			':UserName'=>$this->getUserName(),
   			':UserMail'=>$this->getUserMail(),
   			':UserPassword'=>$this->getUserPassword()
   			));
	}catch(Exception $e){
		die("ERROR : ".$e->getMessage());
	}
	
	}
	

	public function UserLogin(){
		include 'conn.php';

		$req=$bdd->prepare("SELECT * FROM users WHERE UserMail=:UserMail AND UserPassword=:UserPassword");

		$req->execute(array(
			'UserMail'=>$this->getUserMail(),
			'UserPassword'=>$this->getUserPassword()
			));

		if($req->rowCount()==0){
			header('Location: ../index.php?error=1');
			return false;

		}else{

			while($data=$req->fetch()){
				$this->setUserId($data['UserId']);
				$this->setUserName($data['UserName']);
				$this->setUserPassword($data['UserPassword']);
				$this->setUserMail($data['UserMail']);
				header("Location: ../home.php");
				return true;

			}
		}
	}


}

class chat{
	private $ChatId, $ChatUserId, $ChatText;

	public function getChatId(){
		return $this->ChatId;
	}
	
	public function setChatID($ChatId){
		$this->ChatId = $ChatId;
	}

	public function getChatUserId(){
		return $this->ChatUserId;
	}
	
	public function setChatUserID($ChatUserId){
		$this->ChatUserId = $ChatUserId;
	}

	public function getChatText(){
		return $this->ChatText;
	}
	
	public function setChatText($ChatText){
		$this->ChatText = $ChatText;
	}

	public function InsertChatMessage(){
		include "conn.php";
		
		$req=$bdd->prepare("INSERT INTO chats(ChatUserId, ChatText) VALUES(:ChatUserId, :ChatText)");
		$req->execute(array(
			'ChatUserId'=>$this->getChatUserId(), 
			'ChatText'=>$this->getChatText()
			));
	
	}

	public function DisplayMessage(){
		include "conn.php";
		$ChatReq=$bdd->prepare("SELECT * FROM chats ORDER BY ChatId DESC LIMIT 10");
		$ChatReq->execute();

		while($DataChat = $ChatReq->fetch()){
			$UserReq=$bdd->prepare("SELECT * FROM users WHERE UserId=:UserId");
			$UserReq->execute(array(
				'UserId'=>$DataChat['ChatUserId']
			));
			$DataUser = $UserReq->fetch();
			?>
				<span class="UserNames"><?php echo $DataUser['UserName']; ?></span> says:<br>
				<span class="ChatMessages"><?php echo $DataChat['ChatText']; ?></span><br>
			<?php


		}

	}

}
?>