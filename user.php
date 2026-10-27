<?php

echo'<h1>ユーザー管理プログラム</h1>';

echo'<h2>自己紹介</h2>';

//クラスの定義
class User 
{
    public $name;
    public $age;

//コンストラクタを定義
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce()
    {
        //自己紹介文を生成して返す
        return "こんにちは、私は" . $this->name . "です。" . $this->age . "歳です。<br>";
    }

    public function isAdult()
    {
        return $this->age >= 18;
    }
}


$user1 = new User("田中 太郎", 25);
$user2 = new User("佐藤 花子", 17);
$user3 = new User("鈴木 一郎", 30);


echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();


echo '<h2>成人判定</h2>';

if ($user1->isAdult()>= 18){
    echo "$user1->name さんは成人です。<br>";
}else {
    echo "$user1->name さんは未成年です。<br>";
}

if ($user2->isAdult()>= 18){
    echo "$user2->name さんは成人です。<br>";
}else {
    echo "$user2->name さんは未成年です。<br>";
}

if ($user3->isAdult()>= 18){
    echo "$user3->name さんは成人です。<br>";
}else {
    echo "$user3->name さんは未成年です。<br>";
}
?>