 <?php
 //不合格1
//  mysql_connect("localhost","root","")or die(mysql_errno());
// mysql_select_db("xmgl")or die(mysql_errno());
// mysql_query("set names 'utf-8'");

// $sql='select * from project ';
// $result=mysql_query($sql);
// $result1=mysql_fetch_object($result);

// echo json_encode($result1);
// 不合格结束线


  $dsn = "mysql:host=localhost;dbname=xmgl;port=3306";
    $pdo = new PDO($dsn, 'root', '');

    // 2. 根据参数查询行政区划信息
    $sql   = "SELECT * FROM project ";
    $stmt  = $pdo->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // 3. 将PHP的变量转换成json,响应给浏览器端
    echo json_encode($res);
