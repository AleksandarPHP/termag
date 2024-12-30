<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class CareerMessage extends Notification
{
    use Queueable;

    protected $html, $files, $email, $name;

    /**
     * Create a new notification instance.
     */
    public function __construct($html, $files = null, $email, $name)
    {
        $this->html = $html;
        $this->files = $files;
        $this->email = $email;
        $this->name = $name;
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
    public function toMail($notifiable)
    {

        $mailMessage = (new MailMessage)
                            ->subject(__('Termag Karijera prijava'))
                            ->from($this->email, $this->name)
                            ->replyTo($this->email, $this->name)
                            ->line(new HtmlString($this->html))
                            ->action(__('Web site'), url('/'));
        // dd($this->files);
            foreach($this->files as $file){
                $mailMessage->attach(storage_path('app/public/'.$file));
            }

        return $mailMessage;
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
