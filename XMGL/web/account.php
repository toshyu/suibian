<!DOCTYPE html>
<html class=" js csstransforms3d">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>项目信息</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
  
</head>

<body style="background: #f6f5fa;">
    <!--content S-->
    
        <!--header-->
    
            <div class="ctab-title clearfix">
                <h3>文章发布</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a>
            </div>
                <div class="ctab-Main">                <div class="ctab-Main-title">
                    <ul class="clearfix">
                    <li class="cur"><a href="account_pro.php">项目整体盈亏统计</a></li>
                        <li><a href="proadd.php">分门别类统计</a></li>
                        <li><a href="procut.php?number=<?php echo$row['pro_number'];?>&money=<?php echo $row['account']; ?>">按照科目统计</a></li>
                        <li> <a href="procutlist.php?number=<?php echo $row['pro_number'];?>">三金一费统计</a></li>
                        <li><a href="tasklist.php">xxxx</a></li>
                        <li><a href="taskadd.php">xxxx</a></li>
                        <li><a href="wenzhang_aboutus.html">xxxx</a></li>
                        <li><a href="wenzhang_lianxi.html">xxxx</a></li>
                    </ul>
                </div>
                    <div class="Mian-cont-wrap">
                        <div class="defaultTab-T">
                            <table border="0" cellspacing="0" cellpadding="0" class="defaultTable">
                                <tbody>
                                    <tr>
                                        
                                        <th class="t_1">项目名称</th>
                                        <th class="t_2">项目编号</th>
                                        <th class="t_3">收入</th>
                                        <th class="t_4">支出</th>
                                        <th class="t_5">盈亏</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
//分页的函数
include_once'../sql.php';
 $table='make';
 $check=1;
    @$allNum = allNews($table);
    @$pageSize = 3; //约定没页显示几条信息
    @$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];  
    @$endPage = ceil($allNum/$pageSize); //总页数
    @$array = news($pageNum,$pageSize,$table,$check);
   
    // var_dump($array);
    // echo '<pre>';
    // print_r($array);
    // exit;

      
    ?>
                        <table border="0" cellspacing="0" cellpadding="0" class="defaultTable defaultTable2">                         
<?php
  foreach($array as $key=>$values){
  //       echo "<tr>";
  //       echo "<td>{$values->projectid}</td>";
  //       echo "<td>{$values->pro_number}</td>";
  //       echo "<td>{$values->pro_name}</td>";
  //       echo "<td>{$values->time}</td>";
        
  //       echo "</tr>";
  //   }
 // echo"{$values->makemoney}"-"{$values->allmoney}";
?>                         
 <tbody><tr>
   <td class="t_1"><?php echo "{$values->reproname}"; ?></td>
    <td class="t_2" ><?php echo"{$values->makepronumber}";?></td>
    <td class="t_3" ><?php echo"{$values->makemoney}";?></td>
    <td class="t_4"><?php echo "{$values->allmoney}";?></td>
    <td class="t_5" ><?php echo"{$values->makemoney}"-"{$values->allmoney}"; ?></td>
    </tr> <?php  
 $sql = " select * from make inner join reimburse on make.makepronumber=reimburse.repronumber";
$result = mysql_query($sql);
$znum= mysql_num_rows($result); 

}?>
                            </tbody>
                        </table>


                        <div class="pageSelect">
                            <span>共 <b><?php echo $znum; ?></b> 条 每页 <b>3 </b>条  <?php echo $pageNum; ?>/<?php echo $endPage;?></span>
                            <div class="pageWrap">
                                <a class="pagePre" href="?pageNum=<?php echo $pageNum==1?1:($pageNum-1)?>"><i class="ico-pre">&nbsp;</i></a><a href="?pageNum=1" class="pagenumb">首页</a>

                             <!--    <a href="?pageNum=1" class="pagenumb cur">1</a>
                                <a href="?pageNum=2" class="pagenumb" id="num1">2</a>
                                <a href="?pageNum=3" class="pagenumb" id="num2">3</a> -->
                                 <a href="?pageNum=<?php echo $endPage;?>" class="pagenumb">尾页</a>
                                <a href="?pageNum=<?php echo $pageNum==$endPage?$endPage:($pageNum+1)?>" class="pagenext"><i class="ico-next">&nbsp;</i></a>
                            </div>
                        </div>
                        
</body>
 

</html>