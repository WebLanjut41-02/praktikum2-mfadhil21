<?php  
	/**
	 * 
	 */
	class M_data extends CI_Model
	{
		
		function ambildata()
		{
			return $this->db->get('karyawan')
		}
	}
?>