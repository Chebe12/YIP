<!-- confirmation.tpl -->

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
                        <li><strong>Username:</strong> {$username}</li>
                        <li><strong>Email:</strong> {$email}</li>
                        <li><strong>Password:</strong> {$password}</li>
                    </ul>

            </div>
            
        </div>
    </div>
</body>
</html>
