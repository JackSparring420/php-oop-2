    <?php

        class Persona {

            private $nome;
            private $cognome;
            private $dataNascita;

            public function __construct($nome, $cognome) {

                $this -> setNome($nome);
                $this -> setCognome($cognome);
            }
    
            public function getNome() {

                return $this -> nome;
            }
            public function setNome($nome) {
                $this -> nome = $nome;
            }

            public function getCognome() {

                return $this -> cognome;
            }
            public function setCognome($cognome) {
                $this -> cognome = $cognome;
            }

            public function getDataNascita() {

                return $this -> dataNascita;
            }
            public function setDataNascita($dataNascita) {
                $this -> dataNascita = $dataNascita;
            }

            public function printFullPerson() {
    
                return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getDataNascita();
            }

            public function __toString() {
    
                return $this -> getNome() . " " . $this -> getCognome(). ": " . $this -> getDataNascita();;
            }
            
        }
        
        
        
        class Employee extends Persona {
            private $stipendio;
            private $dataAssunzione;
            
            public function __construct($nome, $cognome, $stipendio) {
                
                parent::__construct($nome, $cognome);

                $this -> setStipendio($stipendio);
            }
            
            public function getStipendio() {
                
                return $this -> stipendio;
            }
            public function setStipendio($stipendio) {
                $this -> stipendio = $stipendio;
            }
            
            public function getDataAssunzione() {
                
                return $this -> dataAssunzione;
            }
            public function setDataAssunzione($dataAssunzione) {
                $this -> dataAssunzione = $dataAssunzione;
            }

            public function printFullEmployee() {
    
                return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getStipendio() . " (" . $this -> getDataAssunzione() . ")";
            }

            public function __toString() {
    
                return $this -> getNome() . " " . $this -> getCognome() . ": " . $this -> getStipendio() . " (" . $this -> getDataAssunzione() . ")";
            }
            
        }
        
        $p1 = new Persona("Emanuele", "Arconte");
        $p1 -> setDataNascita("20/04/1994");
        echo $p1 . "<br>";
        echo $p1 -> printFullPerson(). "<br>";

        $e1 = new Employee("Emanuele", "Arconte", "1500");
        $e1 -> setDataAssunzione("08/09/2021");
        echo $e1 -> printFullEmployee() . "<br>";
        echo $e1 . "<br>";
        ?>





