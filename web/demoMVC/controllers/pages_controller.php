<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 22/02/2019
 * Time: 8:39 SA
 */

require_once ('controllers/base_controller.php');

class Pagescontroller extends BaseController{
    function __construct()
    {
        $this->folder = 'pages';
    }

    public function home(){
        $data = array(
            'name'=> 'Long',
            'age'=> 22
        );
        $this->render('home', $data);
    }

    public function error(){
        $this->render('error');
    }
}
