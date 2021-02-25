<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcceptProject extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($creator,$project_id_accepted,$budget,$worker,$message,$flag)
    {
        $this->creator = $creator;
        $this->project_id_accepted = $project_id_accepted;
        $this->budget = $budget;
        $this->worker = $worker;
        $this->message = $message;
        $this->flag = $flag;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
        return [
            'creator' => $this->creator,
            'project_id_accepted' => $this->project_id_accepted,
            'budget' => $this->budget,
            'worker' => $this->worker,
            'data' => $this->message,
            'flag' => $this->flag,
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
