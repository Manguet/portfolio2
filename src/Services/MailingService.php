<?php

namespace App\Services;

use App\Interface\MailingInterface;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class MailingService implements MailingInterface
{
    public function __construct(private readonly ?MailerInterface $mailer) { }

    #[NoReturn]
    public function sendMail(array $data): void
    {
        $email = (new Email())
            ->from(new Address('no.reply.portfolio.benjamin@gmail.com', 'Portfolio'))
            ->to('manguetbenj@gmail.com')
            ->subject('Nouvelle demande de contact')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $this->mailer->send($email);
    }
}