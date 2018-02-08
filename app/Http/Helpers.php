<?php
use App\MaintenanceModel;

 function get_company_logo(){
	$data = MaintenanceModel::where('content_name','=','companylogo')->firstOrFail();
return $data->content_desc;
}

 function get_company_name(){
	$data = MaintenanceModel::where('content_name','=','companyname')->firstOrFail();
return $data->content_desc;
}