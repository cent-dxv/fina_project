<?php
    $controller = new Controller();
    $msg = '';
   
if (isset($_GET['login'])) {
    
    require_once '../app/view/login.html';
    
} else if (isset($_GET['signup'])) {
    echo empty($msg)? '' : 'ur eamil is used in other account';
    $msg = '';

    require_once '../app/view/signup.html';
} elseif (isset($_POST['email']) &&  isset($_POST['password'])) {

$email = $_POST['email'];
$password = $_POST['password'];


    $result = $controller->loginn($email,$password);


    if ($result == 'wrong email') {
        echo 'wrong email or password';
        require_once '../app/view/login.html';
    } else {
        session_start();
        
        var_dump($result);
        echo $result['email'];
        $_SESSION['email'] =  $result['email'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['user_id'] = $result['user_id'];
        

        //   require_once '../app/controllers/candidate.php';
        if($result['user_type'] == 'candidate')
         header("location:candidate");
         else header("location:user");
    }
} elseif (
    isset($_POST['sign_email'])
    &&  (isset($_POST['name'])) && isset($_POST['sign_password'])
) {

if(!isset($_POST['user_type'])){
    $_POST ['user_type'] = 'user';
}

   $result = $controller->signup($_POST['sign_email'],$_POST['sign_password'],$_POST['name'],$_POST['user_type']);

   if($result == 'erorr'){
       echo ' <script>alert </script>';
        $msg = 'hc';
        header('location:login?signup');
    }

   
} else {
    // require_once '../app/core/controller.php';
}
function get_value( $var){
    $controller = new Controller();
    echo  'whats wrong'.$_POST[$var];
    // $conn = db::$conn
    var_dump(db::$conn);
    // return db::$conn-> real_escape_string($_POST[$var]);
}