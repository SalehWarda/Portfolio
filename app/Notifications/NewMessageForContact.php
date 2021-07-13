<?php

namespace App\Notifications;

use App\Models\front\ContactUs;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewMessageForContact extends Notification implements ShouldQueue,ShouldBroadcast
{
    use Queueable;

    private $message;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactUs $message)
    {
        //
        $this->message = $message;
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
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            //
            'id' => $this->message->id,
            'name' => $this->message->name,
            'email' => $this->message->email,
            'subject' => $this->message->subject,
            'message' => $this->message->message,
        ];
    }


}
