<?php
class connection_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    // get User from username and password
    public function getUser($username, $password) {
        // Récupération données bdd
        $sql = "SELECT idUser FROM Utilisateur WHERE username = '$username' AND password = '$password';";
        return $this->db->query($sql);
    }
}