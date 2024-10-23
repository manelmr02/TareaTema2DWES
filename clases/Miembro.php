<?php
    abstract class Miembro{
        private $id=0;//tiene que ser un int
        private $nombre;
        private $apellidos;
        private $email;
        private $edad=0;//tiene que ser un int

        public function __construct($id,$nombre,$apellidos,$email,$edad)
        {
            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellidos=$apellidos;
            $this->email=$email;
            $this->edad=$edad;
        }

        public function getId(){return $this->id; }
        private function setId($id){ $this->id=$id; }
        public function getNombre(){return $this->nombre; }
        private function setNombre($nombre){ $this->nombre=$nombre; }
        public function getApellidos(){return $this->apellidos;}
        private function setApellidos($apellidos){$this->apellidos=$apellidos;}
        public function getEmail(){return $this->email;}
        private function setEmail($email){ $this->email=$email; }
        public function getEdad(){return $this->edad;}
        private function setEdad($edad){ $this->edad=$edad;}

        public function __toString()
        {
            return " Nombre: ".$this->getNombre()." ".$this->getApellidos().", Email: ".$this->getEmail();
        }

    }

?>