<?php

namespace App\Interface;

use JetBrains\PhpStorm\NoReturn;

interface MailingInterface
{
    #[NoReturn]
    public function sendMail(array $data): void;
}