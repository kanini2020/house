<?php 

session_start();

$Conn=mysqli_connect('localhost','root');
mysqli_select_db($Conn,'signup');

$Name=$_POST['Uname'];
$DateOfBirth=$_POST['date'];
$ExpSalary=$_POST['Salary'];
$EnterId=$_POST['IDnumber'];
$EnterPhone=$_POST['phone'];
$City=$_POST['City'];
$State=$_POST['state'];

$Sel="SELECT*FROM housegals WHERE Uname='$Name'";

$result=mysqli_query($Conn,$Sel);
$num=mysqli_num_rows($result);

if($num==1){
  echo "Similar Name Exists!";
}
else{

    $Reg="INSERT INTO housegals(Uname,Age,expSalary,idNumber,PhoneNo,City,myState)
     VALUES('$Name','$DateOfBirth','$ExpSalary','$EnterId','$EnterPhone','$City','$State')";
     mysqli_query($Conn,$Reg);
     echo'Registration Successful!';
}