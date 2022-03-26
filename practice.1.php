<?php
class result{
    
    //プロパティ
    public $name;
    public $id;
    //クラス変数
    public static $testresult = 20;
   
    //メソッド
        public function test(){
        echo "$this->name (ID No.$this->id), $this->testresult 点";
    }
    //クラスメソッド
        public static function test2(){
        $val =  self::$testresult += 20;
        echo $val;
    }
       
}

$score = result::test2();
echo $score;


