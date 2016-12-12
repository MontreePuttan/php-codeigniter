<?php

class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("member_model");
        /*
         * set auto load model
         * congif>autoload.php>add model name in autoload line
         */
    }

    public function index() {

        $lang = $this->session->userdata("lang") == null ? "english" : $this->session->userdata('lang');

        $this->lang->load($lang, $lang);

        $this->load->library('pagination');

        $config['base_url'] = base_url() . "member/index";
        $config['per_page'] = 5;
        $config['total_rows'] = $this->db->count_all('tb_member'); //ห้ามน้อยกว่า หรือ = ,per_page
        //echo $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $data['rs'] = $this->db->select("*")->from("tb_member")->where("member_status='1'")->limit($config['per_page'], $this->uri->segment(3))->get()->result_array();
        $this->load->view("member/index", $data);
    }

    public function change($type) {
        $this->session->set_userdata('lang', $type);
        redirect("member", "refresh");
    }

    public function add() {
        $this->member_model->add_member();
    }

    public function edit($id) {
        $this->member_model->edit_member($id);
    }

    public function del($id) {
        $this->member_model->del_member($id);
    }

    public function get_test_helper() {
        $this->load->helper('test');

        get_date();
        echo "<br>";
        get_time();
    }

    public function show_model() {
        
    }

}
