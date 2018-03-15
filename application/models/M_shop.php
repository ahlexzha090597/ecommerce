<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_shop extends CI_Model{

	public function getshop()
	{
	
		$sql1 = $this->db->query("SELECT * FROM tbl_shop");
		return $sql1;
	}

	function save($data){
		$this->db->insert('tbl_shop',$data);
	}

	
	function remove($id){
		$this->db->where("id_shop", $id);
		$this->db->delete('tbl_shop');

	}

	function edit($id){
		$this->db->where("id_shop", $id);
		return $this->db->get('tbl_shop');

	}

	function update($id,$data){
		$this->db->where("id_shop", $id);
		$this->db->update('tbl_shop', $data);
	}
	

	

  

 
}





	


	