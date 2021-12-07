<?php


namespace App\Order;


use App\Email\EmailSender;

class OrderConfirmation
{

    public function confirmOrder($email)
    {
        $emailSender = new EmailSender();
        $emailSender->sendEmail($email, 'Commande confirmée');
    }

}
