<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
    // echo test_input($_POST["username"]);
    // echo $_post["password"];
    // if (isset($_POST["submit"])){
    //     $username = $_POST["username"];
    //     $password = $_POST["password"];

    //     echo "username";
    //     echo "password";
    // }
    // $username = $_POST["username"];
    // $password = $_POST["password"];

    // if(strlen($username) < 5) {
    //     echo "User name is too short"
    // }
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $minimum = 5;
        $maximum = 10;
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if (strlen($username) < $minimum) {
            echo "username is too short.";
        }

        if (strlen($username) > $maximum) {
            echo "username is too long.";
        }

    }

    ?>
</body>
</html>