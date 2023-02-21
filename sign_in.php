<?php

    include("database_connection.php");

    // session_start();
    // if(isset($_REQUEST['submit'])) {
        // $email=$_REQUEST['text_email'];
        // $pwd=$_REQUEST['text_pwd']."".$salt_in_pwd;
        $email = $_POST['email'];
        $pwd = $_POST['password'].$salt_in_pwd;
        $salt_pwd=md5($pwd);
        // echo $email.$salt_pwd;
        // if($_REQUEST['text_email']=='' || $_REQUEST['text_pwd']=='') {
        // if ($_POST['email']=='' || $_POST['password']=='') {    
        //     echo "please fill the empty field.";
        // } else {
            if(isset($_SESSION['email_id'])) {
                header("Location: http://localhost/projects/simple-project-php/welcome.php");
            }
            else {

                $sql = "SELECT * FROM `stud_info` WHERE email='$email' AND password='$salt_pwd';";
                $query = mysqli_query($con,$sql);
                if(mysqli_num_rows($query) != 0){
                    // successfull login
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $_SESSION['email_id'] = $email;
                        $_SESSION['expire'] = time() + (1 * 5);
                        // header("Location: http://localhost/projects/simple-project-php/welcome.php");
                        echo "YES";
                    }
                } else {
                    // login failed 
                    echo "NO";
                    // header("Location: http://localhost/projects/simple-project-php/sign_in_.html");
                }
            }
        // }
    // }

?>