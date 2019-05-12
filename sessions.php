<?php

class CurrencySession{

    public $curr_result = 0;
    public $amount = 0;

    function __construct(){
        session_start();
    }



    public function currency_result($msg=""){
        if(!empty($msg)){
            $_SESSION['curr_result'] = $msg;
        } else {
            return $this->curr_result;
        }
    }

    public function currency_amount($msg=""){
        if(!empty($msg)){
            $_SESSION['amount'] = $msg;
        } else {
            return $this->amount;
        }
    }


    public function course($msg=""){
        if(!empty($msg)){
            $_SESSION['course'] = $msg;
        } else {
            return false;
        }
    }


    public function output_curr_result(){
        if(isset($_SESSION['curr_result'])){
            echo $_SESSION['curr_result'];
        } else {
            return false;
        }
    }


    public function output_amount(){
        if(isset($_SESSION['amount'])){
            echo $_SESSION['amount'];
        } else {
            return false;
        }
    }


    public function output_course(){
        if(isset($_SESSION['course'])){
            return $_SESSION['course'];
        } else {
            $_SESSION['course'] = 'EUR';
            return $_SESSION['course'];
        }
    }

}


$session = new CurrencySession();

?>