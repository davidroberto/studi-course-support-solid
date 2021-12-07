<?php


namespace App\Email;


class EmailSender
{

    public function sendEmail(string $email, string $subject): void
    {
        $message = $this->createMessage($email);

        mail($email, $this->subject, $message);
    }

    private function createMessage(string $email): string
    {
        return 'Votre compte a été créé sur l\'adresse'. $email;
    }

}
