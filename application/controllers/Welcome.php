<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Mpdf\Mpdf;
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		require_once ('/vendor/autoload.php');

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();
$html = '<h1>Hello, mPDF!</h1>
         <p>This is a simple example of generating a PDF using mPDF.</p>';
		 $mpdf->WriteHTML($html);
		 $mpdf->Output('output.pdf', 'D'); // D: Download, F: Save to file, I: Inline display, S: Return as a string

	}
	public function fetch(){
		$this->load->model('Crud');
		$get=$this->Crud->fetch();
		$this->load->view('header');
		$this->load->view('fetch',['get'=>$get]);
		$this->load->view('footer');
	}
	public function form(){
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}
	public function formadd(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 7000;
		$config['max_width']            = 7000;
		$config['max_height']           = 7000;

		$this->load->library('upload', $config);
		$this->upload->do_upload('file');
          
		
			$this->load->view('header');
			$this->load->view('form');
			$this->load->view('footer');
		  
			// redirect("welcome/fetch");
          
	}
	public function delete($id){
		$this->load->model('Crud');
		$this->Crud->delete($id);
		$this->session->set_userdata('delete',"Delete Data Successfully");
		redirect("welcome/fetch");

	}
	//edit
	public function edit($id){
		$this->load->model('Crud');
		$edit=$this->Crud->edit($id);
		$this->load->view('edit',['edit'=>$edit]);
	}
	// update
	public function update($id){
		$this->load->model('Crud');
		$edit = $this->Crud->edit($id);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 7000;
		$config['max_width'] = 7000;
		$config['max_height'] = 7000;
	
		$this->load->library('upload', $config);
	
		// if ($this->upload->do_upload('file')) {
			$data1 = $this->upload->data();
	
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('textarea', 'Textarea', 'required');
	
			if ($this->form_validation->run() == FALSE) {
				$data['edit'] = $edit;
				$this->load->view('edit', $data);
			} else {
				$data = array(
					'email' => $this->input->post('email'),
					'textarea' => $this->input->post('textarea'),
					'file' => $data1['file_name'],
				);
				$id = $this->input->post('id');
				$this->Crud->update($id, $data);
				$this->session->set_userdata('insert', 'Update Data Successfully');
				redirect('welcome/fetch');
			}
		// } else {
		// 	// File upload failed, handle the error here
		// 	$error = array('error' => $this->upload->display_errors());
		// 	$data['edit'] = $edit;
		// 	$data['upload_error'] = $error;
		// 	$this->load->view('edit', $data);
		// }
	}
	public function pattern(){
		$n=9;
		$count=0;
		$myArray = array(10,20,10,30,20,10,10,30,50);
		sort($myArray);
		print_r($myArray);
		for($i=0;$i<=$n;$i++){			
			if($i < $n - 1 && $myArray[$i] == $myArray[$i + 1]){
				$count++;
				$i++;
			}
		}
		echo $count;

	}
	public function pattern1(){
		$n=5;$k="A";
		for($i = 1; $i<=$n; $i++){
			for($j = 1; $j<=$i; $j++){
				echo $k++;

			}
			echo "<br>";
		}
	}
	public function pattern2(){
		$n = 5;
		$z = 1;
		
		for ($i = 1; $i <= $n; $i++) {
			// Print spaces before stars
			for ($j = $n - 1; $j >= $i; $j--) {
				printf(" ");
			}
		
			// Print stars
			for ($k = 1; $k <= $z; $k++) {
				printf("*");
			}
		
			$z += 2;
			printf("\n");
		}
		
	}	
}
