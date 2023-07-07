<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    // プロパティを定義
    private $name;
    private $email;
    private $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
            // コンストラクタでプロパティに値を格納
        $this->name = $inputs['name'];
        $this->email = $inputs['email'];
        $this->text = $inputs['text'];
    }

    public function build()
    {
    // メールの設定
    return $this
            ->from('miyazawa8170office@gmail.com')
            ->subject('test')
            ->view('index/mail')
            ->with([
            'name' => $this->name,
            'email' => $this->email,
            'text' => $this->text,
            ]);
    }
}
