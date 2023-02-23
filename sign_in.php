<?php

    include("database_connection.php");

    session_start();
    // if(isset($_REQUEST['submit'])) {
        // $email=$_REQUEST['text_email'];
        // $pwd=$_REQUEST['text_pwd']."".$salt_in_pwd;
        // echo $email.$salt_pwd;
        // if($_POST['text_email']=='' || $_POST['text_pwd']=='') {
            if ($_POST['email']=='' || $_POST['password']=='') {    
                echo "please fill the empty field.";
            } else {
                if(isset($_SESSION['email_id'])) {
                    header("Location: http://localhost/projects/simple-project-php/welcome.php");
                }
                else {
                    $email = $_POST['email'];

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    
                    $pwd = $_POST['password'].$salt_in_pwd;
                    $salt_pwd=md5($pwd);

                    $sql = "SELECT password FROM `stud_info` WHERE email='$email'";
                    $result = mysqli_query($con,$sql);
    
                    if (!$result) {
                        // echo "Could not successfully run query ($sql) from DB: " . mysql_error();
                        $output = [
                            "status" => "NO",
                            // "message" => "Could not successfully run query ($sql) from DB: ".mysql_error(),
                            "message" => "Something went wrong.",
                        ];
                        exit(json_encode($output));
                    }
                    
                    if (mysqli_num_rows($result) == 0) {
                        $output = [
                            "status" => "NO",
                            "message" => "No rows found",
                        ];
                        exit(json_encode($output));
                    }
    
                    $row = $result -> fetch_array(MYSQLI_NUM);
                    if($salt_pwd == $row[0]) {
                        $_SESSION['email_id'] = $email;
                        $_SESSION['expire'] = time() + (1 * 5);
                        $output = [
                            'status'=>"YES",
                            'message'=>"$row[0]",
                        ];
                        exit(json_encode($output));
                    }
                    else {
                        $output = [
                            'status'=>"NO",
                            'message'=>"Wrong Email or Password!!!",
                        ];
                        exit(json_encode($output));
                    }

                    // $cnt=-1;
                    // $rowData[][] = null;
                    // while ($row = mysqli_fetch_array($result)) {
                    //     $cnt++;
                    //     $rowData[$cnt]['email']=$row['email'];
                    //     $rowData[$cnt]['password']=$row['password'];
                    // }
                    // // echo $cnt;
                    // for ($q=0; $q < $cnt; $q++) {
                    //     if($rowData[$q]['email']==$email && $rowData[$q]['password']==$salt_pwd) {
                    //         $_SESSION['email_id'] = $rowData[$q]['email'];
                    //         $_SESSION['expire'] = time() + (1 * 5);
                    //         // echo $rowData[$q]['email']." ".$rowData[$q]['password'];
                    //         // echo "YES";
                    //         $output = [
                    //             'status'=>"YES",
                    //             'message'=>"Successful",
                    //         ];
                    //         exit(json_encode($output));
                    //     }
                    // }
                }

                else {
                    $output = [
                        'status'=>"NO",
                        'message'=>"Please check your \"EMAIL\".",
                    ];
                    exit(json_encode($output));
                }


                // while ($row = mysqli_fetch_assoc($result)) {
                //     // echo "<br>".$row["email"]." ".$row["password"];
                //     foreach ($row as $rowData) {
                //         // echo($rowData);
                //         if($rowData['id'] == $email) {
                //             if($rowData == $salt_pwd) {
                //                 echo "<br> =".$rowData."<br>";
                //             }
                //         }
                //     }
                    
                //     // if($row['email']==$email && $row['password']==$salt_pwd) {
                //     //     echo "\n\n".$email." ".$salt_pwd;
                //     // }
                // }

                // $cnt = mysqli_num_rows($result);
                // $row = mysqli_fetch_assoc($result);

                // foreach ($row as $rowData) {
                //     echo "<br> =".$rowData['email']." = ".$rowData['password'];
                // }

                // $rowcount=mysqli_num_rows($result);
                // echo "<br> row count = $rowcount";

                // $row = mysqli_fetch_array($result, MYSQLI_NUM);
                // echo($rowsData[0]);
                // foreach ($row as $rowsData) {
                //     echo($rowsData['email'][0]);
                //     // if($rowsData['email'] == $email) {
                //     //     echo("<br> $email");
                //     // }
                // }

                // $numFields = count($colsResult);
                // echo $numFields;

                // for ($i=0; $i < $rowcount; $i++) { 
                //     if($row['email']==$email && $row['password']==$salt_pwd) {
                //         echo "\n\n".$email." ".$salt_pwd;
                //     }
                // }

                // if ($result = mysqli_query($con, $sql)) {
                //     // Fetch one and one row
                //     while ($row = mysqli_fetch_row($result)) {
                //         if($email==$row[2] && $row[3]==$salt_in_pwd) {
                //             $_SESSION['email_id'] = $email;
                //             $_SESSION['expire'] = time() + (1 * 5);
                //             printf("%s %s\n", $row[2], $row[3]);
                //             console.log($row[2]);
                //             // break;
                //         }
                //     }
                //     // mysqli_free_result($result);
                // }

                // $sql = "SELECT * FROM `stud_info` WHERE email='$email' AND password='$salt_pwd';";
                // $query = mysqli_query($con,$sql);
                // if(mysqli_num_rows($query) != 0){
                //     // successfull login
                //     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //         $_SESSION['email_id'] = $email;
                //         $_SESSION['expire'] = time() + (1 * 5);
                //         // header("Location: http://localhost/projects/simple-project-php/welcome.php");
                //         echo json_encode();
                //     }
                // } else {
                //     // login failed 
                //     echo "NO";
                //     // header("Location: http://localhost/projects/simple-project-php/sign_in_.html");
                // }
            }
        }
    // }

?>