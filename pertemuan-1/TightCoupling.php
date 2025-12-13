<?php

class EmailService
{
    public function send(string $message): string
    {
        return "Mengirim email: $message";
    }
}

class Notification
{
    private EmailService $emailService;

    public function __construct()
    {
        // Ketergantungan langsung (tight coupling)
        $this->emailService = new EmailService();
    }

    public function notify(string $message): string
    {
        return $this->emailService->send($message);
    }
}

$notif = new Notification();
echo $notif->notify("Halo User");
