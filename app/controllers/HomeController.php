<?php
class HomeController extends Controller
{
    public function index(){
        $this->assign('title','zhuye');
        $this->render();
    }
}