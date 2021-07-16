<?php
require_once "../app/models/db.php";

class Controller extends db
{

  public $conn;
  public function __construct()
  {

    //  echo "controllers: hellow we are controllers <br>";

  }
  public function loginn($email, $pass)
  {



    $query = "SELECT * from users WHERE email = '$email'";
    //  $nw = new db;


    $result =  $this->login($query, 'select', '');
    if (!$result) die('error email oor pass');

    $rows =  $result->num_rows;


    if ($rows == 1) {
      $row = $result->fetch_array(MYSQLI_ASSOC);
  

      if (password_verify($pass, $row['password'])) {

        $result = $row;
        return $result;
      } else {
        return $result = 'wrong email';
      }
    } else {
      return $result = 'wrong email';
    }
  }

  public function signup($email, $pass, $name, $uesr_type)
  {

    $check_query = "SELECT * from users WHERE email = '$email'";
    $check_result = $this->login($check_query,'select','');
    $rows = $check_result->num_rows;
    if ($rows == 1){
      return 'erorr';
      die();
    }

    $password = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO users VALUES (?,?,?,?,?)";

    $param = ['issss', "", $name, $email, $password, $uesr_type];
    //  $type = "insert";
    $result = $this->login($query, 'insert', $param);

    return $result;
    
   
      
      
    
  }

  public function add_questionss($question_text,$question_type,$user_id,$option_1,$option_2,$option_3,){



    //  question insertion
    $query = "INSERT INTO questions VALUES (?,?,?,?)";
    
    
    $param = ['issi', "",  $question_text, $question_type, $user_id];
    $result = $this->add_questions($query, 'insert', $param);
    
    
    // values insertio 
    
    $query = "SELECT question_id  FROM questions WHERE question = '$question_text'";
    
    $id_result  = $this->add_questions($query, 'select', "");
    $row = $id_result->fetch_array(MYSQLI_ASSOC);
    $question_id = $row["question_id"];
    $query = "INSERT INTO question_type VALUES (?,?,?)";
    if($question_type ==  "Paragraph" || $question_type ==  "Short Answer" ){
       $param = ['iis', "",  $question_id,$option_1];
       
       $result = $this->add_questions($query, 'insert_values', $param);
      }
      else{
        $param = ['iis', "",  $question_id,$option_1];
       $result = $this->add_questions($query, 'insert_values', $param);
       
        $param = ['iis', "",  $question_id,$option_2];
        $result = $this->add_questions($query, 'insert_values', $param);
     
     
        $param = ['iis', "",  $question_id,$option_3];
        $result = $this->add_questions($query, 'insert_values', $param);

      }
    return $result;


  }

  public function view(){
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM questions where candidate_id = '$user_id' " ;
    return $result = $this->select($query);

  }
  public function values($question_id){
   
    $query = "SELECT * FROM question_type where question_id = '$question_id' " ;
    return $result = $this->select($query);

  }
  
}
