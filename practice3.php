<?php
function twotimes($i){
    return $i * 2;
}
echo twotimes(10);
"\n";

function addition2($a,$b){
    return $a + $b;
}
echo addition2(10,5);
"\n";



function arraynumber(array $arr){
    $num = 1;
    foreach($arr as $value) {
        $num *= $value;
    }
    echo $num;
}
$list = [1,3,5,7,9];
arraynumber($list);
echo"\n";


function max_array($arr){
    
    $array2 = arsort($arr);
}
echo $array2[0];
echo"\n";

?>


1.  strip_tags — 文字列から HTML およびPHP タグを取り除く

strip_tags($input);


2. array_push — 一つ以上の要素を配列の最後に追加する

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);


3.  array_merge — ひとつまたは複数の配列をマージする
両方の配列に同じキーが存在する場合は最初の配列のものが残り、 二番目の配列の内容は無視されます。

$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);

4.  time — 現在の Unix タイムスタンプを返す
    mktime — 日付を Unix のタイムスタンプとして取得する
// デフォルトのタイムゾーンを設定します。
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));

5.   date — ローカルの日付/時刻を書式化する
// 使用するデフォルトのタイムゾーンを指定します。
date_default_timezone_set('UTC');


// 結果は、たとえば Monday のようになります。
echo date("l");

// 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
echo date('l jS \of F Y h:i:s A');

// 結果は July 1, 2000 is on a Saturday となります。
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* 書式指定パラメータに、定数を使用します。 */
// 結果は、たとえば Wed, 25 Sep 2013 15:28:57 -0700 のようになります。
echo date(DATE_RFC2822);

// 結果は、たとえば 2000-07-01T00:00:00+00:00 のようになります。
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));



    








    





