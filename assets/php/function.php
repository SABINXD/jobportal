<?php
require_once 'config.php';

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("Database is not connected");

// Function to show pages
function showPage($page)
{
    $safePage = basename($page); // Prevent directory traversal
    include("./assets/pages/$safePage.php");
}

// Function to show error
function showError($field)
{
    if (isset($_SESSION['error'])) {
        $error = $_SESSION['error'];
        if (isset($error['field']) && $field == $error['field']) {
            echo "<div class='alert alert-danger my-2' role='alert'>{$error['msg']}</div>";
        }
    }
}

// Function to show previous form data
function showFormData($field)
{
    if (isset($_SESSION['formdata'])) {
        $formdata = $_SESSION['formdata'];
        return $formdata[$field] ?? null;
    }
}

// Function to check if email is already registered
function isEmailRegistered($email)
{
    global $db;
    $email = mysqli_real_escape_string($db, $email);
    $query = "SELECT COUNT(*) as row FROM users WHERE email='$email'";
    $result = mysqli_query($db, $query);
    $return_data = mysqli_fetch_assoc($result);
    return $return_data['row'];
}

// Function to check if username is already registered
function isUsernameRegistered($username)
{
    global $db;
    $username = mysqli_real_escape_string($db, $username);
    $query = "SELECT COUNT(*) as row FROM users WHERE username='$username'";
    $result = mysqli_query($db, $query);
    $return_data = mysqli_fetch_assoc($result);
    return $return_data['row'];
}

// Function to check if username is registered by another user
function isUsernameRegisteredByOther($username)
{
    global $db;
    $user_id = $_SESSION['userdata']['id'];
    $username = mysqli_real_escape_string($db, $username);
    $query = "SELECT COUNT(*) as row FROM users WHERE username='$username' AND id != $user_id";
    $result = mysqli_query($db, $query);
    $return_data = mysqli_fetch_assoc($result);
    return $return_data['row'];
}

// Function to validate signup form
function validateSignupForm($form_data)
{
    $response = array('status' => true, 'msg' => '');

    if (!isset($form_data['password']) || empty($form_data['password'])) {
        $response['msg'] = "Password is required";
        $response['status'] = false;
        $response['field'] = 'password';
    } elseif (strlen($form_data['password']) < 8) {
        $response['msg'] = "Password must be at least 8 characters long";
        $response['status'] = false;
        $response['field'] = 'password';
    } elseif (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $form_data['password'])) {
        $response['msg'] = "Password must include at least one special character (!@#$%^&*(),.?\":{}|<>)";
        $response['status'] = false;
        $response['field'] = 'password';
    }

    if (!isset($form_data['username']) || empty($form_data['username'])) {
        $response['msg'] = "Username is required";
        $response['status'] = false;
        $response['field'] = 'username';
    }

    if (!isset($form_data['email']) || empty($form_data['email'])) {
        $response['msg'] = "Email is required";
        $response['status'] = false;
        $response['field'] = 'email';
    } elseif (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
        $response['msg'] = "Invalid email format";
        $response['status'] = false;
        $response['field'] = 'email';
    }

    if (isEmailRegistered($form_data['email'])) {
        $response['msg'] = "Email is already registered";
        $response['status'] = false;
        $response['field'] = 'email';
    }

    if (isUsernameRegistered($form_data['username'])) {
        $response['msg'] = "Username is already registered";
        $response['status'] = false;
        $response['field'] = 'username';
    }

    return $response;
}

// Function to create a new user
function createUser($data)
{
    global $db;
    $email = mysqli_real_escape_string($db, $data['email']);
    $username = mysqli_real_escape_string($db, $data['username']);
    $password = password_hash($data['password'], PASSWORD_DEFAULT);
    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
    return mysqli_query($db, $query);
}

// Function to validate login form
function validateLoginForm($form_data)
{
    $response = array('status' => true, 'msg' => '');

    if (!isset($form_data['password']) || empty($form_data['password'])) {
        $response['msg'] = "Password is required";
        $response['status'] = false;
        $response['field'] = 'password';
    }

    if (!isset($form_data['username_email']) || empty($form_data['username_email'])) {
        $response['msg'] = "Username/email is required";
        $response['status'] = false;
        $response['field'] = 'username_email';
    }

    if ($response['status']) {
        $user = checkUser($form_data);
        if (!$user['status']) {
            $response['msg'] = "Invalid credentials";
            $response['status'] = false;
            $response['field'] = 'checkuser';
        } else {
            $response['user'] = $user['user'];
        }
    }

    return $response;
}

// Function to check user credentials
function checkUser($login_data)
{
    global $db;
    $username_email = mysqli_real_escape_string($db, $login_data['username_email']);
    $query = "SELECT * FROM users WHERE email='$username_email' OR username='$username_email'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($login_data['password'], $user['password'])) {
        return array('status' => true, 'user' => $user);
    } else {
        return array('status' => false);
    }
}

// Function to logout user

    if(isset($_GET['logout'])){
    session_destroy();
    $root_path = dirname($_SERVER['PHP_SELF']);
    header("Location: $root_path/?home");
    exit();
    }


?>

