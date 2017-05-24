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
        echo dt_format();
    }
}