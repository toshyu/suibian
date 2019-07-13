layui.define(['jquery', 'form'], function (exports) {
    var $ = layui.jquery, f = layui.form;
    var myobj = {
        // 获取url参数
        GetUrlData: function (name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null) return unescape(r[2]); return null;
        },
        // 格式化时间
        dateForm: function (time,form) {
            form ='yyyy-MM-dd';

            if (!(time.toString().length >= 13)) {
                time = time * 1000
            }
            var date = new Date(time);
            var y = date.getFullYear();     //获取完整的年份 （4位，2017）
            var M = date.getMonth() + 1;    //获取当前月份  （0-11  0代表1月）
            var d = date.getDate();         //获取当前日   （1-31）
            var H = date.getHours();        //获取当前小时数    （0-23）
            var m = date.getMinutes();      //获取当前分钟数（0-59）
            var s = date.getSeconds();      //获取当前秒数（0-59）
            M = M >= 10 ? M : '0' + M;
            d = d >= 10 ? d : '0' + d;
            H = H >= 10 ? H : '0' + H;
            m = m >= 10 ? m : '0' + m;
            s = s >= 10 ? s : '0' + s;
            return form.replace("yyyy", y).replace("MM", M).replace("dd", d).replace("HH", H).replace("mm", m).replace("ss", s);
        },
        // ajax_post
        ajax_post: function (url, data, success_function, err_function) {
            err_function = err_function || function (err) { console.log(err); layer.msg("网络错误") };
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                beforeSend: function () {
                    var index = layer.load(1, {
                        shade: [0.1, '#fff'] //0.1透明度的白色背景
                    });
                },
                success: success_function,
                error: err_function,
                complete: function () {
                    layer.closeAll('loading');
                }

            })
        },
        // ajax_get请求
        ajax_get: function (url, data, success_function, err_function) {
            err_function = err_function || function (err) { console.log(err); layer.msg("网络错误") };
            $.ajax({
                url: url,
                type: 'get',
                data: data,
                beforeSend: function () {
                    var index = layer.load(1, {
                        shade: [0.1, '#fff'] //0.1透明度的白色背景
                    });
                },
                success: success_function,
                error: err_function,
                complete: function () {
                    layer.closeAll('loading');
                }

            })
        },
        // 一级菜单全选反选
        oneCheckbox: function (elem) {
            $(elem).parent().parent().find("input[type='checkbox']").prop("checked", elem.checked);
            f.render();
        },
        // 二级菜单全选反选
        twoCheckbox: function (elem) {
            $(elem).parent().siblings().find("input[type='checkbox']").prop("checked", elem.checked);
            $("input[name=" + $(elem).attr("data-name") + "ListAll]").length == $("input[name=" + $(elem).attr("data-name") + "ListAll]:checked").length ? $(elem).parent().parent().siblings().find("input[name=" + $(elem).attr("data-name") + "All]").prop("checked", true) : $(elem).parent().parent().siblings().find("input[name=" + $(elem).attr("data-name") + "All]").prop("checked", false);
            f.render();
        },
        // 三级菜单全选反选
        threeCheckbox: function (elem) {
            $(elem).parent().parent().find("input[name=" + $(elem).attr("data-name") + "Item]").length == $(elem).parent().parent().find("input[name=" + $(elem).attr("data-name") + "Item]:checked").length ? $(elem).parent().parent().find("input[name='" + $(elem).attr("data-name") + "ListAll']").prop("checked", true) : $(elem).parent().parent().find("input[name='" + $(elem).attr("data-name") + "ListAll']").prop("checked", false);

            $(elem).parent().parent().parent().find("input[name=" + $(elem).attr("data-name") + "Item]").length == $(elem).parent().parent().parent().find("input[name=" + $(elem).attr("data-name") + "Item]:checked").length ? $(elem).parent().parent().parent().find("input[name='" + $(elem).attr("data-name") + "All']").prop("checked", true) : $(elem).parent().parent().parent().find("input[name='" + $(elem).attr("data-name") + "All']").prop("checked", false);
            f.render();
        },
        isInArray: function (arr, value) {
            if (!arr || arr.length <= 0) return false;
            for (var i = 0; i < arr.length; i++) {
                if (value === arr[i]) {
                    return true;
                }
            }
            return false;
        }
    }
    exports("myutil", myobj)
});