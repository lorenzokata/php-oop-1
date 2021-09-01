<!-- create un file index.php in cui:

definire una classe ‘Movie’:
    variabili d'istanza
    costruttore
    almeno un metodo

istanziare due oggetti ‘Movie’
var_dump degli oggetti creati

<?php

class Movie {

    public $title;
    public $year;
    public $genre;
    public $vote;
    public $must_see;
    
    function __construct($_title, $_year, $_genre, $_vote){
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->vote = $_vote;
    }

    public function setMustSee(){
        if ($vote > 9) {
            $this->must_see = true;
        } else {
            $this->must_see = false;
        };
        getMustSee();
    }

    public function getMustSee(){
        return $this->must_see;
    }

}

$tarzan = new Movie("Tarzan", 1999, "Animazione", 9.5);
$tarzan->setMustSee();
$interstellar = new Movie("Interstellar", 2014, "Sci-fi/Avventura", 8.6);
$interstellar->setMustSee();

var_dump($tarzan);
var_dump($interstellar);

?>