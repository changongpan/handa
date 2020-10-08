<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');

class RouteManage extends CI_Controller {

	public function addflight()
	{
		$postData=file_get_contents("php://input");
		$flightData=json_decode($postData);

		$this->load->model('Route_model','',true);

		if($this->Route_model->addflight($flightData)){
			$arr = array('data'=>'success');
			echo(json_encode($arr));
		}
	}
}
