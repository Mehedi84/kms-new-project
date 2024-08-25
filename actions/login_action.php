<?php 
session_start();
include('../libs/db.php');
if (isset($_POST['submit'])) {
    echo $email = $_POST['email'];
	echo $password = $_POST['password'];

    ## validate requests
    if (isset($email) && !empty($email) && isset($password) && !empty($password)) {

        ## user and password check
        $loginResult = $conn->query("SELECT `id`, `user_name`, `previlege`, `user_group` FROM `users` WHERE user_email = '{$email}' AND user_pass = '{$password}'");

        ## check user found or not
        if($loginResult->num_rows > 0) {

            ## fetch user data
            $userData = $loginResult->fetch_array();

            ## set session value
            $_SESSION['id'] = $userData['id'];
            $_SESSION['full_name'] = $userData['user_name'];
            $_SESSION['previlege'] = $userData['previlege'];
            $_SESSION['user_group'] = $userData['user_group'];

            ## redirect to dashboard
            header('Location: ../');
        } else {
            $_SESSION['error'] = "Email or Password Not Matched";

            ## redirect to login 
            header('Location: ../login.php');
        }
    }
}
?>