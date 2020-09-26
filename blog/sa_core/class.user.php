<?php

include('class.password.php');

class User extends Password{

    private $db;

	function __construct($db){
		parent::__construct();

		$this->_db = $db;
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}

	private function get_user_hash($username,$email){

		try {

			$stmt = $this->_db->prepare('SELECT MemberID, username,email, password FROM sa_users WHERE username = :username or email = :email');
			$stmt->execute(array('username' => $username, 'email' => $email));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="error">'.$e->getMessage().'</p>';
		}
	}


	public function login($username,$email,$password){

		$user = $this->get_user_hash($username,$email);

		if($this->password_verify($password,$user['password']) == 1){

		    $_SESSION['loggedin'] = true;
		    $_SESSION['memberID'] = $user['memberID'];
			$_SESSION['username'] = $user['username'];
			$_SESSION['email'] = $user['email'];
		    return true;
		}
	}


	public function logout(){
		session_destroy();
	}

}


?>
