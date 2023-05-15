<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $Lusername=$_POST['Lusername'];
    $Lpassword=$_POST['Lpassword'];
}
$con= new mysqli('localhost','root','','empinfo');

if($con){
    echo "conect";
    if(isset($_POST["submit"])){
        $sql="INSERT INTO `reg`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";
        $result=mysqli_query($con,$sql);
        if($result){
            header('Location:login.html');
        }else{
            echo "not insert";
        }
    }
    
}else{
    echo " not connect";
}

?>