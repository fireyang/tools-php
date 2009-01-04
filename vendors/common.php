<?php
    //产生一个随机文件名
    function proRandName() {
        $tmpStr = "abcdefghijklmnopqrstuvwxyz0123456789";
        srand((double)microtime()*1000000);
        $str = "";
        for ($i=0; $i<8; $i++) {
            $num = rand(0, strlen($tmpStr));
            $str .= $tmpStr[$num];
        }    
        return $str;
    }
    //获取文件的扩展名
    function getFileTypeFromFILES($str) {
        $aryStr = split("\.", $str);
        $ret = strtolower($aryStr[count($aryStr)-1]);
        return $ret;
    }

?>
