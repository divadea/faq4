<?php

./"..."/

use Illuminate\Support\Facades\Mail;

Route::get('/', 'HomeController.php@index');

Route::get('mail/queue', function() {
    mail::later(5, 'emails.queue_email','$name',function(message)
    ($message->to(foo@example.com','John Smith')->subject('Welcome!');
    });
    