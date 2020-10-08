<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');

class Home extends CI_Controller {

	public function myHome()
	{
	    $this->load->database();
	    $qry="select * from mytest;";
	    $query = $this->db->query($qry);
//	    foreach ($query->result() as $row)
//	    {
//	        echo $row->id." ";
//	        echo $row->name." ";
//	        echo $row->addr."<br>";
//	    }
		$arr = array('data'=>'success');
		echo(json_encode($arr));
	}
}
