<?php
function  email_exists($email,$conn)
{
    $row=mysqli_query($conn,"SELECT id FROM signme
     WHERE Email='$email'");{
         if(mysqli_num_rows($row)==1){

return true;
}else {
    
    return false;
}
     }
    }
    function logged_in(){
        if(isset($_SESSION['email'])||isset($_COOKIE['name'])){

            return false;
        }else{
            return true;
        }


    }


?>