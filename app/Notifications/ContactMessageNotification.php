<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactMessageNotification extends Notification
{
    use Queueable;


    private $contactMessage;
    /**
     * Create a new notification instance.
     */
    public function __construct($contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('Pesan Baru dari ' . $this->contactMessage->name)
        ->greeting('Halo Admin Leker Londo,')
        ->line('Anda baru saja menerima pesan baru dari ' . $this->contactMessage->name. ' Berikut data diri lengkapnya')
        ->line('Nama: ' . $this->contactMessage->name)
        ->line('Email: ' . $this->contactMessage->email)
        ->line('Subjek: ' . $this->contactMessage->subject)
        ->line('Pesan: ' . $this->contactMessage->message)
        ->line('Silakan periksa database atau balas email ini.')
        ->line('Regards, ')
        ->salutation('Leker Londo ');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
