<?php
class Task_model extends CI_Model{
    public function getAllStuddetails(){

        $query = $this->db->get('student');

        if($query){
            return $query->result();
        }
    }

    public function insertStuddet($data){
        $query = $this->db->insert('student', $data);
        if($query){
            return true;
        }
        else
        {
            return false;
        }

    }

    public function getstudDetails($stud_id){
        $this->db->where('stud_id' , $stud_id);
        $query = $this->db->get('student');
        if($query){
            return $query->row();
        }
    }

    public function updateStuddet($data , $stud_id){
        $this->db->where('stud_id' , $stud_id);
        $query = $this->db->update('student', $data);

        if($query){
            return true;
        }
        else
        {
            return false;
        }
    }


    // delet student data
    public function deletSdetail($stud_id){
        $this->db->where('stud_id' , $stud_id);
        $query = $this->db->delete('student');

        if($query){
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>