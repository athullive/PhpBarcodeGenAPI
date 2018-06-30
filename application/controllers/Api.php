<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function index(){
        $this->load->helper('url');
        $this->load->view('home_page');
    }

    public function twoD()
    {
        echo "{test:test, test2:test2}";
    }

    public function threeD()
    {
        echo "{test:test, test2:test2}";
    }


} // Class Api ends.