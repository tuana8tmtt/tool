<?php

    /******************************************
    *      Codeigniter 3 Simple Login         *
    *   Developer  :  rudiliucs1@gmail.com    *
    *        Copyright © 2017 Rudi Liu        *
    *******************************************/

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Dashboard extends CI_Controller {

    public function __Construct() {
        parent::__Construct();
        if(!$this->session->userdata('logged_in')) {
            redirect(base_url());
        }
        

    }
    public function loadHead($title) {
        $data['title'] = $title;
        $this->load->view('frame/header_view', $data);
        $this->load->view('frame/sidebar_nav_view');
        $this->load->view('frame/footer_view'); //load 3 base view
    }

    public function index() {
        $this->loadHead('Dashboard');
        $this->load->view('dashboard');
    }
    public function Schedule() {
        $this->loadHead('Schedule');
        $this->load->view('users/schedule');
    } //load page Schedule
    public function insert() {
        $this->load->model('users/Gmail_fetch');//load module nha

        $this->loadHead('Insert');
        $result['data']=$this->Gmail_fetch->display_records();

        $this->load->view('users/insert' ,$result);
    }//load page Insert

//process
    public function insert_db_gmail() {
        $this->load->model('users/Gmail_insert');//load module nha
        $this->load->model('email/Pass_validate');
        $email = $this->input->post('emailUsr').'@gmail.com';
        $pass = $this->input->post('passEmailUsr') ;
        $Pass_validate = $this->Pass_validate->validate($email,$pass);
        if($Pass_validate == 1){
            $data['emailUsr']= $this->input->post('emailUsr').'@gmail.com';
			$data['passEmailUsr']= $this->input->post('passEmailUsr') ;
            $data['who']= $this->session->userdata('user_id');
            $data['checked']= 1;
            $data['time']= time();


            $insert = $this->Gmail_insert->saverecords($data);
            if($insert['status'] == 'success'){
                $this->session->set_flashdata('mess', $insert['message'] );
            }else {
                $this->session->set_flashdata('mess', $insert['message'] );

            }
        }else {
            $this->session->set_flashdata('mess', $Pass_validate['message'] );
        }
            redirect(base_url().'dashboard/insert');
            
    } // end controller insert gmail 

}

/* End of file */
