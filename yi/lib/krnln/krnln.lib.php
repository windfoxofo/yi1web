<?php

// +----------------------------------------------------------------------
// | 翼语言 Yi V1.0 基础运行支持库
// +----------------------------------------------------------------------
// | Copyright (c) 2017 WindFox https://www.windfox.org.cn/ All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://git.oschina.net/windfox/yi1web/blob/master/LICENSE (GPL 3.0) )
// +----------------------------------------------------------------------
// | Author: Peter Zhuo <petzuo@163.com>
// +----------------------------------------------------------------------

// [ 基础运行支持库 主文件 ]

class lib_krnln {
  // 支持库信息
  public $lib_info = array(
    'libname' => 'krnln', // 支持库代号
    'chinesename' => '基础运行支持库', // 支持库名称
    'version' => '1.0', // 版本
    'yi_earlist_version' => '1.0.0.0000' // 支持的最早的翼语言版本
    'functions' => '标准输出', // 函数列表
    'as_functions' => 'output' // 对应的函数
  )
  // 函数们
  public class lib_functions {
    public function output($things){
      echo $things;
    }
  }
}
