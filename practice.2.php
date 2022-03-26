<?php
require_once('practice.1.php');
class otherresult extends result {
    
    public function scoreup(){
        echo "持ち点".$this->newresult += 10;
    }
    
}

$otherresult = new otherresult();
$otherresult->name = '佐々木';
$otherresult->id = 2;
$otherresult->testresult = 60;
$otherresult->newresult = 70;

$otherresult->test();
$otherresult->scoreup();


