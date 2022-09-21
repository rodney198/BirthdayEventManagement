<?php
         $con= mysqli_connect("localhost","root","");
         mysqli_select_db($con,"bday1") or die();  
            $username = $_POST['uame'];
            $pwd1 = $_POST['psw1'];
            $pwd2 = $_POST['psw2'];
            if($pwd1==$pwd2){

            $sql = "UPDATE users ". "SET password = '$pwd1' ". 
               "WHERE username = '$username'" ;
           
             $retval = mysqli_query( $con,$sql);
            }
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($con));
            }
            echo "Updated data successfully\n";
            
            mysqli_close($con);
         header("Location:mit.html");
         ?>