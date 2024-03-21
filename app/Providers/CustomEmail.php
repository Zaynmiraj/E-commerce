<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SmtpSetting;
use Config;

class CustomEmail extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $smtpSettings = SmtpSetting::first();

        if ($smtpSettings) {
            Config::set('mail.mailers.smtp.mailer', $smtpSettings->mailer_name);
            Config::set('mail.mailers.smtp.host', $smtpSettings->mail_host);
            Config::set('mail.mailers.smtp.port', $smtpSettings->mail_port);
            Config::set('mail.mailers.smtp.encryption', $smtpSettings->mail_encryption);
            Config::set('mail.mailers.smtp.username', $smtpSettings->user_mail);
            Config::set('mail.mailers.smtp.password', $smtpSettings->password);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}