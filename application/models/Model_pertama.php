<?php
defined ('BASEPATH') OR exit ('No direct script acces allowed');

class model_pertama extends CI_Model{

    function getData(){
        return $this->db->get('datashop');
    }
}