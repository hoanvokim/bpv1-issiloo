<?php
/**
 * Created by IntelliJ IDEA.
 * User: hoanvo
 * Date: 9/3/18
 * Time: 8:40 PM
 */

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['active_page'] = 'news';
        $this->load->view('news', $data);
    }

    public function newsContent($slug)
    {
        $data['active_page'] = 'news';
        $this->load->view('news', $data);
    }
}
