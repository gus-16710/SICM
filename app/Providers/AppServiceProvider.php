<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->greeting('¡Hola 🤚🏻!')
                ->subject('Confirme su dirección de correo electrónico')
                ->line('Haga clic en el botón a continuación para verificar su dirección de correo electrónico.')
                ->action('Confirmar correo electrónico', $url);
        });   
    }
}
