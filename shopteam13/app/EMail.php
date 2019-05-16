<?php

namespace App;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EMail {

   public $email;
   function set_name($email) {
      $this->email = $email;
   }
      function get_name() {
      return $this->email;
   }

   static function  html_email($newPassword,$email) {         
        $newEmail = new EMail();
        $newEmail->set_name($email);

        $data = array('newPassword'=>$newPassword);
        Mail::send('pageUser.mail',  array_merge($data, ['newEmail' => $newEmail]), function($message) use ($newEmail) {
            $message->to($newEmail->email, $name = null)->subject
            ('Reset password');
            $message->from('xyz@gmail.com','Shopteam13');
        });   
        
    }
}