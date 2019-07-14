<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

// 获取项目类型
function getProjectType(){
    $result = db("type") -> where(['status' => 1]) -> select();
    return $result;
}
/**
 * 获取委托单位行业
 */
function getUnitIndusty(){
    $result = db("unit_industy") -> where(['status' => 1]) -> select();
    return $result;
}

/**
 * 获取签订部门
 */
function getSign(){
    $result = db("sign") -> where(['status' => 1]) -> select();
    return $result;
}