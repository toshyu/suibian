<?php
include_once'../sql.php';
session_start();

$code = $_SESSION['code'];

// public function captcha()
//     {
//         $c                = new Captcha;
//         $code             = $c->show();
//         $_SESSION['code'] = $code;
//     }

// if(!empty($_POST['add']))
// {
        $user    = $_POST['user'];
        $pwd     = $_POST['pwd'];
        $captcha=$_POST['captcha'];
if (strtolower($code) != strtolower($captcha)) {
            echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
       echo "<script charset='utf-8' type='text/javascript'>alert('验证码错误');
        location.href='index.html'</script>";
exit;
   }

          $sql="select * from user where username='$user' and password='$pwd'";
        $result=mysql_query($sql);
      $row = mysql_fetch_assoc($result);

     if ($row['username']==$user && $row['password']==$pwd) {
        
         $_SESSION['user'] = $user;
        echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        echo "<script charset='utf-8' type='text/javascript'>alert('登入成功');
            location.href='indexpage.html'</script>";
     }else{ 
       echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
        echo "<script charset='utf-8' type='text/javascript'>alert('登入失败，密码不对');
        location.href='index.html'</script>";
        die(mysql_error());
     }
       
// $dsn='mysql:dbname=xmgl;host=localhost;port=3306';
// $pdo=new PDO($dsn,'root','');
// $sql='INSERT INTO user(username,password,) VALUES (:user,:pwd,)';
// $sql='select * from user where username=:user and password=:pwd';
// $stmt=$pdo->prepare($sql);
// $stmt->bindValue(':username',$user);
// $stmt->bindValue(':pwd',$pwd);
// $arr=$stmt->execute();
//  if ($arr) {
//          $_SESSION['user'] = $user;
//         echo "<meta http-equiv='Content-Type'' content='text/html; charset=utf-8'>";
//         echo "<script charset='utf-8' type='text/javascript'>alert('登入成功');
//             location.href='../indexpage.html'</script>";
        
//      }else{
//      echo "<script type='text/javascript'>alert('登入失败')";
//       die(mysql_error());      
//             "location.href='login.html'</script>";
       
     // }




        //  $args = [
        //     'user' => $user,
        //     'pwd'  => $pwd,
        // ];
 
      
