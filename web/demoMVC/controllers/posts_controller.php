<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 22/02/2019
 * Time: 8:39 SA
 */

require_once('controllers/base_controller.php');
require_once('models/post.php');

class PostsController extends BaseController
{
    function __construct()
    {
        $this->folder = 'posts';
    }

    public function index()
    {
        $posts = Post::all();
        $data = array('posts' => $posts);
        $this->render('index', $data);
    }
}