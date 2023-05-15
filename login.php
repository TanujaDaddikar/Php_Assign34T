<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'dbcon.php';
    $Lusername=$_POST['Lusername'];
    $Lpassword=$_POST['Lpassword'];
}
$sql="SELECT * FROM `reg` WHERE username='$Lusername' AND password='$Lpassword')";
        $result=mysqli_query($con,$sql);
        
        if($result){
            $count=mysqli_num_rows($result);
            if($count>0){
                echo "mach";
            }else{
                echo"not";
            }
            
           // header('Location:dashboard.html');
        }
  ?>