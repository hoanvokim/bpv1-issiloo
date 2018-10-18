<?php

/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 18.10.18
 * Time: 09:56
 */
class Program extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function all($slug)
    {
        $data['active_page'] = 'programs';
        $data['slug'] = $slug;
        $this->load->view('programs', $data);
    }

    public function content($slug)
    {
        $data['active_page'] = 'programs';
        $data['slug'] = $slug;
        $this->load->view('programs_content', $data);
    }
}
