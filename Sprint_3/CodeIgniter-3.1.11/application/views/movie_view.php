<?php
class movie_view{
	public function view(){
		$data = array(
			'title'=>'MyTitle',
			'heading'=>'MyHeading',
			'message'=>'MyMessage'
		);
		$this->load->view('blogview',$data);
	}
}

