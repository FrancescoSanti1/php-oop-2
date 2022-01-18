<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es. PHP OOP 2</title>
</head>
<body>
    <?php

        class Persona {
            private $nome;
            private $cognome;
            private $dataNascita;

            public function __construct($nome, $cognome) {
                $this -> setNome($nome);
                $this -> setCognome($cognome);
            }

            public function setNome($nome) {
                if(is_string($nome)) {
                    $this -> nome = $nome;
                }
            }
            public function getNome() {
                return $this -> nome;
            }
            public function setCognome($cognome) {
                if(is_string($cognome)) {
                    $this -> cognome = $cognome;
                }
            }
            public function getCognome() {
                return $this -> cognome;
            }
            public function setDataNascita($dataNascita) {
                $this -> dataNascita = $dataNascita;
            }
            public function getDataNascita() {
                return $this -> dataNascita;
            }

            public function printFullPerson() {
                return $this -> getNome() . ' ' . $this -> getCognome() . ': ' . $this -> getDataNascita();
            }

            public function __toString() {
                return $this -> printFullPerson();
            }
        }

        class Employee extends Persona {
            private $stipendio;
            private $dataAssunzione;

            public function __construct($nome, $cognome, $stipendio) {
                parent::__construct($nome, $cognome);
                $this -> setStipendio($stipendio);
            }

            public function setStipendio($stipendio) {
                if(is_numeric($stipendio)) {
                    $this -> stipendio = $stipendio;
                }
            }
            public function getStipendio() {
                return $this -> stipendio;
            }
            public function setDataAssunzione($dataAssunzione) {
                $this -> dataAssunzione = $dataAssunzione;
            }
            public function getDataAssunzione() {
                return $this -> dataAssunzione;
            }

            public function printFullEmployee() {
                return $this -> getNome() . ' ' . $this -> getCognome() . ': ' . $this -> getStipendio() . ' (' . $this -> getDataAssunzione() . ')';
            }

            public function __toString() {
                return $this -> printFullEmployee();
            }
        }

        // Alcuni test
        $persona1 = new Persona("Carlo", "Rossi");
        $persona1 -> setDataNascita("21.02.1962");
        $persona2 = new Persona("Antonio", "Bianchi");
        $persona2 -> setDataNascita("24.05.1973");

        $employee1 = new Employee("Maria", "Verdi", 30000);
        $employee1 -> setDataAssunzione("10.10.2022");
        $employee2 = new Employee("Alberto", "Neri", 25000);
        $employee2 -> setDataAssunzione("15.05.2021");
        $employee2 -> setDataNascita("15.12.1979");
        
        echo "Persone:<br>";
        echo $persona1 . "<br>";
        echo $persona2 . "<br>";
        
        echo "<br>Employee:<br>";
        echo $employee1 . "<br>";
        echo $employee2 . "<br>";
        echo $employee2 . '. Data di nascita: ' . $employee2 -> getDataNascita() . "<br>";
        
    ?>

</body>
</html>