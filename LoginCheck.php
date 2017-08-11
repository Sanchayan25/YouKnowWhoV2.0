


<?php
   

$id=$_POST['username'];
$pass=$_POST['password'];
//session_start()
//$_SESSION['id'] =$id;

$sql="SELECT id,password FROM butterflyeffect.details";
$query= mysqli_query($con,$sql);
$flag=FALSE;
while($result= mysqli_fetch_array($query))
{

if(strcmp( $result['id'],$id)==0 && strcmp($result['password'],$pass)==0)
    {  echo 'found';
      $flag=TRUE;
    } 
    

else 
{ echo 'NO' ;
}}
?> 
