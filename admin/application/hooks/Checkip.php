<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkip {
    public function ipchk(){
        if($_SERVER['REMOTE_ADDR'] != '182.73.240.254'){
            header('Location: https://manntravel.co.uk');
        }
    }

}