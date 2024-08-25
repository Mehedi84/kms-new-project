<?php
	function remove_dash($query_string)
	{
		$query_string = str_replace('-', ' ', $query_string);
		$query_string = str_replace('_', ' ', $query_string);
		return ucwords($query_string);
	} 


	function removeSpecialCharacters($textdata){
		$data = str_replace("'", "", $textdata);
		$data = str_replace("`", "", $data);
		return $data;
	}
?>