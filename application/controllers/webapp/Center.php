<?php
/**
 * Created by IntelliJ IDEA.
 * User: hvo
 * Date: 18.10.18
 * Time: 09:53
 */

class Center extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function dispatcher($slug)
    {
        switch ($slug) {
            case "issiloo":
                $data['active_page'] = 'issiloo';
                $data['slug'] = $slug;
                $this->load->view('issiloo', $data);
                break;
            case "lien-he":
                $data['active_page'] = 'contact';
                $data['slug'] = $slug;
                $this->load->view('contact', $data);
                break;
            case "thanh-tich-hoc-vien":
                $data['active_page'] = 'prize';
                $data['slug'] = $slug;
                $this->load->view('prize', $data);
                break;
            default:
                $this->load->view('404');
        }

    }

    public function search($slug)
    {
        $data['active_page'] = 'search';
        $data['slug'] = $slug;
        $this->load->view('search', $data);
    }
}
