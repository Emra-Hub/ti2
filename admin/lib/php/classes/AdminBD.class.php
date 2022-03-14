<?php

class AdminBD extends Admin {
    private $_db;

    public function __construct($cnx)
    {
        $this->_db = $cnx;
    }

    public function getAdmin($login,$password) {
        try {
            $query = "select * from admin where login = :login and password = :password";
            $_resultset = $this->_db->prepare($query);
            $_resultset->bindValue(':login',$login);
            $_resultset->bindValue(':password',$password);
            $_resultset->execute();
            $retour = $_resultset->fetchAll();
            return $retour;
        }catch (PDOException $e) {
            print "Erreur : ".$e->getMessage();
        }
    }
}
