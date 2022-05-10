<?php
class sms_engine
{
    // Database conection
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $database = 'dbms';

    // $query = "SELECT MAX(cast(registration_code as decimal)) id FROM accounts ";  
    // if($result = mysql_query($query))
    // {
    //     $row = mysql_fetch_assoc($result);

    //     $count = $row['id'];
    //     $count = $count+1;

    //     $code_no = str_pad($count, 4, "0", STR_PAD_LEFT);
    // }

    // Registration of both students and staff details

    public function register_student() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function register_staff() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function register_parent() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }

    // Adding classes and Classarms
    public function add_class() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function add_classarm() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function add_subject() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }

    // Assignment of subject and Teacher to Classes
    public function assign_subjectclass() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    public function assign_teacherclass() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }
    
    public function assign_teacher() {
        $db = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }


}
?>