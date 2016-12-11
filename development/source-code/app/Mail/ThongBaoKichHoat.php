<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThongBaoKichHoat extends Mailable
{
    use Queueable, SerializesModels;

    protected $ten;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ten)
    {
        $this->ten = $ten;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->subject('Thông báo kích hoạt thành công')
        ->view('emails.admin.thongbaokichhoat')
        ->with('ten',$this->ten);
    }
}
