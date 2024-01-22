<?php
    class UsuarioModelo {
        private $db;

        public function __construct() {
            $this->db = new Base;
        }

        public function obtenerUsuarios() {
            $this->db->query("SELECT * FROM usuarios NATURAL JOIN roles");
            return $this->db->registros();
        }
    }