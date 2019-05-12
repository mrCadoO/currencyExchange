<?php
require_once('sessions.php');
require_once __DIR__ . '/vendor/autoload.php';

use wangcj\helloworld\helloworld as Course;



if(isset($_POST['curr_name']) && isset($_POST['amount'])){
    $exch = Course::td($_POST['curr_name']) * $_POST['amount'];

    $session->currency_amount($_POST['amount']);
    $session->course($_POST['curr_name']);

    $session->currency_result($exch);
    Course::redirect_to('index.php');
}


