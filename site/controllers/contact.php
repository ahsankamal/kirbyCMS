<?php

use Uniform\Form;
require 'vendor/autoload.php';


// $logger->info('Returned a million search results');

return function ($kirby) {

$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
   $data = array(
      'name'  => get('name'),
      'email' => get('email'),
      'message'  => get('message'),
      'contact_email' => get('contact_email')
    );

   $body  = snippet('contactmail', $data, true);

   $form = new Form([
      'email' => [
         'rules' => ['required', 'email'],
         'message' => 'Email is required',
      ],
      'message' => [],
      'name' => '',
   ]);


   // var_dump($kirbyy);


   if ($kirby->request()->is('POST')) {

    // $logger->info(dump($form));
    
      $form->emailAction([
         'to' => $data['contact_email'],
         'from' => 'info@ahsan.com',
         'subject' => 'New contact request',
         'replyTo' => $data['email'],
         'body'    => $body
      ]);

      if ($form->success()) {
        // redirect to success page
        // dump("$form");
        $logger->info(dump($form->success()));
    }
   }

   return compact('form');

};



