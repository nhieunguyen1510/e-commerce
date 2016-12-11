<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KhoiPhucMatKhauMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $maKhoiPhuc;
    protected $link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($maKhoiPhuc, $link)
    {
        $this->maKhoiPhuc = $maKhoiPhuc;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thông báo xác nhận mã khôi phục #')
                    ->view('emails.tai-khoan-nguoi-ban.khoi-phuc-mat-khau')
                    ->with('maKhoiPhuc', $this->maKhoiPhuc)
                    ->with('link', $this->link);
    }
}
