<?php

$lander        = "https://syn.su/lander.php?r=land/index";
$land          = 'internetacademy';
$type          = 'internetacademy';
$unit          = 'synergy';
$mail          = 'info@synegyacademy.ru';
$phone         = '+ 7 495 225-23-26';
$phone_link    = '+74952252326';
$date          = '';
$quote_id      = '';
$speaker       = '';
$program       = '';
$gtm           = 'WPPNHZD';
$title         = 'Получи востребованную профессию от Synergy University';
$desc          = 'Стань востребованным специалистом Начни зарабатывать уже сейчас';
$link          = 'https://synergyacademy.com/lp/v2/thanks/';
$enkod_send_template_id = '1132';
$h1 = 'Получи современную профессию';

switch ($version) {
    case 'v2':
        
    break;
}

if (!empty($_REQUEST['h1'])) {
    $title_podmena = htmlspecialchars($_REQUEST['h1']);
    $h1 = '';
}
if (!empty($_REQUEST['h2'])) {
    $title_podmena_2 = htmlspecialchars($_REQUEST['h2']);
    $h1 = '';
}


$action = implode(array(

    $lander,

    '&land=',  $land,
    '&unit=',  $unit,
    '&type=',  $type,
    '&version=',  $version,
    '&partner=',  $partner,
    '&speaker=',  $speaker,
    '&program=',  $program,
    '&enkod_send_template_id=', $enkod_send_template_id,
    // '&link='     ,  $link,
    '&link=', urlencode($link),
    '&quote_id=',  $quote_id,
    '&ignore-thanksall=true'

));
