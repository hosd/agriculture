<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rag_harassment extends CI_Controller {

    function _remap($method, $params = array()) {
        $method_exists = method_exists($this, $method);
        $methodToCall = $method_exists ? $method : 'index';
        $this->$methodToCall($method_exists ? $params : $method);
    }
    public function index() {

        $this->load->model('frontend_model/home_page_model');

        $data = array();

        $data_header['meta'] = 32;

        $data['rag_harassment_data'] = $this->home_page_model->get_rag_harassment_data();
        $data_header['quick_links'] = $this->home_page_model->get_quick_list();
                
		$this->load->view('frontendview/inner_header_view',$data_header);
		$this->load->view('frontendview/shortcutlinks/rag_harassment_view',$data);
		$this->load->view('frontendview/footer_view',$data_header);
		
    }
	 
}
?>