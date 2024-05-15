<?php
/* Smarty version 4.3.0, created on 2024-05-15 07:40:36
  from 'C:\wamp64\www\YIP\templates\confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_664466f3f42396_85487175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872e8614018dab4f6aabbbeca537881ab85a705c' => 
    array (
      0 => 'C:\\wamp64\\www\\YIP\\templates\\confirmation.tpl',
      1 => 1715758833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664466f3f42396_85487175 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- confirmation.tpl -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <title>Registration Confirmation</title>
</head>
<body>
    
    <div class="wrapper_result">
        <div class="result">
            <h2 class="success">Registration Successful</h2>
            <div >
                <p>Thank you for registering!</p>
                <p class="info">Your information:</p>
                    <ul>
                        <li><strong>Username:</strong> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</li>
                        <li><strong>Email:</strong> <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</li>
                        <li><strong>Password:</strong> <?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</li>
                    </ul>

            </div>
            
        </div>
    </div>
</body>
</html>
<?php }
}
