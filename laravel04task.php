<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成
function sum($num) {
    return $num * 2;
}
echo sum(5);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成
function add($a, $b){
    return $a + $b;
}
echo add(2, 3);

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成
function mul($arr){
    $result = $arr[0];
    for($i = 1; $i < count($arr); $i++){
        $result *= $arr[$i];
    }
        return $result;
}
echo mul(array(1, 3, 5, 7, 9));

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
         //どうしたらいいかわからない・・・・
         if($max_number < $a){
             $max_number = $a;
         }
    }
    return $max_number;
 }
 echo max_array(array(10, 15, 8));
 
 //5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
 //strip_tags, array_push, array_merge, time, mktime, date
 $text = "<p>あなたに最高のコーヒーを提供します。</p>";
 echo strip_tags($text);
 echo strip_tags($text, "<p>");
 
 $arr = [1, 2];
 array_push($arr, 3, 4);
 echo $arr[3];
 
 $array1 = [1, 2, 3];
 $array2 = [4, 5, 6];
 $array3 = [7, 8, 9];
 $array = array_merge($array1, $array2, $array3);
 print_r($array);
 
 echo mktime(1, 2, 3, 4, 5, 2006);
 echo(date("Y年m月d日 H時i分s秒",mktime(1, 2, 3, 4, 5, 2006)));
 echo (date("G:i:s",time()));
 
 ?>