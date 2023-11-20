<?php
    $conn = mysqli_connect('localhost', 'root', '', 'forxrpl');


function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["name"]));
    $password = mysqli_real_escape_string($conn, $data["pass"]);

    //check username is same or not with diffrent person
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username sudah terdaftar');
            </script>";
        return false;
    }

    //encrypt password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // new user to database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}


?>
