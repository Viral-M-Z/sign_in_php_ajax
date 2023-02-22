


    $(document).ready(function() {
        $('#btn_sign_in').click(function(e) {
            // e.preventDefault();
            var data = {
                email: $('#text_email').val(),
                password: $('#text_pwd').val(),
            }
            
            if(data['email']!="" || data['password']!="") {
                if(data['email'].length > 10 && data['password'].length > 8) {
                    alert(data['email']+" "+data['password']);
                    $.ajax({
                        url : 'sign_in.php',
                        method : 'post',
                        data : data,
                        success : function(response) {
                            console.log(response);
                            let res = JSON.parse(response);
                            alert(res.message);
                            if (res.status == "NO") {
                                alert(res.message);
                            }
                            else {
                                // e.preventDefault();
                                // const nextURL = 'http://localhost/projects/simple-project-php/welcome.php';
                                // const nextTitle = 'Dashboard';
                                // const nextState = { additionalInformation: 'Updated the URL with JS' };
                                // window.history.pushState(nextState, nextTitle, nextURL);
                                // window.history.replaceState(nextState, nextTitle, nextURL);
                                // window.location.assign("welcome.php");
                                // window.location.replace(nextURL);
                                // location.reload(false);
                                alert(res.status);
                                // header("location: welcome.php");
                                // $('#loginModel').hide();
                                window.location.href = 'welcome.php';
                                // location.href = 'http://localhost/projects/simple-project-php/welcome.php';
                                // window.location = 'welcome.php';
                                // location.reload();
        
                            }
                        },
                    });
                }
                else {
                    alert("Please type valid email and password.");
                }
            }
            else {
                alert("Please fill out fields");
            }
            

        });
    });

    // function submitData() {
    //     $(document).ready(function() {
    //         var data = {
    //             email: $('#text_email').val(),
    //             password: $('#text_pwd').val(),
    //         }
    //         alert(data);

    //         // $.ajax({
    //         //     url : 'sign_in.php',
    //         //     method : 'post',
    //         //     data : data,
    //         //     success : function(response) {
                    
    //         //         if (response == "NO") {
    //         //             alert("Wrong Data");
    //         //         }
    //         //         else if (response == "YES") {
    //         //             alert(response);
    //         //             // header("Location: http://localhost/projects/simple-project-php/welcome.php");
    //         //             // $('#loginModel').hide();
    //         //             // location.reload();

    //         //         }
    //         //     },
    //         });

    //     });
    // }
