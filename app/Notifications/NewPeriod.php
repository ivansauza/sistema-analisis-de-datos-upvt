<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use App\Programa;

class NewPeriod extends Notification
{
    use Queueable;

    protected $periodo;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($periodo)
    {
        $this->periodo = $periodo;
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
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'programa' => Programa::getPredeterminado()->id, 
            'mensaje'  => "Hay un nuevo periodo disponible, <b>{$this->periodo->full_clave}</b>, <a href='". route('analisis.create', ['periodo_id' => $this->periodo->id]) ."'>crear análisis de datos</a> ahora." 
        ];
    }
}
