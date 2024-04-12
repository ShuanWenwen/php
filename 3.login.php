<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) #if else 判斷登入是否成功，判斷&& (and) 或 || (or)
        echo "登入成功"; #帳號和密碼是否符合特定條件
    else
        echo "登入失敗";
?>
