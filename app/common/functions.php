<?php

function dt_format($dt=null){
//    $dt = $dt?strtotime($dt):time();
//    $dtstr = date('Y',$dt).'年'.date('m',$dt).'月'.date('d',$dt).'日';
//    return $dtstr;
    $dt = new DateTime($dt);
    return $dt->format('Y年m月d日 H:i');
}
