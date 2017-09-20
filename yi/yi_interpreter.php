<?php

// +----------------------------------------------------------------------
// | 翼语言 Yi V1.0
// +----------------------------------------------------------------------
// | Copyright (c) 2017 WindFox https://www.windfox.org.cn/ All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://git.oschina.net/windfox/yi1web/blob/master/LICENSE (GPL 3.0) )
// +----------------------------------------------------------------------
// | Author: Peter Zhuo <petzuo@163.com>
// +----------------------------------------------------------------------

// [ 翼语言解析入口文件 ]

// 读取翼语言支持库
$yi_libs = explode(',',YI_USE_LIB);
// 检查支持库
foreach ($yi_libs as $yilib){
  if(!file_exists('./lib/'.$yilib.'/'.$yilib.'.lib.php')){
    error_msg('找不到支持库 '.$yilib,'支持库 '.$yilib.' 不存在，
  }
}
