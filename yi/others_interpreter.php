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

// [ 其他解析入口文件 ]

// 配置网页头部
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.YI_FILEPATH.'"');
header('Content-Transfer-Encoding: binary');

// 读取文件提供下载
readfile('YI_FILEPATH');
