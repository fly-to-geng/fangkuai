<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index(){
        echo "���黶ӭ��������";
        $this->redirect('Product/index');
    }
}