<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#建立資料庫連結 mysqli_connect(ip位置,id帳號,pwd密碼,db連結資料庫名稱)
   $result=mysqli_query($conn, "select * from user");#mysqli_query(連結變數, sql命令) 建立變數；查詢sql命令
   #login加上session功能，紀錄登入帳號
   $login=FALSE;
   #mysqli_fetch_array 抓出資料
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "登入成功"; #顯示登入成功， 3 秒後自動重新導向到 "11.bulletin.php" 頁面
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }

  else{
    echo "帳號/密碼 錯誤"; #顯示帳號/密碼 錯誤，3 秒後自動重新導向到 "2.login.html" 頁面
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
