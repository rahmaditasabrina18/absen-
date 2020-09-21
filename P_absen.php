<?php

    class P_absen extends CI_Model{

       public function get_data()
       {
            return $this->db->get('absen')->result_array();
            
        }

    }
?>
