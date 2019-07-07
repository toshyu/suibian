<!DOCTYPE html>
<html class=" js csstransforms3d">

<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>项目费用支出</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/page.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>

<body style="background: #f6f5fa;">
    <!--content S-->
    <div class="super-content RightMain" id="RightMain">
        <!--header-->
        <div class="superCtab">
            <div class="ctab-title clearfix">
                <h3>合同报销</h3><a href="javascript:;" class="sp-column"><i class="ico-mng"></i>栏目管理</a>
            </div>
            <div class="ctab-Main">
                <div class="ctab-Main-title">
                    <ul class="clearfix">
                        <li class="cur"><a href="">报销合同列表</a></li>
                        <li><a href="pro_expend_add.php">报销合同添加</a></li>
                        <li><a href="">xxxx</a></li>
                        <li> <a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                        <li><a href="">xxxx</a></li>
                    </ul>
                </div>
                      <div style="width:1100px; margin:20px;">
        <table id="example" class="display defaultTable" style="width:100%; margin:20px; ">
            <thead>
                <tr>

                                        <th class="t_1">报销合同编号</th>
                                        <th class="t_2">报销合同名称</th>
                                        <th class="t_3">报账时间</th>
                                        <th class="t_4">报账人</th>
                                        <th class="t_5">操作菜单</th>
                                             </tr>
            </thead>
                                  <?php
    $array = array();
     $coon = mysqli_connect("localhost", "root");
    mysqli_select_db($coon, "xmgl");
    mysqli_set_charset($coon, "utf8");
      $rs='select * from reimburse';
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
    <td class="t_1"><?php echo "{$values->repronumber}"; ?></td>
    <td class="t_2" ><?php echo "{$values->reproname}";?></td>
    <td class="t_3"><?php echo "{$values->retime}"; ?></td>
    <td class="t_4"><?php echo "{$values->reusername}"; ?></td>
      <td class="t_5"><div class="btn"><a  href="pro_expend_sel.php?id=<?php echo "{$values->reid}";?>" class="Top">查看</a><a href="pro_expend_alter.php?id=<?php echo "{$values->reid}"?>" class="modify">编辑</a><a href="../admin/reimbursedelete.php?id=<?php echo "{$values->reid}" ?>"
           onclick="return confirm('是否确认删除?')" class="delete">删除</a></div></td>
        </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
                           <!--  <div class="pageSelect">
                            <span>共 <b><?php //echo $znum; ?></b> 条 每页 <b>3 </b>条  <?php //echo $pageNum; ?>/<?php//s echo $endPage;?></span>
                            <div class="pageWrap">
                                <a class="pagePre" href="?pageNum=<?php //echo $pageNum==1?1:($pageNum-1)?>"><i class="ico-pre">&nbsp;</i></a><a href="?pageNum=1" class="pagenumb">首页</a>

                                <a href="?pageNum=1" class="pagenumb cur">1</a>
                                <a href="?pageNum=2" class="pagenumb" id="num1">2</a>
                                <a href="?pageNum=3" class="pagenumb" id="num2">3</a>
                                 <a href="?pageNum=<?php// echo $endPage;?>" class="pagenumb">尾页</a>
                                <a href="?pageNum=<?php //echo $pageNum==$endPage?$endPage:($pageNum+1)?>" class="pagenext"><i class="ico-next">&nbsp;</i></a>
                            </div>
                        </div> -->


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
</body>

</html>