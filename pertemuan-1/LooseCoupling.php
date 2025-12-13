<?php

interface MessageService
{
    public function send(string $message): string;
}

class EmailService implements MessageService
{
    public function send(string $message): string
    {
        return "Mengirim email: $message";
    }
}

class SmsService implements MessageService
{
    public function send(string $message): string
    {
        return "Mengirim SMS: $message";
    }
}

class Notification
{
    private MessageService $service;

    public function __construct(MessageService $service)
    {
        // Loose coupling
        $this->service = $service;
    }

    public function notify(string $message): string
    {
        return $this->service->send($message);
    }
}

// Bisa diganti-ganti tanpa ubah class Notification
$notifEmail = new Notification(new EmailService());
echo $notifEmail->notify("Halo via Email") . PHP_EOL;

$notifSms = new Notification(new SmsService());
echo $notifSms->notify("Halo via SMS");
