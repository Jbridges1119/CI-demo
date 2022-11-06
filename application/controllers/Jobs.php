<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
				$this->load->model('Jobs_model');
    }

    public function index()
    {
			$this->load->view('dash/add_job');
			
    }

		public function view_jobs(){

			$this->load->view('dash/jobs_list');
			
		}

		public function add_job(){
			if ( $this->input->post('add_job') ){
				$j_name = $this->input->post('j_name');

				//use an array even if one thing - good incase you want to add in future
				$jobs_data = [
					'j_name' => $j_name
				];
	
				$this->Jobs_model->add_job($jobs_data);
	
				redirect('jobs/view_jobs', 'refresh');
			}

			
		}

		public function update_job($j_id){
			$this->load->view('dash/update_job', $j_id);
			
		}

		public function update_process_job( $j_id ) {
			if ( $this->input->post('update_job') ) 
			{
				$j_name = $this->input->post('j_name');

				$job_details = [
					'j_name' => $j_name
				];
				
				$this->db->where('j_id', $j_id);
				$this->db->update('jobs', $job_details);
				redirect('jobs/view_jobs', 'refresh');
								
			}
		}

		public function delete_job($j_id) 
		{
			$jobs_data = [
				'j_id' => $j_id
			];

			$this->Jobs_model->delete_job($jobs_data);
			
			redirect('jobs/view_jobs', 'refresh');
		}
}

/* End of file Jobs.php and path \application\controllers\Jobs.php */
