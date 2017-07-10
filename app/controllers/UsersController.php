<?php
class UsersController extends Controller
{
    public function index(){
        $users = (new UsersModel)->selectAll();
        $this->assign('title','所有用户');
        $this->assign('users',$users);
        $this->render();
    }

    public function view($id=0){
        $user = (new UsersModel)->select($id);
        $this->assign('user',$user);
        $this->assign('title','详情');
        $this->render();
    }

    public function about(){
        require APP_PATH.'/libs/StringFormat.php';
        $strfmt = new StringFormat('Hello,I\'m John Malon');
        $callback = function($str,$isup){
            if($isup){
                $str = strtoupper($str);
            }
            return strrev($str);
        };
//        $callback = (object)null;
        echo $strfmt->testcb($callback);
        echo '<br>';
        echo $strfmt->toUpper()->addMark()->toString();
        echo '<br>';
    }
}