<?php
    session_start();#session儲存在網頁伺服器
    #要讀取/操作session變數之前，需呼叫session_start()，才能夠跨網頁
    if (!isset($_SESSION["counter"])) #counter為變數，其初始化為 1
        $_SESSION["counter"]=1;
    else #counter變數已存在 則+1
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"]; #輸出技術值
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; #重置網頁技術重新計算
?>
