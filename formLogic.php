<?php
require('helpers.php');

if (isset($_POST['name'])) {
    $contactNm = $_POST['name'];
} else {
    $contactNm = '';
}

if (isset($_POST['email'])) {
    $contactEmail = $_POST['email'];
} else {
    $contactEmail = '';
}

if (isset($_POST['comments'])) {
    $comments = $_POST['comments'];
} else {
    $comments = '';
}

$lang = '';
$results = '';

if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];

    if ($lang == 'choose') {
        $results = 'Please choose your language.';
    } else {
        if($contactNm != '') {
          $results = $contactNm . ', ';
        }
        $results .= 'Great Choice of Language: ' . $lang . '! ';

        if($comments != '') {
          $results .= 'Thank you for your comments: ' . '"' . $comments . '"';
        }
    }
}
