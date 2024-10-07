<?php
// Q1 変数と文字列
$name = "成瀬";
$message = "私の名前は「{$name}」です。";
echo $message;


// Q2 四則演算
$num = 5*4;
var_dump($num);

var_dump($num/2);

$num = $num / 2;
var_dump($num);


// Q3 日付操作
$text = "現在時刻は、";
$date = date('Y年m月d日　H時i分s秒');
$desu = "です。";
$message = "{$text}{$date}{$desu}";

echo  $message;


// Q4 条件分岐-1 if文
$device = "windows";

if ($device == "windows") {
    echo "使用OSは、windowsです。";
} else {
    if ($device == "mac") {
        echo "使用OSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 10;
$message = ($age > 20) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$area = ['東京都', '神奈川県', '埼玉県','栃木県','千葉県'];

echo $area[2]  ."と" . $area[3] ."は関東地方の都道府県です。" ;

// Q7 連想配列-1
$area = array("東京都"=>"新宿区", "神奈川県"=>"横浜市", "千葉県"=>"千葉市", "埼玉県"=>"さいたま市","栃木県"=>"宇都宮市","群馬県"=>"前橋市","茨城県"=>"水戸市");

foreach($area as $value){
    echo $value ."\n";
}

// Q8 連想配列-2
$area = array("東京都"=>"新宿区", "神奈川県"=>"横浜市", "千葉県"=>"千葉市", "埼玉県"=>"さいたま市","栃木県"=>"宇都宮市","群馬県"=>"前橋市","茨城県"=>"水戸市");

foreach ($area as $key => $value) {

    if($key == "埼玉県"  ){
        echo "${key}の県庁所在地は${value}です。";
    }
}

// Q9 連想配列-3
$area = array("東京都"=>"新宿区", "神奈川県"=>"横浜市", "千葉県"=>"千葉市", "埼玉県"=>"さいたま市","栃木県"=>"宇都宮市","群馬県"=>"前橋市","茨城県"=>"水戸市");
$area +=["愛知県"=>"名古屋市","大阪府" => "大阪市"];

foreach ($area as $key => $value) {

    if($key == "大阪府" || $key =="愛知県"){
        echo "${key}は関東地方ではありません。"."\n";
    }else{
        echo "${key}の県庁所在地は${value}です。"."\n";
    }
}

// Q10 関数-1
function hello($name)
{
    return $name .'さん、こんにちは。'."\n";
}

echo (hello('金谷'));
echo (hello('安藤'));

// Q11 関数-2
$price = 1000;

calcTaxInPrice($price);

function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.10;
  echo $price."円の商品の税込価格は".$taxInPrice."円です。";
}

// Q12 関数とif文
function distinguishNum($num) {
  if ($num % 2 == 0) {
      return $num . "は偶数です。"."\n";
  } else {
      return $num . "は奇数です。"."\n";
  }
}

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grade) {
  switch ($grade) {
      case 'A':
      case 'B':
          return "合格です。";
      case 'C':
          return "合格ですが追加課題があります。";
      case 'D':
          return "不合格です。";
      default:
          return "判定不明です。講師に問い合わせてください。";
  }
}
echo evaluateGrade('A')."\n";
echo evaluateGrade('F');

?>