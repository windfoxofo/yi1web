<?php
 
// +----------------------------------------------------------------------
// | 翼语言 Yi V1.0
// +----------------------------------------------------------------------
// | Copyright (c) 2017 WindFox https://www.windfox.org.cn/ All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://git.oschina.net/windfox/Yi/blob/master/LICENSE (GPL 3.0) )
// +----------------------------------------------------------------------
// | Author: Peter Zhuo <petzuo@163.com>
// +----------------------------------------------------------------------

// [ 基础文件 ]

// 配置基础常量
define('YI_VERSION', '1.0');
define('YI_LIB_PATH', __DIR__.'./lib/');
define('YI_LOG_PATH', __DIR__.'../log/');

//获取请求路径
if(is_callable($_SERVER['PATH_INFO'])){
    define('HTTP_PATH', filter_input(INPUT_SERVER, 'PATH_INFO'));
}else{
    for($i=1;$i=100;$i++){
        
    }
}

//设置实际路径