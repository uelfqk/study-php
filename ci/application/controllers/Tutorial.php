<?php
    // 코드이그나이터에서 코드를 웹에서 직접 접근하는 경우를 허용하지 않게 해주는 코드
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Tutorial extends CI_Controller {

        public function index() {
            $data = array(
                'title' => 'data: Tutorial::index',
                'content' => 'data: Hello Index'
            );

            $this->load->view('index', $data);
        }

        public function second() {
            $this->load->view('second');
        }
    }
?>