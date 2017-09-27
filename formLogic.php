<?php
require('Form.php');
require('helpers.php');

use DWA\Form;

$form = new Form($_POST);

$lang = '';

if ($form->isSubmitted()) {

  $name = $form->get('name', '');
  $email = $form->get('email', '');
  $comments = $form->get('comments', '');
  $lang = $form->get('lang', '');

  $errors = $form->validate([
    'name' => 'required|alpha',
    'email' => 'required|email',
    'lang'=> 'required'
  ]);

}//end of submit
