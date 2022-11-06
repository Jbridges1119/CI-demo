<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Jobs_model extends CI_Model 
{
    public function add_job($jobs_data)
    {
			$this->db->insert('jobs',$jobs_data);
			
	
    }                        
    public function delete_job($job_data)
		{
			$this->db->delete('jobs', ['j_id' => $job_data['j_id']]);
			
		}                    
}


/* End of file Jobs_model.php and path \application\models\Jobs_model.php */
