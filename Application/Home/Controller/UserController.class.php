<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\CodeModel;
class UserController extends Controller {
    public function index(){
        $Code = new CodeModel();
        echo "%%<br/>";
        $d['code'] ='34567';
        //$Code->add($d);
        $data = $Code->limit(0,10) ->select();
        var_dump($data);
        //S('name',$data,300);
        //$this->display('/index');
    }
}