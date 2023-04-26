
<!-- 2時間目 -->
<?php
$suugaku=45;
$eigo=82;
if($suugaku>50||$eigo>50){
    echo"この人は合格です";
}
?>
<?php
$name="高橋";
echo$name;
?>
<?php
$number=10;
echo$number;
?>
<?php
$a=3+3;
echo$a;
echo"<br>"
?>
<?php
$a=7+3;
echo$a;
echo"<br>"
?>
<?php
$b=2*5;
echo$b;
echo"<br>"
?>
<?php
$a1=10/2;
echo$a1;
echo"<br>"
?>
<?php
$a2=-3-5;
echo$a2;
echo"<br>"
?>
<?php
echo-3-5;
echo"<br>"
?>
<?php
$a="3+3";
echo$a;
echo"<br>"
?>
<?php
$a="7+3";
echo$a;
echo"<br>";
?>
<?php
$b="2*5";
echo$b;
echo"<br>";
?>
<?php
echo"-3-5";
echo"<br>";
echo"<br>";
?>

<!-- 3時間目 -->
<?php
echo"3時間目";
echo"<br>";
?>
<?php
echo 7%3;
echo"<br>";
?>
<?php
$a=10;
echo ++$a;
echo"<br>";
?>
<?php
$a=10;
echo ++$a;
echo"<br>";
echo ++$a;
echo"<br>";
echo ++$a;
echo"<br>";
echo ++$a;
echo"<br>";
?>
<?php
$a=10;
echo $a++;
echo"<br>";
?>
<?php
$a=10;
echo $a++;
echo"<br>";
echo $a++;
echo"<br>";
echo $a++;
echo"<br>";
echo $a++;
echo"<br>";
?>
<?php
$a=10;
echo --$a;
echo"<br>";
?>
<?php
$a=10;
echo --$a;
echo"<br>";
echo --$a;
echo"<br>";
echo --$a;
echo"<br>";
echo --$a;
echo"<br>";
?>
<?php
$a=10;
echo $a--;
echo"<br>";
?>
<?php
$a=10;
echo $a--;
echo"<br>";
echo $a--;
echo"<br>";
echo $a--;
echo"<br>";
echo $a--;
echo"<br>";
echo"<br>";
?>
<!-- 4時間目 -->
<?php
echo"4時間目";
echo"<br>";
?>

<?php
$a=15;
if ($a>10) {
    echo"A<br>";
}
?>
<?php
$a=20;
if ($a>10) {
       echo"A<br>";
} elseif ($a<10){
       echo"B<br>";
}
?>
<?php
$a=20;
if ($a>10) {
      echo"A<br>";
} else {
      echo"Z<br>";
}
?>
<!-- 5時間目 -->
<?php
echo"5時間目";
echo"<br>";
?>
<?php
$a=20;
if ($a>10) {
    if ($a<30) {
        echo"A<br>";
    }
}
?>
<?php
$kokugo=80;
$suugaku=65;
if ($kokugo>=70) {
    if ($suugaku>=70) {
        echo"合格<br>";
    } else {
        echo"不合格<br>";
    }
}
?>
<!-- 6時間目 -->
<?php
echo"6時間目";
echo"<br>";
?>
<?php
$a=1;
switch ($a) {
    case 0 :
        echo"aは0に等しい<br>";
        break;
    
    case 1:
        echo"aは1に等しい<br>";
        break;
}
?>
<?php
$a=5;
switch ($a) {
    case 0:
        echo"aは0に等しい<br>";
        break;

    case 1:
        echo"aは1に等しい<br>";
        break;
    
    default:
        echo"aは0でも1でもない<br>";
        break;
}
?>
<!-- 7時間目 -->
<?php
echo"7時間目";
echo"<br>";
?>
<?php
echo $name;
echo"<br>";
// 変数を空っぽにするやり方
// $name=array();
$name=array("田中","高橋","斉藤");
// $name[0]="田中";
// $name[1]="高橋";
// $name[2]="斉藤";
echo $name[2];
echo"<br>";
?>
<?php
$name=array("田中","高橋","斉藤");
echo $name[0];
echo"<br>";
?>
<?php
$z=array("x","y","z");
echo $z[0];
echo"<br>";
?>
<?php
$z=array("x","y","z");
echo $z[1];
echo"<br>";
?>
<?php
$abc=array(1,5,10);
echo $abc[0];
echo"<br>";
?>
<?php
$abc=array(1,5,10);
echo $abc[1];
echo"<br>";
?>
<?php
$xyz=array("山田",10,7);
echo $xyz[1];
echo"<br>";
?>
<!-- 8時間目 -->
<?php
echo"8時間目";
echo"<br>";
?>
<?php
$country=array("アジア"=>"日本",
               "アメリカ"=>"アメリカ",
               "欧州"=>"フランス",

);
echo $country["アジア"];
echo"<br>";
?>
<?php
$country=array(
         array("日本","タイ"),
         array("アメリカ","ブラジル"),
         array("フランス","ロシア"),
         );
