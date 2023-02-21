
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="d-flex justify-content-center align-items-center">



    <!-- <form class="col-sm-4" action="sign_in.php" method="POST" autocomplete="off"> -->
    <form class="col-sm-4" action="" method="POST" autocomplete="off">
        <p class="h3 my-4 mb-4 text-center">Sign In</p>
        
        <div class="form-group row">
            <label for="text_email" class="col-3 col-form-label">Email</label> 
            <div class="col-9">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <input id="text_email" name="text_email" placeholder="Enter Email" type="email" class="form-control" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text_pwd" class="col-3 col-form-label">Password</label> 
            <div class="col-9">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <input type="password" id="text_pwd" name="text_pwd" id="defaultRegisterPhonePassword" placeholder="Enter Password" class="form-control" required aria-describedby="defaultRegisterFormPasswordHelpBlock">
                </div>
            </div>
        </div> 
        
        <div class="form-group row my-4">
            <div class="offset-3 col-6">
                <button name="submit" type="button" id="btn_sign_in" class="btn btn-primary col-12 text-center">Sign In</button>
            </div>
        </div>
        <div class="text-center">
            <p>Not a member?
                <a href="register_view.php">Sign Up</a>
            </p>
        </div>
    </form>

    <?php require('script.php'); ?>
    
</body>
</html>