<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 *---------------------------------------------------------------
 * API For Generating Barcodes
 *---------------------------------------------------------------
 *
 * Developed by: Vanishree CA
 * For Master's thesis at University Of Silesia in Katowice
 * 15th of June 2018
 *
 * Used Libraries
 * ---------------------
 * 1. Zend_Barcode(open-source) - https://github.com/zendframework/zend-barcode
 * 2. PHP_QR_Code(open-source) - https://sourceforge.net/projects/phpqrcode
 *
 */

class Api extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('Zend'); //Zend Library for Barcodes(located at project_folder/application/libraries/Zend/)
        $this->load->library('Qrlib'); //Open source (LGPL) library for generating QR Code(https://sourceforge.net/projects/phpqrcode)
    }

    public function authenticator($key){

        $keyHoleId = "2F9EC42E502CA050C87A4562D13417559C12BB5B4A29B22E0FFBD9BC1F322960"; //Should keep it safe like a password.

        if ($key != $keyHoleId){
            exit("You have the wrong key!");

        }
    }

    public function index(){
        $this->load->view('home_page');
    }

    private function set_barcode($code, $type)
    {
        //load in folder Zend
        $this->zend->load('Zend/Barcode');

        $generatedImage = "empty";

        //generate barcode
        if ($type == 'code128'){
            $generatedImage = Zend_Barcode::render('code128', 'image', array('text'=>$code), array());
        }
        if ($type == 'qr'){
            $generatedImage = QRcode::png($code);
        }

        return $generatedImage;
    }




    public function oneD($code = 'SAMPLE TYPE: CODE128', $key = 'wrong_key', $type = 'code128')
    {
        //$this->authenticator($key); //Verifies the key, if verification fails, code exits.

        $barcode = $this->set_barcode($code, $type);

        print_r($barcode);
    }

    public function twoD($code = 'SAMPLE TYPE: QR', $key = 'wrong_key', $type = 'qr')
    {
        //$this->authenticator($key); //Verifies the key, if verification fails, code exits.

        $qrcode = $this->set_barcode($code, $type);

        print_r($qrcode);
    }


} // Class Api ends.