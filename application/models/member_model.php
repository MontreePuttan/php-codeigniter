<?php

class Member_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add_member() {
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
    
    public function edit_member($id) {
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
    
    public function del_member($id) {
        $ar = array(
            "member_status" => '0'
        );
        $this->db->where("id", $id);
        $this->db->update("tb_member", $ar);
        redirect("member", "refresh");
        exit();
    }

}

?>