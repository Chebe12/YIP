<?php
/* Smarty version 4.3.0, created on 2024-05-15 08:19:27
  from 'C:\wamp64\www\YIP\templates\registration_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6644700fb82f79_25423127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '449ecc8933411343328fc9a647037996eb0a1ccf' => 
    array (
      0 => 'C:\\wamp64\\www\\YIP\\templates\\registration_form.tpl',
      1 => 1715761163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6644700fb82f79_25423127 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>User Registration Form</title>
</head>
<body>
<div class="wrapper">
  <div class="registration_form">
    <div class="title">User Registration Form</div>
    <ul>
    <li><?php echo '<?php'; ?>
 echo "$errors" <?php echo '?>'; ?>
</li>
</ul>
    <form action="process_registration.php" method="post">
      <div class="form_wrap">
        <div class="input_wrap">
          <label>First Name</label>
          <input type="text" name="username" id="fname" />
        </div>
        <div class="input_wrap">
          <label>Email Address</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="input_wrap">
          <label>Password</label>
          <input type="password" name="password" id="password" />
        </div>

        <div class="input_wrap">
          <input type="submit" value="Register Now" class="submit_btn" />
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<?php }
}
