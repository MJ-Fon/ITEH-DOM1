<?php 
/*
 class User{
    public $id, $username, $password; 


    public function __construct($id=null,$username=null,$password=null){
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;

    }

    public static function login($usern, $password, mysqli $conn){
        $query = "SELECT * FROM user WHERE username='$usern->username' and password='$usern->password'";
        
        return $conn->query($query);
    }
 }
*/

class User{
    public $id;
    public $username;
    public $password;

    public function __construct($id=null,$username=null,$password=null)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }

    public static function login($usern, mysqli $conn)
    {
        $q = "SELECT * FROM user WHERE username='$usern->username' and password='$usern->password'";
        // echo $query;
        //konekcija sa bazom;
        return $conn->query($q);
    }
}

?>