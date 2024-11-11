<?php



session_start(); 


// define('DB_HOST', 'localhost');
// define('DB_NAME', 'myprofile');
// define('DB_USER','root');
// define('DB_PASSWORD','');.


define('DB_HOST', 'localhost');
define('DB_NAME', 'u924494635_bombaygym');
define('DB_USER','u924494635_bombaygym');
define('DB_PASSWORD','Ask@1gym');


$con=mysqli_connect (DB_HOST,DB_USER,DB_PASSWORD) ;
$db=mysqli_select_db($con,DB_NAME) ;


if (!$con) {

    echo "Connection failed!";

}


if (isset($_POST['uname']) && isset($_POST['password'])) {

  
    $uname = $_POST['uname'];


    $pass = $_POST['password'];



        $sql = "SELECT * FROM login WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($con, $sql);

        

        
        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row['password'] === $pass) {
                setcookie("username",$uname);

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                // $_SESSION['name'] = $row['name'];

                // $_SESSION['id'] = $row['id'];

                header("Location: formnotice.php");

                exit();

            }else{
 
                header("Location: login.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }

    

}else{

    header("Location: index.php");

    exit();

}