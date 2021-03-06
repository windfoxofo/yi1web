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

// [ 基础文件 ]

// 配置基础常量
define('YI_VERSION', '1.0');
define('YI_LIB_PATH', __DIR__.'./lib/');
define('YI_LOG_PATH', __DIR__.'../log/');

// 包含必要文件
require_once './yi.cfg.php';
require_once './functions.php';

//获取路径
if(isset($_SERVER['PATH_INFO'])){
  if(get_default_file('/')==''){
      errecho('403');
  }else{
      define('YI_FILEPATH',get_default_file('/'));
  }
}else{
  if(is_dir($_SERVER['PATH_INFO'])){
    if(get_default_file($_SERVER['PATH_INFO'])==''){
      errecho('403');
    }else{
      define('YI_FILEPATH',get_default_file[$_SERVER['PATH_INFO']]);
    }
  }else{
    if(file_exists($_SERVER['PATH_INFO'])){
      define('YI_FILEPATH',$_SERVER['PATH_INFO']);
    }else{
      errecho('404');
    }
  }
}

// 开始解析文件
if(explode('.',YI_FILEPATH)[count(explode('.',YI_FILEPATH))]=='yi'){
  // 解析翼语言文件
  require_once 'yi_interpreter.php';
  
}else if(explode('.',YI_FILEPATH)[count(explode('.',YI_FILEPATH))]=='html' or explode('.',YI_FILEPATH)[count(explode('.',YI_FILEPATH))]=='htm'){
  // 解析HTML文件
  require_once 'html_interpreter.php';
  
}else{
  // 解析其他文件
  require_once 'others_interpreter.php';
  
}
