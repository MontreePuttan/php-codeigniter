<?php

class Member extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
        //$this->lang->load("english");
        
        //$this->lang->load("thailand","thailand");
        
        $lang = $this->session->userdata("lang")==null?"english":$this->session->userdata('lang');
        
        $this->lang->load($lang,$lang);

        $this->load->library('pagination');

        $config['base_url'] = base_url() . "member/index";
        $config['per_page'] = 5;
        $config['total_rows'] = $this->db->count_all('tb_member'); //ห้ามน้อยกว่า หรือ = ,per_page
        //echo $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $data['rs'] = $this->db->select("*")->from("tb_member")->where("member_status='1'")->limit($config['per_page'],$this->uri->segment(3))->get()->result_array();
        $this->load->view("member/index", $data);
    }
    
    public function change($type)
    {
        $this->session->set_userdata('lang',$type);
        redirect("member","refresh");
    }

    public function add() {

        if ($this->input->post("btnsave") != null) {
            $ar = array(
                "member_name" => $this->input->post("member_name"),
                "member_tel" => $this->input->post("member_tel"),
                "member_address" => $this->input->post("addr"),
                "member_status" => '1'
            );

            $this->db->insert("tb_member", $ar);
            redirect("member", "refresh");
            exit();
        }
        $this->load->view("member/add");
    }

    public function edit($id) {

        if ($this->input->post("btnsave") != null) {
            $ar = array(
                "member_name" => $this->input->post("member_name"),
                "member_tel" => $this->input->post("member_tel"),
                "member_address" => $this->input->post("addr")
            );

            $this->db->where("id", $id);
            $this->db->update("tb_member", $ar);
            //die();
            redirect("member", "refresh");
            exit();
        }


        $sql = "select * from tb_member where id = '$id'";
        $rs = $this->db->query($sql);

        if ($rs->num_rows() == 0) {
            $data['rs'] = array();
        } else {
            $data['rs'] = $rs->row_array();
        }

        $this->load->view("member/edit", $data);
    }

    public function del($id) {
        $ar = array(
            "member_status" => '0'
        );
        $this->db->where("id", $id);
        $this->db->update("tb_member", $ar);
        redirect("member", "refresh");
        exit();
    }
    
    public function get_test_helper(){
        $this->load->helper('test');
        
        get_date();
        echo "<br>";
        get_time();
    }

}
