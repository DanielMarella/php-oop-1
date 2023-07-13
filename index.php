

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


    public function myMovie(){
        echo $this->title;
        echo $this->vote;
        echo $this->lang;
        echo $this->genre;
    }

}


$transformers = new Movie(' Transformers ', 5, ' IT,ENG ', ' Action ');
var_dump($transformers);



$aceVentura = new Movie(' Ace_Ventura ', 5, ' IT ',' Commedy ');
var_dump($aceVentura);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h3>
    <?php 
        echo $transformers->myMovie();
    ?>
</h3>

<h3>
    <?php 
        echo $aceVentura->myMovie();
    ?>
    
</h3>


</body>
</html>