<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>連接到 mysql | PHP</title>
</head>
<body>
    <h1>連接到 mysql</h1>
    <?php
        echo "測試連結資料庫...";

        //註解:變數 用來設定連線資料 在命令列上可以打 mysql --user="homestead" --password="secret" 來登入
        $host = "localhost";//請看 主機上的 /etc/hosts
        $user = "homestead";//homestead 內建的帳號密碼
        $password = "secret";
        $database = "test";//還需要 use database

        //執行連線到資料庫的動作, 並將回傳的東西存放到 $dbLink 中
        $dbLink = new mysqli($host, $user, $password, $database);//還需要 use database

        //檢查是否連線錯誤
        if($dbLink->connect_error)
        {
//            die("連線錯誤:".$dbLink->connect_error);//物件導向
            die("連線錯誤:".mysqli_connect_error());//程序導向
        }
        else
            echo "連線成功<br>~";

        $sql = "SELECT * FROM students";//要執行的 sql 語法
        $result = $dbLink->query($sql);//叫 mysql 執行

        var_dump($result);//列出除錯用的資訊

        if( $result->num_rows > 0 )//檢查是否有資料
        {
            while( $row = $result->fetch_array() )//將資料取出 列印
            {
                echo "name:".$row["name"].
                     ", gender:".$row["gender"].
                     ", address:".$row["addressArea"].$row["addressDetail"];
            }
        }
        else
            echo "no data";
    ?>
</body>
</html>