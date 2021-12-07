<?php


namespace App\Password;


class PasswordHasher
{

    public function hashPassword(string $clearPassword): string
    {
        $options = [
            'cost' => 16
        ];

        return password_hash($clearPassword, PASSWORD_BCRYPT, $options);
    }

}
