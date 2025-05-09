<?php

namespace App\Notifications;

use App\Models\WarrantyClaim;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\DatabaseMessage;

class WarrantyNotification extends Notification
{
    use Queueable;

    public function __construct(
        public WarrantyClaim $claim
    ) {}

    // Kirim via email dan database
    public function via($notifiable): array
    {
        return ['mail', 'database'];
    }

    // Konten email
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Klaim Garansi #{$this->claim->id}")
            ->line("Ada klaim garansi untuk order #{$this->claim->order_id}")
            ->action('Lihat Detail', url("/admin/claims/{$this->claim->id}"))
            ->line('Segera verifikasi!');
    }

    // Data untuk disimpan di database
    public function toDatabase($notifiable): array
    {
        return [
            'claim_id' => $this->claim->id,
            'order_id' => $this->claim->order_id,
            'message' => "Klaim garansi perlu diverifikasi",
            'link' => "/admin/claims/{$this->claim->id}"
        ];
    }
}