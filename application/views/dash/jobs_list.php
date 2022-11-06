<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( !$_SESSION['u_name'] ) {
	redirect('home', 'refresh');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
  </head>
  <body>

	<!-- dash nav -->
	<?php $this->load->view('dash/inc/nav'); ?>
	<!-- dash nav -->

	<!-- dash data -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<!-- sidebar -->
				<?php $this->load->view('dash/inc/sidebar'); ?>
				
				<!-- sidebar -->
			</div>
			<div class="col-md-9">
				<table class="table table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php 
					$job_list = $this->db->get('jobs');
					foreach ($job_list ->result() as $job)
					{ ?>
	<tr>
		<td><?php echo $job->j_id; ?></td>
		<td><?php echo $job->j_name; ?></td>
		<td><a href="<?php echo site_url(); ?>jobs/update_job/<?php echo $job->j_id; ?>" class="btn btn-warning btn-block btn-xs">Edit</a></td>
		<td><a href="#" class="btn btn-danger btn-block btn-xs">Delete</a></td>
	</tr>

<?php
					}
	
					?>
				</table>
			</div>
		</div>
	</div>
	<!-- dash data -->


<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

  </body>
</html>
