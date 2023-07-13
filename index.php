

<!-- è definita una classe ‘Movie’ :
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 

class Movie{
    public $title;
    public $vote;
    public $lang;
    public $genre;

    function __construct(String $title, Int $vote, String $lang, String $genre ){
        $this -> title = $title;
        $this -> vote = $vote;
        $this -> lang = $lang;
        $this -> genre = $genre;
    }


    public function getTitle(){
        return $this->title;
    }

}


$transformers = new Movie('Transformers', 5, 'IT,ENG', 'Action');
echo $transformers->getTitle();
var_dump($transformers);



$aceVentura = new Movie('Ace_Ventura', 5, 'IT','Commedy');
echo $aceVentura->getTitle();
var_dump($aceVentura);
?>