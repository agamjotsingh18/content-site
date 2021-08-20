<?php    
session_start();

$username ="";
$email="";

$errors= array();

$db = mysqli_connect("localhost", "root", "", "hostels");
if (isset($_POST['reg_user'])) {
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if(empty($username)) {array_push($errors, "Username is required");}
    if(empty($email)) {array_push($errors, "Email is required");}
    if(empty($phone_number)) {array_push($errors, "Phone number is required");}
    if(empty($password)) {array_push($errors, "Password is required");}

    $user_check_query = "SELECT * FROM register WHERE username = '$username' or email='$email' LIMIT 1";
    $result=mysqli_query($db, $user_check_query);
    $user= mysqli_fetch_assoc($result);

    // $sql = "INSERT INTO register (username, email, phone_number, password ) VALUES ('$username', '$email','$phone_number', '$password')";
    // execute query
    // mysqli_query($db, $sql);
// }
// $result = mysqli_query($db, "SELECT * FROM register");
if($user){
    if($user['username'] === $username){array_push($errors, "Username already exists");}
    if($user['email'] === $email){array_push($errors, "This email id already has a registered username");}
}

if(count($errors) == 0){
    $password= md5($password);
    $query = "INSERT INTO register (username, email, phone_number, password ) VALUES ('$username', '$email','$phone_number', '$password')";

    mysqli_query($db, $query);
    $_SESSION['username']= $username;
    $_SESSION['success']= "You are now logged in";

    header('location: index.php');
}
}

$db = mysqli_connect("localhost", "root", "", "hostels");


if (isset($_POST['login_user'])) {
    
    $username = mysqli_real_escape_string($db, $_POST['username']);
    // $email = mysqli_real_escape_string($db, $_POST['email']);
    // $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if(empty($username)) {array_push($errors, "Username is required");}
    // if(empty($email)) {array_push($errors, "Email is required");}
    // if(empty($phone_number)) {array_push($errors, "Phone number is required");}
    if(empty($password)) {array_push($errors, "Password is required");}

    if(count($errors) == 0){
        $password= md5($password);
        $query = "SELECT * FROM register WHERE username ='$username' AND password='$password' ";
        $results= mysqli_query($db, $query);
    
        if(mysqli_num_rows($results)){
            // $_SESSION['username']= $username;
            // $_SESSION['success']= "You are now logged in";
            header('location: index.php');
        }else{
            array_push($errors, "Wrong username/password. Please try again");
        }
    }
}
?> 