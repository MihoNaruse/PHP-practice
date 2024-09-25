<?php
// Q1 tic-tac問題

for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 == 0) {
      echo "tic\n";
  } elseif ($i % 5 == 0) {
      echo "tac\n";
  } else {
      echo $i . "\n";
  }
}

// Q2 多次元連想配列
//問題1
foreach ($personalInfos as $info) {
  if ($info['name'] === 'Bさん') {
      echo $info['name'] . "の電話番号は" . $info['tel'] . "です。";
  }
}

//問題2
$index = 1;

foreach ($personalInfos as $info) {
    echo "{$index}番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";
    $index++;
}
//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => &$info) {
    $info['age'] = $ageList[$index];
}

var_dump($personalInfos);
// Q3 オブジェクト-1


public function introduce()
    {

    echo "学籍番号{$this->studentId}番の生徒は{$this->studentName}です。\n";
}


$student = new Student(120, '山田');

$student->introduce();

// Q4 オブジェクト-2
public function attend($className)
{
    echo "{$this->studentName}は{$className}の授業に参加しました。学籍番号：{$this->studentId}\n";
}


$yamada = new Student(120, '山田');

$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1

$date = new DateTime('2021-03-02');

$date->modify('-1 month');

echo $date->format('Y-m-d');
//問題2

$today = new DateTime('now');

$pastDate = new DateTime('1992-04-25');

$interval = $today->diff($pastDate);

echo "あの日から" . $interval->days . "日経過しました。\n";
?>