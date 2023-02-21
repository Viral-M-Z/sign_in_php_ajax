<?php
    session_start();
    if(isset($_SESSION['email_id'])) {
        $now = time();
        
        if($now > $_SESSION['expire']) {
            session_destroy();
            unset($_SESSION['email_id']);
            header("Location: sign_in_.php");
        }
    } else {
        header("Location: http://localhost/projects/simple-project-php/sign_in_.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10">
    <title>Welcome</title>
</head>
<body class="d-flex justify-align-center">
    <p class="h2">Welcome to Dashboard <?php echo $_SESSION['email_id']; ?> </p>
</body>
</html>
