<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\SmtpSetting;

class SmtpMail extends Component
{
    public $name;
    public $username;
    public $password;
    public $host;
    public $port;
    public $mailer;
    public $encryption;
    public $status;
    public $address;

    public function store(){

        $hasMail = SmtpSetting::where('user_id', auth()->user()->id)->first();

        if($hasMail){

        $hasMail->user_id = auth()->user()->id;
        $hasMail->user_mail = $this->username;
        $hasMail->password = $this->password;
        $hasMail->mail_host = $this->host;
        $hasMail->mail_port = $this->port;
        $hasMail->mail_encryption = $this->encryption;
        $hasMail->status = $this->status;
        $hasMail->mail_address = $this->address;
        $hasMail->mail_from_name = $this->name;
        $hasMail->mailer_name = $this->mailer;
        $hasMail->save();
        return redirect()->route('smtp-mail')->with('success', 'Smtp configuration updated successfully');

        }else{

        $mail = new SmtpSetting();
        $mail->user_id = auth()->user()->id;
        $mail->user_mail = $this->username;
        $mail->password = $this->password;
        $mail->mail_host = $this->host;
        $mail->mail_port = $this->port;
        $mail->mail_encryption = $this->encryption;
        $mail->status = $this->status;
        $mail->mail_address = $this->address;
        $mail->mail_from_name = $this->name;
        $mail->mailer_name = $this->mailer;
        $mail->save();
        return redirect()->route('smtp-mail')->with('success', 'Smtp configuration updated successfully');
    }

    }

     public function boot(){

        $mail = SmtpSetting::where('user_id', auth()->user()->id)->first();
        if($mail){
        $this->name =   $mail->mail_from_name ;
        $this->username = $mail->user_mail;
        $this->password = $mail->password;
        $this->host =  $mail->mail_host;
        $this->port =$mail->mail_port;
        $this->mailer =$mail->mailer_name;
        $this->encryption = $mail->mail_encryption;
        $this->status =  $mail->status;
        $this->address =     $mail->mail_address  ; 
        }


    }


    public function render()
    {
        $data['pageTitle'] = 'Smtp Mail Setting';
        return view('livewire.admin.smtp-mail', $data);
    }
}