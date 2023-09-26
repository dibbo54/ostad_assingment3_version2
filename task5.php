<?php
function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    $charsLength = strlen($chars);

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $chars[rand(0, $charsLength - 1)];
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password: $password\n";
?>
