
<!-- // GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString -->
<?php

class User {
    public $nome;
    public $cognome;
    public $mail;
    public $numero;

    public function __construct($nome, $cognome, $mail, $numero){
        $this -> nome = $nome;
        $this -> cognome = $cognome;
        $this -> mail = $mail;
        $this -> numero = $numero;    
    }
    public function __toString(){
        return "Nome utente: ".$this -> nome ."<br>"
        . "Cognome: ". $this -> cognome . "<br>"
        . "Mail di registrazione: ". $this -> mail ."<br>"
        . "Numero di telefono: " .$this-> numero ."<br>";
    }
}

$user1 = new User("Gabriele", "Pesenti","gabrielepese@gmail.com", "3334354763");
$user2 = new User("Adrian", "Bogdan","iseeyou@gmail.com", "34572625343");

echo $user1 . "<br>" . $user2;



