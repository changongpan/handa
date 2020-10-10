<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('Access-Control-Allow-Origin: *');

class RouteManage extends CI_Controller {

	public function addflight()
	{
		$postData=file_get_contents("php://input");
		$flightData=json_decode($postData);

//		file_put_contents('abc.log', "name:".$flightData->flightDate.PHP_EOL, FILE_APPEND);

		$this->load->model('Route_model','',true);

		if($this->Route_model->addflight($flightData)){
			$arr = array('data'=>'success');
			echo(json_encode($arr));
		}
//		$arr = array('data'=>'success');
//		echo(json_encode($arr));
	}
}
