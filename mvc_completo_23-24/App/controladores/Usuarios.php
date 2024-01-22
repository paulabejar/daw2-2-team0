<?php
    class Usuarios extends Controlador {

        private $usuarioModelo;

        public function __construct() {
            $this->usuarioModelo = $this->modelo("UsuarioModelo");
            $this->datos["menuActivo"] = 1;
        }

        public function index() {
            $this->datos["usuarios"] = $this->usuarioModelo->obtenerUsuarios();
            $this->vista("usuarios/inicio", $this->datos);
        }
    }