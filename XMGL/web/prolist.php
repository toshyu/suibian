<!DOCTYPE html>
<html class=" js csstransforms3d">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>项目信息</title>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

</head>

<body style="background: #f6f5fa;">
    <!--content S-->
    
        <!--header--> 
    
            <div class="superCtab">
            <div class="ctab-title clearfix">
                <h3>文章发布</h3><!-- <div id="box" class="sp-column" >
        <input type="text" name="search" placeholder="请输入关键字">
        <div id="search">搜索</div> 
    </div> -->
   

            </div>
                <div class="ctab-Main">                <div class="ctab-Main-title">
                    <ul class="clearfix">
                        <li class="cur"><a href="prolist.php">项目列表</a></li>
                        <li><a href="proadd.php">项目添加</a></li>
                        <li><a href="procutadd.php">项目切块录入</a></li>
                        <li> <a href="procutlist.php">项目切块列表</a></li>
                         <li><a href="outsceadd.php">项目外协添加</a></li>
                        <li><a href="outscelist.php">项目外协列表</a></li>
                      <!--   <li><a href="tasklist.php">中心下达任务情况</a></li>
                        <li><a href="taskadd.php">中心下达任务添加</a></li> -->
                       
                    </ul>
                </div>
    <div style="width:1100px; margin:20px;">
        <table id="example" class="display defaultTable" style="width:100%; margin:20px; ">
            <thead>
                <tr>
                    <th class="t_1">项目编号</th>
                    <th class="t_2">项目名称</th>
                    <th class="t_3">项目签订时间</th>
                    <th class="t_4">操作菜单</th>
                </tr>
            </thead>
            <?php
    $array = array();
     $coon = mysqli_connect("localhost", "root");
    mysqli_select_db($coon, "xmgl");
    mysqli_set_charset($coon, "utf8");
      $rs='select * from project';
        $r = mysqli_query($coon, $rs);
       while ($obj = mysqli_fetch_object($r)) {
        $array[] = $obj;
    }
   
        ?>
            <tbody>
                <?php
  foreach($array as $key=>$values){
  
?>
                <tr>
                    <td>
                        <?php echo "{$values->pro_number}"; ?>
                    </td>
                    <td>
                        <?php echo"{$values->pro_name}";?>
                    </td>
                    <td>
                        <?php echo "{$values->time}"; echo"<br>";  ?>
                    </td>
                    <td class="t_4">
                        <div class="btn"><a href="prosel.php?id=<?php echo " {$values->projectid}";?>"class="Top">查看</a><a href="proalter.php?id=<?php echo" {$values->projectid}"; ?>" class="modify">编辑</a><a href="../admin/prodelete.php?id=<?php echo" {$values->projectid}" ; ?>"
                                onclick="return confirm('是否确认删除?')" class="delete">删除</a></div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
                        
</body>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
    <script>
   $(document).ready(function() {
        $('#example').dataTable({
"lengthMenu": [5, 10, 20, 50, 100],
            "language": {
                "zeroRecords": "没有检索到数据",
                "lengthMenu": "每页 _MENU_ 条记录",
                "search": "搜索 ",
                "info": "共 _PAGES_ 页，_TOTAL_ 条记录，当前显示 _START_ 到 _END_ 条",
                "paginate": {
                    "previous": "上一页",
                    "next": "下一页",
                     "decimal":",",
                      "thousands":"."
                }

            },
        });
    });
    </script>

</html>