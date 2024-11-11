<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bombay Gymkhana</title>
    <link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <!-- <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a> -->

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="log.php" method="post">
                        <h1>Login Form</h1>
                        <?php if (isset($_GET['error'])) { ?>

                        <p class="error"><?php echo $_GET['error']; ?></p>

                        <?php } ?>
                        <div>
                            <input type="text" class="form-control" name="uname" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="" />
                        </div>
                        <div>
                            <!-- <a   class="btn btn-default submit">Log in</a> -->
                            <button type="submit" class="btn btn-default submit">Login</button>
                        </div>

                       
                    </form>
                </section>
            </div>


        </div>
    </div>
   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.js?v=1"></script>
   <script src="../vendors/cookie.js"></script>

    <script>
    $(document).ready(function() {
        var valcook = Cookies.get('username');

        // alert(valcook);

        if (typeof valcook !== "undefined"){
            window.location.href = "formnotice.php";
        }

    });
    </script>
</body>

</html>