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
		$qry = "INSERT INTO t_route VALUES (
0,
'$flightData->flightNo',
'$flightData->flightPOL',
'$flightData->flightPOD',
'$flightData->flightDate',
'$flightData->flightType',
'$flightData->flightAirline',
'$flightData->flightMaxLoad'
)";
		$res = $this->db->query($qry);
		return $res;
	}
}
