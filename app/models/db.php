<?php
class db {
    

   private  $host = 'localhost';
    private  $user = 'root';
    private  $db = 'form_test';
   private   $pass = '';
   public  $conn;
   public  function __construct(){
       
       
}

function login ( $query , $type, $param) {
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if($this->conn-> error) die( 'error  connection to db ');
        if ($type == 'select'){
        $result = $this->conn->query($query);
        }

        elseif($type == 'insert'){
       $stm =  $this->conn->prepare($query);
  
       $stm -> bind_param("$param[0]",$param[1],$param[2],$param[3],$param[4],$param[5]);
       $result = $stm->execute();
       var_dump($result);
       
    //   if (!$result) die ('error at adding data to record');
    //    printf("%d  row affected .\n " , $stm->affected_rows);
      
     $stm->close();
        //   $stm =  $conn->prepare("INSERT INTO shelf " .
    //   "  VALUES (?,?,?,?,?)");
    //   $stm -> bind_param('sssis', $autor ,$title ,$catagory ,$year ,$isbn);

    //   $result = $stm->execute();
    //   if (!$result) die ('error at adding data to record');
    //   printf("%d  row affected .\n " , $stm->affected_rows);
    //  print_r($result);
    //  $stm->close();
        }
        $this->conn->close();
       
    return $result;
    }


    function add_questions($query,$type,$param){





        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if($this->conn-> error) die( 'error  connection to db ');
        if ($type == 'select'){
        $result = $this->conn->query($query);
        return $result;
        }

        elseif($type == 'insert'){

       $stm =  $this->conn->prepare($query);
 
       $stm -> bind_param("$param[0]",$param[1],$param[2],$param[3],$param[4]);
  
      
       $result = $stm->execute();

      
     $stm->close();
     return $result;
  
        }
        
        elseif($type == 'insert_values'){

            $stm =  $this->conn->prepare($query);
      
            $stm -> bind_param("$param[0]",$param[1],$param[2],$param[3]);
       
           
            $result = $stm->execute();
     
           
          $stm->close();
       
             }
        $this->conn->close();
       
    // return $result;

    }

    function select($query){
        $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
        if($this->conn-> error) die( 'error  connection to db ');
        $result = $this->conn->query($query);
        return $result;
    }
 
}