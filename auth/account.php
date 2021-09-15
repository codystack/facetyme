<?php
session_start();

//Connect Registration Email

//Connect database
include "./config/db.php";

// User registration script
if (isset($_POST['signup_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $userID = 'FTP'.rand(1000, 9999);

    $check_user_query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_user_query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error_status'] = "User Already Exist!";
        echo "<meta http-equiv='refresh' content='2; URL=signup'>";
    }else {
        // Finally, register agent if there are no errors in the form
        $password = sha1($password);//encrypt the password before saving in the database
        $query = "INSERT INTO users (firstName, lastName, email, password, userID, status) 
  			        VALUES('$firstName', '$lastName', '$email', '$password', '$userID', 'Active')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_status'] = "Account created! please login.";
            echo "<meta http-equiv='refresh' content='2; URL=login'>";
        }else {
            $_SESSION['error_status']    = "Registration failed: ".mysqli_error($conn);
            echo "<meta http-equiv='refresh' content='2; URL=signup'>";
        }
    }
}


//User login script
if (isset($_POST['user_login_btn'])) {

    $password = $conn->real_escape_string($_POST['password']);
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $status = $conn->real_escape_string($_POST['status']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $userID = $conn->real_escape_string($_POST['userID']);

    $password = sha1($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $email = $row['email'];
        $id = $row['id'];
        $status = $row['status'];
        $picture = $row['picture'];
        $phone = $row['phone'];
        $userID = $row['userID'];

    }if (mysqli_num_rows($result) == 1) {
        $_SESSION['firstName'] = $firstName;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['position'] = $position;
        $_SESSION['picture'] = $picture;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['userID'] = $userID;
        $_SESSION['id'] = $id;
        if ($status == 'Inactive'){
            $_SESSION['error_status'] = "Account inactive contact admin";
            echo "<meta http-equiv='refresh' content='5; URL=login'>";
        }if ($status == 'Active') {
            $_SESSION['success_status'] = "Login successful! redirecting...";
            echo "<meta http-equiv='refresh' content='2; URL=dashboard'>";
        }
    }else {
        $_SESSION['error_status'] = "Incorrect login details";
        echo "<meta http-equiv='refresh' content='4; URL=login'>";
    }
}
