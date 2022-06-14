<?php 



function get_data($table, $primary, $id, $select)
{
	$CI =& get_instance();
	$query = $CI->db->query("select $select from $table where $primary = '$id'")->row_array();
	return $query[$select];

}

function get_data_sum($table, $primary, $id, $select)
{
	$CI =& get_instance();
	$query = $CI->db->query("select sum($select) as $select from $table where $primary = '$id'")->row_array();
	return $query[$select];
	
}