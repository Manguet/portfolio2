<?php

namespace App\Services;

use App\Interface\MailingInterface;
use JetBrains\PhpStorm\NoReturn;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class MailingService implements MailingInterface
{
    public function __construct(private readonly ?MailerInterface $mailer) { }

    #[NoReturn]
    public function sendMail(array $data): void
    {
        $email = (new TemplatedEmail())
            ->from(new Address('no.reply.portfolio.benjamin@gmail.com', 'Portfolio'))
            ->to('manguetbenj@gmail.com')
            ->subject('Nouvelle demande de contact')
            ->htmlTemplate('mail/contact.html.twig')
            ->context(['data' => $data])
        ;

        $this->mailer->send($email);
    }
}