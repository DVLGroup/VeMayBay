<?php
/**
 * 
 */
class chonchuyenbay_model extends Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function fillCombo1()
	{
		$result = $this->db->select("select * from san_bay");
		foreach ($result as $items) {
			if($items['san_bay_code']=='SGN')
			{
				echo "<option selected='selected' value='".$items['san_bay_code']."'>".$items['diadiem']." (SB.".$items['name'].")</option>";
			}
			else {
				echo "<option value='".$items['san_bay_code']."'>".$items['diadiem']." (SB.".$items['name'].")</option>";	
			}
			
		}
	}
	function fillCombo2()
	{
		$result = $this->db->select("select * from san_bay");
		foreach ($result as $items) {
			if($items['san_bay_code']=='HAN')
			{
				echo "<option selected='selected' value='".$items['san_bay_code']."'>".$items['diadiem']." (SB.".$items['name'].")</option>";
			}
			else {
				echo "<option value='".$items['san_bay_code']."'>".$items['diadiem']." (SB.".$items['name'].")</option>";	
			}
			
		}
	}
}
