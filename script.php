<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        $('#btn_sign_in').click(function(e) {
            e.preventDefault();
            var data = {
                email: $('#text_email').val(),
                password: $('#text_pwd').val(),
            }
            alert(data['email']+" "+data['password']);

            $.ajax({
                url : 'sign_in.php',
                method : 'post',
                data : data,
                success : function(response) {
                    console.log(response);
                    if (response == "NO") {
                        alert("Wrong Data");
                    }
                    else if (response == "YES") {
                        e.preventDefault();
                        const nextURL = 'http://localhost/projects/simple-project-php/welcome.php';
                        const nextTitle = 'Dashboard';
                        const nextState = { additionalInformation: 'Updated the URL with JS' };
                        // window.history.pushState(nextState, nextTitle, nextURL);
                        // window.history.replaceState(nextState, nextTitle, nextURL);
                        // window.location.assign("welcome.php");
                        window.location.replace(nextURL);
                        // location.reload(false);
                        // alert(response);
                        // header("location: welcome.php");
                        // $('#loginModel').hide();
                        // window.location.href = 'http://localhost/projects/simple-project-php/welcome.php';
                        // location.href = 'http://localhost/projects/simple-project-php/welcome.php';
                        // window.location = 'http://localhost/projects/simple-project-php/welcome.php';
                        // location.reload();

                    }
                },
            });

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
</script>
