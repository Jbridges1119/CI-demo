<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Employees_model extends CI_Model 
{
	public function add_employee($employees_data)
	{
		$this->db->insert('employee',$employees_data);
		

	}        
	
	public function update_employee($employees_data, $e_id)
	{
		$this->db->where('e_id', $e_id);
		$this->db->update('employee', $employees_data);
		

	}     

	public function delete_employee($e_id)
	{
		$this->db->delete('employee', ['e_id' => $e_id]);
		
	}

}


/* End of file Employee_model.php and path \application\models\Employee_model.php */
