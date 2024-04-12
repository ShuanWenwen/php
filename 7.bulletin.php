<?php
    error_reporting(0); #取消跳出錯誤及警告
    $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#建立資料庫連結 mysqli_connect(ip位置,id帳號,pwd密碼,db連結資料庫名稱)
    $result=mysqli_query($conn, "select * from bulletin");#查詢資料庫變數資料
    echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
    #<table border=2>建立表格及邊線寬度為2
    while ($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo $row["bid"];
        echo "</td><td>";
        echo $row["type"];
        echo "</td><td>"; 
        echo $row["title"];
        echo "</td><td>";
        echo $row["content"]; 
        echo "</td><td>";
        echo $row["time"];
        echo "</td></tr>";
    }
    echo "</table>"
?>
