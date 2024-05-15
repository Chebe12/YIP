<?php
include 'smartyheader.php';
include 'User.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Create a new User object
  $user = new User($username, $email, $password);

  // Validate user input
  $errors = $user->validate();

  // If there are no validation errors, display confirmation
  if (empty($errors)) {
    // Assign user data to Smarty template variables
    $smarty->assign('username', $username);
    $smarty->assign('email', $email);
    $smarty->assign('password', $password);

    // Display confirmation template
    $smarty->display('confirmation.tpl');
  } else {
    $smarty->assign('errors', $errors);
    // Display errors in a JavaScript alert
    echo "<script>alert('" . implode("\\n", $errors) . "'); window.location.href = 'index.php';</script>";
    exit;
  }
} else {
  header("Location: registration_form.php");
  exit;
}
