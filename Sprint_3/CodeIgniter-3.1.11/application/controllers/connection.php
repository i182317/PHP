<?php
class connection extends CI_Controller {

    public function testLogin($username, $password){
        $this->load->model('reviews_model');
        $connectionTest = $this->connection_model->getLog($username, $password);
        foreach ($connectionTest as $ligne) {
            $connectionValidate = true;
            $idUser = $ligne['idUser'];
        }

        if($connectionTest) {
            $this->load->view('projet_view', $idUser);
        }
        else{
            $this->load->view('connection_view');
        }
    }
}
