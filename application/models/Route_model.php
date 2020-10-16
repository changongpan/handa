<?php

class Route_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}

	public function addflight($flightData)
	{
		$qry = "INSERT INTO t_route VALUES
				(0,
				'$flightData->flightPOL',
				'$flightData->flightPOD',
				'$flightData->flightNo',
				'$flightData->flightDate',
				'$flightData->flightType',
				'$flightData->flightAirline',
				'$flightData->flightMaxLoad'
				)";
		$res = $this->db->query($qry);
		return $res;
	}

	public function getflight(){
		$qry = "SELECT * FROM `t_route`";
		$res = $this->db->query($qry);
		return $res;
	}
}
