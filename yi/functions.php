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

// [ 基础函数文件 ]

// errecho(错误码) 输出错误
function errecho($errcode){
  switch($errcode){
    case '400':

      break;
    case '403':

      break;
    case '404':

      break;
    case '405':

      break;
    case '500':

      break;
    default:

      break;
  }
}

//get_default_file(目录) 取某目录的默认文件
function get_default_file($path){
  // 判断$path是否以“/”结尾
  if(substr($path,-1)!='/'){
    $path = $path.'/';
  }
  $files = explode(',',DEFAULT_FILE);
  foreach ($files as $the_file) {
    if(file_exists('../yi/'.$path.$the_file)){
      return $path.$the_file;
      break;
    }else{
      return '';
      break;
    }
  }
}
