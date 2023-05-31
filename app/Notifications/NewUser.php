<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUser extends Notification
{
    use Queueable;

    private User $user;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $user)
    {

        $this->user = $user;
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
                    ->subject(sprintf('%s downloaded a dictionary', $this->user->getFullName()))
                    ->greeting(sprintf('%s downloaded a dictionary', $this->user->getFullName()))
                    ->line(sprintf('Name: %s', $this->user->getFullName()))
                    ->line(sprintf('Email: %s', $this->user->email))
                    ->line(sprintf('Phone: %s', $this->user->getFullPhoneNumber()))
                    ->line(sprintf('Country: %s', $this->user->country));
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