echo $country[0][0];
echo"<br>";
?>
<?php
$country=array(
    array("日本","タイ"),
    array("アメリカ","ブラジル"),
    array("フランス","ロシア"),
    );
echo $country[0][1];
echo"<br>";
?>
<?php
$country=array(
    array("日本","タイ"),
    array("アメリカ","ブラジル"),
    array("フランス","ロシア"),
    );
echo $country[1][0];
echo"<br>";
?>
<?php
$country=array(
    array("日本","タイ"),
    array("アメリカ","ブラジル"),
    array("フランス","ロシア"),
    );
echo $country[2][1];
echo"<br>";
?>
<?php
$country=array(
    "アジア"=>array("東アジア"=>"日本","東南アジア"=>"タイ"),
    "アメリカ"=>array("北米"=>"アメリカ","南米"=>"ブラジル"),
    "欧州"=>array("西欧"=>"フランス","東欧"=>"ロシア"),  
    );
echo $country["アジア"]["東南アジア"];
?>
<!-- 9時間目 -->
<?php
echo"9時間目";
echo"<br>";
?>
<?php
$name=array();
$name="山田";
$age=25;
echo $name."さん(".$age."歳)";
echo"<br>";
?>
<!--  10時間目 -->
<?php
echo"10時間目";
echo"<br>";
?>
<?php
function totalprice($fruitprice,$tax=1.08,$haiso=350){
    return($fruitprice*$tax)+$haiso;
}
$mikan=totalprice(300);
echo $mikan."<br>";
$ringo=totalprice(450);
echo $ringo."<br>";
$ichigo=totalprice(550);
echo $ichigo."<br>";
$nashi=totalprice(350);
echo $nashi."<br>";
?>
<?php
function shikaku($tate,$yoko){
    return $tate*$yoko;
}
echo shikaku(3,5);
echo "<br>";
echo shikaku(5,10);
echo "<br>";
echo shikaku(7,3);
echo "<br>";
?>
<!-- 11時間目 -->
<?php
echo"11時間目";
echo"<br>";
?>
<?php
for($i=1; $i<=5; $i++){
    echo "★";
    
}
echo"<br>";
?>
<?php
$a=array("東京","千葉","埼玉","神奈川");
foreach ($a as $value) {
    echo $value;
}
echo"<br>";
?>
<?php
$a=array();
$a=array("山田","佐藤","鈴木");
foreach ($a as $b => $c) {
    echo $b.$c;
}
echo"<br>";
?>

<?php
$a=array(
    "【A】"=>"赤",
    "【B】"=>"青",
    "【C】"=>"緑"
);
foreach ($a as $key => $value) {
    echo $key.$value;
    echo"<br>";
}
?>
<?php
$food=array(
    "vegetable"=>array(
                 "carrot"=>"にんじん",
                 "tomato"=>"トマト",
                 "onion"=>"たまねぎ"
    ),
    "fruit"=>array(
                 "apple"=>"りんご",
                 "orange"=>"オレンジ",
                 "grape"=>"ぶどう",
                 ));
foreach ($food as $groupkey => $namekey) {
   echo "◼︎".$groupkey."<br>";
   foreach ($namekey as $eigoname => $nihonname) {
    echo $eigoname.":".$nihonname."<br>";
   }
   echo"<br>";
}
?>
<?php
$a=array("d","c","b","a");
sort($a);
foreach ($a as $key => $value) {
    echo $value."<br>";
}
?>