<?php
  
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");#建立資料庫連結 mysqli_connect(ip位置,id帳號,pwd密碼,db連結資料庫名稱)
   $result=mysqli_query($conn, "select * from user");#查詢資料庫變數資料
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE; #$login判斷是否符合登入條件，資料變數符合成功則登入成功，否則帳號/密碼 錯誤
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
       $login=TRUE;
     }
   } 
   if ($login==TRUE)
     echo "登入成功";
  else
     echo "帳號/密碼 錯誤";
?>
