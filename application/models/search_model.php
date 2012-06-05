<?php
class Search_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function search_results($lookup_text){
		$query = "select * from ideas where match(idea_title, idea_content) against(?)";
		$query_result = $this->db->query($query, $lookup_text);
		
		if($query_result->num_rows() > 0) {
			foreach ($query_result->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
}

?>