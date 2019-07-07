<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>项目任务信息</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

</head>
<body style="background: #f6f5fa;">

        <!--header-->
        <div class="superCtab">
            <div class="ctab-title clearfix">
                <h3>文章发布</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a>
            </div>
       
                <div class="ctab-Main-title">
                    <ul class="clearfix">                        <li class="cur"><a href="tasklist.php">中心下达任务情况</a></li>
                        <li><a href="taskadd.php">中心下达任务添加</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li> <a href="">xxxx</a></li>
                         <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>

                    </ul>
                </div>
                
                          <div style="width:1100px; margin:20px;">
        <table id="example" class="display defaultTable" style="width:100%; margin:20px; ">
            <thead>
                <tr>
        <th class="t_6">中心内部切块表</th>
        <th class="t_6">中心下达任务书</th>
        <th class="t_6">兴趣小组</th>
        <th class="t_6">小组组长</th>
        <th class="t_6">项目经理</th>
        <th class="t_6">项目部实施计划</th>
        <th class="t_6">相关操作</th>
                                      </tr>
            </thead>
            <?php
    $array = array();
     $coon = mysqli_connect("localhost", "root");
    mysqli_select_db($coon, "xmgl");
    mysqli_set_charset($coon, "utf8");
      $rs='select * from task';
        $r = mysqli_query($coon, $rs);
       while ($obj = mysqli_fetch_object($r)) {
        $array[] = $obj;
    }
   
        ?>

                <?php
  foreach($array as $key=>$values){
?>
                            <tbody>
                               <tr>
    <td class="t_7"><?php echo "{$values->task_table}"; ?></td>
    <td class="t_7"><?php echo "{$values->task_book}";?></td>
    <td class="t_7"><?php echo "{$values->task_group}"; ?></td>
    <td class="t_7"><?php echo "{$values->task_gr_leader}"; ?></td>
    <td class="t_7"><?php echo "{$values->task_gr_pm}";?></td>
    <td class="t_7"><?php echo "{$values->task_plan}"; ?></td>
    <td class="t_7">
      <div class="btn"><a href="taskalter.php?id=<?php echo "{$values->task_id}";?>" class="modify">编辑</a><a href="../admin/taskdelete.php?id=<?php echo "{$values->task_id}"; ?>" 
           onclick="return confirm('是否确认删除?')" class="delete">删除</a></div>  </td>
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