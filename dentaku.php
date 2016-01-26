<?php
    /*
    $kazu_1  = $_POST['kazu_1'];
    $kazu_2  = $_POST['kazu_2'];
    $ope     = $_POST['operator'];

    */
    
    $num_1    = "";
    $num_2    = "";
    $num_3    = "";
    $operator = "+";
    
    
    if(isset($_POST['num_1']))      $num_1    = $_POST['num_1'];
    if(isset($_POST['num_2']))      $num_2    = $_POST['num_2'];
    if(isset($_POST['operator']))   $operator = $_POST['operator'];
    
    
    
    
    if(ctype_digit($num_1) === false){
        print("Error : num_1 Please input number\n");
    }
    
    if(ctype_digit($num_2) === false){
        print("Error : num_2 Please input number\n");
    }

    
    //==は無理やり等価を成り立たせる可能性がある


    
    //isset 変数がnullでないかどうかを調べる
    //GET = データがURLで引き渡される
    //POST = データがURLで引き渡されない
    
    if((ctype_digit($num_1))&&(ctype_digit($num_2))){
    
    if($operator == "+") $num_3 = $num_1 + $num_2;
    if($operator == "/") {
        if($num_2 == 0){
            print("Error : not capable of being computed\n");
        } else {
            $num_3 = $num_1 / $num_2;
        }
    }
    if($operator == "-") $num_3 = $num_1 - $num_2;
    if($operator == "*") $num_3 = $num_1 * $num_2;
    
    }
    
    
    ?>
<!DOCTYPE>
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
<input type="text" name="num_1" value="<?php echo htmlspecialchars($num_1); ?>">

<select name= "operator">
<?php ($_POST["operator"] =="+")?$val = "selected":$val = ""; ?>
        <option value="+" <?=$val?>>+</option>
<?php ($_POST["operator"] =="*")?$val = "selected":$val = ""; ?>
        <option value="*" <?=$val?>>*</option>
<?php ($_POST["operator"] =="-")?$val = "selected":$val = ""; ?>
        <option value="-" <?=$val?>>-</option>
<?php ($_POST["operator"] =="/")?$val = "selected":$val = ""; ?>
        <option value="/" <?=$val?>>/</option>
</select>

<input type="text" name="num_2" value="<?php echo htmlspecialchars($num_2); ?>"> =
<span><?php echo htmlspecialchars($num_3); ?></span>
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
