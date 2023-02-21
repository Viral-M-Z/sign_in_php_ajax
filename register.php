<?php 

    include("database_connection.php");

    if(isset($_REQUEST['submit'])) {
        if($_REQUEST['text_first_name']=='' || $_REQUEST['text_email']=='' || $_REQUEST['text_pwd']==''|| $_REQUEST['text_phone']=='') {
            echo "please fill the empty field.";
        } else {
            // hashing 
            $pwd = $_REQUEST['text_pwd'].$salt_in_pwd;
            // echo "\n $pwd";
            $salt_pwd = md5($pwd);
            // echo "\n".$salt_pwd;
            // end hashing

            $full_name = $_REQUEST['text_first_name']." ".$_REQUEST['text_last_name'];
            $email = $_REQUEST['text_email'];
            $mobile = $_REQUEST['text_phone'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
            else {
                if (preg_match("/^[0-9]{10}+$/",$mobile)) {
                    $sql="insert into stud_info(name,email,password,phone) values('$full_name', '$email', '$salt_pwd', $mobile)";
                }
            }

            // echo("\n $full_name $email $pwd $mobile ");
            // echo("\n $sql");
            // $res=mysqli_query($con,$sql);
        }
        if($con->query($sql) === TRUE) {
            // echo "Record successfully inserted";
            // echo "<a href='sign_in.html'>Sign In</a>";
            header('Location: http://localhost/projects/simple-project-php/goto_sign_in.html');
        }
        else {
            echo "There is some problem in inserting record";
        }
    }

?>
