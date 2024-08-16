<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="name">
    </form>


</body>

</html>

<?php

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    if($name=='julie'){
        echo "妳好，".$name."!";
    }else{
        echo "請輸入名字";
    }
}

// 處理空格和特殊字符的查詢參數
// echo "<p>你搜尋的字串是" . htmlspecialchars($query)."</p>";
// 使用htmlspecialchars() 處理空格和特殊字符的查詢(輸入)參數 例如空格被轉換為加號+或%20
// 重於處理查詢參數中包含"空格"和其他"不需特別編碼的字符" 轉換由瀏覽器和伺服器自動處理，用戶不需要額外關注
// ex.輸入php admin(有空格) 經過自動處理 echo出來無異

// 處理URL編碼的參數
// echo "<p>你搜尋的字串是" . htmlspecialchars(urldecode($query))."</p>";
// 使用urldecode()解碼這些字符 處理那些可能需要特別URL編碼的字符，例如非ASCII字符或URL中無法直接使用的特殊符號（如!、#、%等)
// 這些字符在URL中通常會被編碼為百分比（%）加上兩個十六進制數字的形式
// 處理包含特殊字符（如非ASCII字符、標點符號等）的查詢參數 這些字符需要特別的URL編碼來"確保在URL中正確傳遞"
// ex.輸入php%20tutorial%20%26%20special%20chars%21 經過urlcode()後 echo php tutorial & special chars!


?>