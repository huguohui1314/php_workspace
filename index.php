<?php
// echo date('Y-m-d G:i:s');
phpinfo();

// date_default_timezone_set ("Asia/Chongqing");
// $a=date("Y");
// $b=date("m");
// $c=date("d");
// $d=date("G");
// $e=date("i");
// $f=date("s");
// echo  $a.'年'.$b.'月'.$c.'日'.$d.'时'.$e.'分'.$f.'秒';
// $servername = "localhost";
// $username = "root";
// $password = "root";
 
// // 创建连接
// $conn = new mysqli($servername, $username, $password);
 
// // 检测连接
// if ($conn->connect_error) {
//     die("连接失败: " . $conn->connect_error);
// } 
// echo "连接成功";


// $conn=odbc_connect('MYSQL','root','root');
// if ($conn)
// {
//     exit("连接失败: " . $conn);
// }

// $sql="SELECT * FROM test";
// $rs=odbc_exec($conn,$sql);

// if (!$rs)
// {
//     exit("SQL 语句错误");
// }
// echo "<table><tr>";
// echo "<th>Companyname</th>";
// echo "<th>Contactname</th></tr>";

// while (odbc_fetch_row($rs))
// {
//     $compname=odbc_result($rs,1);
//     $conname=odbc_result($rs,2);
//     echo "<tr><td>$compname</td>";
//     echo "<td>$conname</td></tr>";
// }
// odbc_close($conn);
// echo "</table>";

// db_con();


// function db_con()
// {
//     $server = '192.168.1.130';
//     $username = 'root'; //数据库用户名
//     $password = 'root';   //数据库密码
//     $database = 'test';     //数据库
//     $con_url = "Driver=MYSQL;Server=$server;Database=$database";
//     //define ...
//     $con = odbc_connect($con_url, $username, $password, SQL_CUR_USE_ODBC);
//     if ($con)
//         return $con;
//     return null;
// }


// $table='test';
// $name='root';
// $password='root';
 
// mysql_query("SET NAMES GBK"); //设置gbk编码
// $conn=odbc_connect($table,$name,$password);//odbc连接数据库
// if (!$conn)
// {
//     exit("连接失败: " . $conn);
// }
// $conn = odbc_connect("DRIVER={MySQL};Server=localhost;Database=test","root", "root");
?>
