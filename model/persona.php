<?php
    class Persona {
        private $nombre;
        protected $edad;

        public function __construct($nombre, $edad) {
            $this -> nombre = $nombre;
            $this -> edad = $edad;
        }
        //se crean los metodos get y set
        public function getNombre() {
            return $this -> nombre;
        }
        public function setNombre($nombre) {
            $this -> nombre = $nombre;
        }
        public function getEdad() {
            return $this -> edad;
        }
        public function setEdad($edad) {
            $this -> edad = $edad;
        }
        private function saludar() {
            echo "Hola, mi nombre es: " .$this -> nombre;
        }
    }
?>