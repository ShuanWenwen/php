<?php
    session_start(); #使用session_unset() 或者session_destroy() 可刪除SESSION變數
    unset($_SESSION["counter"]);
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";

?>
