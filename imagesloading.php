<?php


$msg = "";
//If upload button is pressed
if (isset($_POST["upload"])) {

    //The path to store the upload image.
    $target = "images/".basename($_FILES['image']['name']);
    
$Conn=mysqli_connect('localhost','root');
mysqli_select_db($Conn,'signup');

$Name=$_POST['Uname'];
$DateOfBirth=$_POST['date'];
$ExpSalary=$_POST['Salary'];
$EnterId=$_POST['IDnumber'];
$EnterPhone=$_POST['phone'];
$City=$_POST['City'];
$State=$_POST['state'];
$image = $_FILES['image']['name'];
$text = $_POST['text'];


$Sel="SELECT*FROM housegals WHERE Uname='$Name'";

$result=mysqli_query($Conn,$Sel);
$num=mysqli_num_rows($result);

if($num==1){
  echo "Similar Name Exists!";
}
else{

    $Reg="INSERT INTO housegals(Uname,Age,expSalary,idNumber,PhoneNo,City,myState,Image,text)
     VALUES('$Name','$DateOfBirth','$ExpSalary','$EnterId','$EnterPhone','$City','$State','$image','$text')";
     mysqli_query($Conn,$Reg);
     
     echo'Registration Successful!';


     
     if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
        echo "Image uploaded successfully";


     }    
  }
}
?>
