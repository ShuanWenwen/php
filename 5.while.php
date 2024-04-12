<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #建立資料庫連結 mysqli_connect(ip位置,id帳號,pwd密碼,db連結資料庫名稱)
   $result=mysqli_query($conn, "select * from user");#查詢資料庫變數資料
     while ($row=mysqli_fetch_array($result)) {
     echo $row["id"]." ".$row["pwd"]."<br>";
   } 
   #查詢結果取得數據，數據儲存在 $row 變數。然後，使用 echo 顯示了該行數據中 "id" 和 "pwd" 欄位的值
   #while (條件) {程式}
   #使用while 迴圈，不斷從查詢結果集中取得下一行數據，直到所有行都被取得
?>
