<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 9/3/18
 * Time: 8:40 PM
 */

class Post extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['active_page'] = 'post';
        $this->load->view('post', $data);
    }

    public function postContent($slug)
    {
        $data['active_tab'] = 'post';
        $this->load->view('postcontent', $data);
    }
}
