<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MerchantMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $donhang;
    protected $danhsachchitietsanpham;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($donhang,$danhsachchitietsanpham)
    {
        $this->donhang= $donhang;
        $this->danhsachchitietsanpham= $danhsachchitietsanpham;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.merchantmail')
                    ->with('donhang',$this->donhang)
                    ->with('danhsachchitietsanpham', $this->danhsachchitietsanpham);
    }
}
