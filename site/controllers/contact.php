<?php

use Uniform\Form;

return function ($kirby, $page) {

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

   if ($kirby->request()->is('POST')) {
      $form->emailAction([
         'to' => $data['contact_email'],
         'from' => 'info@ahsan.com',
         'subject' => 'New contact request',
         'replyTo' => $data['email'],
         'body'    => $body
      ]);

      
   }

   return compact('form');

};



