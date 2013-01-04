<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Seller {

	public $parts_val = 0;
	public $overall = 0;
	public $seller_id;
	public $img = '';
	public $seller_name ="";

	/*public function __construct(){
		$parts_val=0;
		$overall=0;
        $seller_name ='';
    }*/

	function individual($id,$vin){
		
		$this->seller_id = $id;
		$CI =& get_instance();
		$ans = $CI->main_model->get_seller_answers_by_vin($id,$vin);
		$i = $CI->main_model->get_seller_by_id($id);
		if (is_object($i)){
			$this->img = $i->img;
			$this->seller_name = $i->company_name;
		}
		foreach ($ans as $row) {
			$this->parts_val += 1;
			$this->overall += $row->price;
		}

	}
 
    /*function Seller($params) // parts_val, overall, seller_id, seller_name
    {
    	$parts_val = $params['parts_val'];
		$overall = $params['overall'];
		$seller_id = $params['seller_id'];
		$seller_name = $params['seller_name'];
    }*/
}
 
?>