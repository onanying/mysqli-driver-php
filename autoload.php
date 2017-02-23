<?php

/**
 * 自动载入类文件
 * @author 刘健 <code.liu@qq.com>
 */
spl_autoload_register(function ($class) {
    include str_ireplace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});
