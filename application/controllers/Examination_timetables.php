<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 12-08-2022
 * author : Ayodhya
 */

Class Examination_timetables extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/academics_model');
        $this->load->model('frontend_model/home_page_model');

        $data = array();
        $data_header = array();

        $data_header['meta'] = 22;

        $data['examination_timetables'] = $this->home_page_model->get_examination_timetables();

        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
        // var_dump($data['former_deans_data']);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/shortcutlinks/examination_timetable_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }	 
}

?>
