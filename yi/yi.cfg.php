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

// [ 用户配置文件 ]

// 公共设置
define('DEFAULT_FILE', 'index.yi,default.yi,index.html,default.html,index.htm,default,htm'); //默认文件顺序，用半角逗号分隔
define('YI_DEBUG', true); //调试模式
define('YI_USE_LIB', 'krnln');

// 错误页设置 (相对于public_html目录，只支持html)
$errpage['400'] = 'errpages/400.html';
$errpage['403'] = 'errpages/403.html';
$errpage['404'] = 'errpages/404.html';
$errpage['405'] = 'errpages/405.html';
$errpage['500'] = 'errpages/500.html';
$errpage['others'] = 'errpages/others.html';
