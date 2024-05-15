<?php
class User
{
    private $username;
    private $email;
    private $password;
    private $errors = [];

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function validate()
    {
        // Validate username
        if (!preg_match('/^[a-zA-Z0-9]{3,20}$/', $this->username)) {
            $this->errors[] = "Username must be alphanumeric and between 3-20 characters.";
        }

        // Validate email
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Invalid email format.";
        }

        // Validate password
        if (strlen($this->password) < 6) {
            $this->errors[] = "Password must be at least 6 characters long.";
        }

        // Return array of errors
        return $this->errors;
    }
}
