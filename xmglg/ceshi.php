<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>05_object_date</title>
</head>
<body>
     <script type="text/javascript">
         //返回日期时间信息   PHP:date()|time()
         //声明:var d=new Date()
         // 方法: getFullYear()获取四位的年
         // getMonth()获取月份(0-11)
         // getDate()获取天数
         // getDay()获取星期几  getHours(0-23) getMinutes()获取分钟(0-59)   getSeconds() 获取秒(0-59)
         //getMilliSeconds()返回毫秒
         var d=new Date();
         //获取年
         console.log(d.getFullYear());
         //获取月
         console.log(d.getMonth());
         //获取日
         console.log(d.getDate());
         //获取小时
         console.log(d.getHours()).slice(-2);
         //获取分钟
         console.log(d.getMinutes()).slice(-1);
         //获取秒数
         console.log(d.getSeconds()).slice(-1);
         // console.log(d.)
         //判断返回值是否小于10
         var x=d.getDate();
         // if (x<10) {
         //     console.log('0'+x);
         // }
          if (x.toString().length==1) {
              console.log('0'+x);
          }
         function getMyDate() {
             // 1. 获取日期对象
             var d = new Date();

             // 获取年月日时分秒
             var Y = d.getFullYear();
             var month = ['01','02','03','04','05','06','07','08','09','10','11','12'];
             var m = month[d.getMonth()];
             var day = d.getDate();
             if (day < 10) {
                 day = '0'+day;
             }

             var H = d.getHours();
             if (H < 10) {
                 H = '0'+H;
             }

             var i = d.getMinutes();
             if (i < 10) {
                 i = '0'+i;
             }

             var s = d.getSeconds();
             if (s < 10) {
                 s = '0'+s;
             }

             return Y+'-'+m+'-'+day+' '+H+':'+i+':'+s;
         }

         document.write(getMyDate());

         function getMyDate() {
              var d=new Date();
              var Y=d.getFullYear();
              var month=['01','02','03','04','05','06','07','08','09','10','11','12'];
              var m=month[d.getMonth()];

          }
          //getTime() 返回带有毫秒的时间戳 1秒=1000毫秒
         console.log(d.getTime());
          //获取毫秒
         console.log(d.getMilliseconds());
         //自定义函数getMyTime()返回以秒为单位的函数
         function getMyTime() {
             var d=new Date();
             var target=d.getTime().toString().substr(0,10);
             return  parseInt(target);
         }
              console.log(getMyTime());




     </script>
</body>
</html>