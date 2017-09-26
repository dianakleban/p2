<?php
require('Form.php');
require('helpers.php');

use DWA\Form;

$form = new Form($_POST);

$results = '';
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

  //if there is no errors
  if (empty($errors)) {

    $results = sanitize($name) . ', ';
    $results .= 'Great Choice of Language: ' . sanitize($lang) . '! ';

    if($comments != '') {
      $results .= 'Thank you for your comments: ' . '"' . sanitize($comments) . '"';
    }

  }
}//END OF submit
