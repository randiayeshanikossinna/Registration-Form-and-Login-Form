<?php 
$username="";
$email="";
$error=array();
//connect database 
$db = mysqli_connect('localhost','root','','userregistertion');

//if the register button is clicked
if(isset($_POST['index'])){
    $username =mysql_real_escape_string($_POST['uname']);
    $email = mysql_real_escape_string($_POST['email']);
    $password_1 = mysql_real_escape_string($_POST['password_1']);
    $password_2 = mysql_real_escape_string($_POST['password_2']);

    if(empty($username)){
        array_push($error,"Username is Required");
    }
    if(empty($email)){
        array_push($error,"Email is Required");
    }
    if(empty($password_1)){
        array_push($error,"Password is Required");
    }

    if($password_1 != $password_2){
        array_push($error,"The two passwords do not match");
    }
    //if there no errors save details in database
    if(count($error==0)){
        $password=md5($password_1)
        $sql="INSERT INFO user(UserName,Email,Password) 
                        VALUES('$username','$email','$password')";

        mysqli_query($db,$sql);

    }

}

?>