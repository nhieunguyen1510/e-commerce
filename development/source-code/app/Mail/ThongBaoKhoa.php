<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThongBaoKhoa extends Mailable
{
    use Queueable, SerializesModels;

    protected $shop;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($shop)
    {
        $this->ten_shop = $shop;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thông báo khóa tài khoản #')
        ->view('emails.admin.thongbaokhoa')
        ->with('ten',$this->ten_shop);
    }
}
