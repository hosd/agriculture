<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * date : 18-07-2022
 * author : Karshan
 */

Class International extends CI_Controller {

    public function index() {

        $this->load->model('frontend_model/international_model');

        $data = array();
        $data_header = array();

        $data['overview'] = $this->international_model->get_overview();
        $data['visiting_professors'] = $this->international_model->get_visiting_professors();
        $data['terms_of_reference'] = $this->international_model->get_terms_of_reference();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/international/overview_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function current_foreign_students() {

        $this->load->model('frontend_model/international_model');

        $data = array();
        $data_header = array();

        $data['foreign_students'] = $this->international_model->get_current_foreign_students();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/international/current_foreign_students_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
       
    }

    public function info_for_foreign_students(){
        $this->load->model('frontend_model/international_model');

        $data = array();
        $data_header = array();

        $data['foreign_students_info'] = $this->international_model->get_info_for_foreign_students();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/international/info_for_foreign_students_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
    }

    public function opportunities_study_abroad(){
        $this->load->model('frontend_model/international_model');

        $data = array();
        $data_header = array();

        $data['study_abroad'] = $this->international_model->get_opportunities_study_abroad();
        $data['testimonials'] = $this->international_model->get_testimonials();
        // var_dump($data);exit();

        $this->load->view('frontendview/inner_header_view',$data_header);
        $this->load->view('frontendview/international/opportunities_study_abroad_view',$data);
        $this->load->view('frontendview/footer_view', $data_header);
    }
    
}

?>
