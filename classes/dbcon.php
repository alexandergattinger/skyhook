<?php

class dbcon{
    private $sDb_host;
    private $sDb_user;
    private $sDb_pass;
    private $sDb_db;

    private $oDbLink;

    private $sTocken="58eced343c3270fe214df4bce1c49764bf306b45";

    function __construct(){
        $this -> fDbConnect();
    }

    private function readDbConnectionSettings(){
        try {
            $args = parse_ini_file(".settings",TRUE);
            $sDb_host=$args['DATABASE_HOST'];
            $sDb_user=$args['DATABASE_USER'];
            $sDb_pass=$args['DATABASE_PASS'];
            $sDb_db=$args['DATABASE_DB'];
        } catch(Exception $e){
            echo "Exception: ",$e->getMessage(),"\n";
        }
    }

    private function fDbConnect(){
        $this -> readDbConnectionSettings();
        try {
            $this->oDbLink = mysqli_connect($this->sDb_host, $this->sDb_user,$this->sDb_pass,$this->sDb_db);
        } catch(Exception $e){
            echo "Exception: ",$e->getMessage(),"\n";
        }
    }

    public static function get(){
        
    }
}



 ?>
