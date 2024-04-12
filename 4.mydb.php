<?php
    $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #建立資料庫連結 mysqli_connect(ip位置,id帳號,pwd密碼,db連結資料庫名稱)
    $result=mysqli_query($conn, "select * from user"); #mysqli_query(連結變數, sql命令) 建立變數；查詢sql命令
    $row=mysqli_fetch_array($result); #mysqli_fetch_array() 查詢結果取得了數據，儲存在 $row 變數中。用 echo 顯示了該行數據中 "id" 和 "pwd" 欄位的值。
    echo $row["id"] . " " . $row["pwd"]."<br>"; #.可連結兩個字串
    $row=mysqli_fetch_array($result);
    echo $row["id"] . " " . $row["pwd"];
?>
