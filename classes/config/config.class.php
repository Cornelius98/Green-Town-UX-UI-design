<?php 
namespace init;
use Exception;
    class dbs extends Exception{
        private $server_name;
        private $database_name;
        private $administrator_name;
        private $administrator_password;

        public function __construct(){
            $this->server_name = '127.0.0.1';
            $this->administrator_name = "root";
            $this->administrator_password = "";
            $this->database_name = "mambilima";
        }
        public function mambilimaDBConnection(){
            try {
                $mysqli = new \mysqli($this->server_name,
                                        $this->administrator_name,
                                            $this->administrator_password,
                                                $this->database_name);
                if(!$mysqli) {
                    throw new Exception("Failed To Establishing Connection With Server");
                }
                return $mysqli;
            }
            catch (Exception $e) {
                $e->getMessage();
            }
        }
        public function zumRedisConnection(){
        }
        public function __destruct(){
            $this->mambilimaDBConnection()->close();
        }
    }
?>