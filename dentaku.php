<?php
    /*
    $kazu_1  = $_POST['kazu_1'];
    $kazu_2  = $_POST['kazu_2'];
    $ope     = $_POST['operator'];

    */
    
    $kazu_1 = "0";
    $kazu_2 = "0";
    $kazu_3 = "0";
    $ope    = "+";
    
    if(isset($_POST['kazu_1']))$kazu_1  = $_POST['kazu_1'];
    if(isset($_POST['kazu_2']))$kazu_2  = $_POST['kazu_2'];
    
    if(isset($_POST['operator'])){
        $ope       = $_POST['operator'];
    }
    
    
    if(ctype_digit($kazu_1) == false){
        print("Error : kazu_1 Please input number\n");
    }
    
    if(ctype_digit($kazu_2) == false){
        print("Error : kazu_2 Please input number\n");
    }


    
    //isset 変数がnullでないかどうかを調べる
    //GET = データがURLで引き渡される
    //POST = データがURLで引き渡されない
    
    
    
    if($ope == "+") $kazu_3 = $kazu_1 + $kazu_2;
    if($ope == "*")$kazu_3 = $kazu_1 * $kazu_2;
    if($ope == "-") $kazu_3 = $kazu_1 - $kazu_2;
    if($ope == "/") $kazu_3 = $kazu_1 / $kazu_2;
    
  

    
    
    ?>
<html>
<head>
<title>電卓</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" /> <!--文章の形式設定-->
</head>
<body>
<form action="dentaku.php" method="post">

<!-- actionで、データを受け取るプログラムを作成methodで、データの送信方法を指定
この後、input type,text,submitを決める-->

<!-- input 'text'と'submit'の二種 -->

<p>
<input type="text" name="kazu_1" value="<?php echo htmlspecialchars($kazu_1); ?>">

    <select name= "operator">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>

<input type="text" name="kazu_2" value="<?php echo htmlspecialchars($kazu_2); ?>"> =
<span><?php echo htmlspecialchars($kazu_3); ?></span>
<input type="submit" name="button_sum" value="計算">
</p>
</form>
</body>
</html>

<!-- input type="next" 一行テキスト入力欄"
 php echoで引数を全て出力
 value属性で初期値を用意できる
 name データ送信時の変数の名前
 spanで囲った部分はスタイルシートを適用
-->
