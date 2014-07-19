<?php

namespace DreamsDrive;

Class ZhConv
{
    protected static $code = array(
        'Hant' => array('CN','SG'),
        'Hans' => array('HK','TW'),
    );

    public function get($in,$out,$str)
    {
        $new_str = $str;
        foreach(self::$code as $han=>$code){
            if(in_array($in,$code)){
                include('zh_table.inc.php');
                $extra = ${'zh2'.$out};
                foreach($extra as $k=>$v){
                    $new_str = str_replace($k,$v,$new_str);
                }
                foreach(${'zh2'.$han} as $k=>$v){
                    $new_str = str_replace($k,$v,$new_str);
                }
            }
        }

        return $new_str;
    }
}