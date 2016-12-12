<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThongBaoKichHoat extends Mailable
{
    use Queueable, SerializesModels;

    protected $shop, $link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($shop, $link)
    {
        $this->ten_shop = $shop;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thông báo kích hoạt thành công #')
        ->view('emails.admin.thongbaokichhoat')
        ->with('ten',$this->ten_shop)
        ->with('link',$this->link);
    }
}
