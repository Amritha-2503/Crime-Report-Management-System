<?php

require_once 'vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;

$lang_two = $_POST['lang_two'];
$text = $_POST['text'];

    $tr = new GoogleTranslate($lang_two);

    $textout = $tr->translate($text);

    $lang_one = $tr->getLastDetectedSource();

    echo GoogleTranslate::trans($text, $lang_two, $lang_one);