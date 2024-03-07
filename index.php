
<!-- 

CONSEGNA 

Definisci una classe ‘Movie’
    - all'interno della classe sono dichiarate delle variabili d'istanza
    - all'interno della classe è definito un costruttore
    - all'interno della classe è definito almeno un metodo

Istanzia almeno due oggetti ‘Movie’ 

Stampali a schermo i valori delle relative proprietà

-->

<?php

class Movie {
    public $title; 
    public $director;
    public $mainActor;
    public $genre;
    public $duration;
    public $rating;
    public $watched;

    function __construct($_title, $_director, $_main_actor, $_genre, $_duration, $_rating, $_watched){
        $this->title=$_title; 
        $this->director=$_director; 
        $this->mainActor=$_main_actor; 
        $this->genre=$_genre; 
        $this->duration=$_duration; 
        $this->rating=$_rating; 
        $this->watched=$_watched; 
    }

    public function getFilm(){
        return "Title: $this->title <br> Director: $this->director <br> Main Actor: $this->mainActor <br> Genre: $this->genre <br> Duration: $this->duration <br> Rating: $this->rating <br>" . ( $this->watched ? 'Yes': 'No');
    }


}

$Hunger_games = new Movie('The Hunger Games','Gary Ross','Jennifer Lawrence', 'Action/Adventure','142 minutes',7.4,true);

$Oppenheimer = new Movie('Oppenheimer','Christopher Nolan','Cillian Murphy', 'Biography/Drama','150 minutes',8.0,false);



?>


<!DOCTYPE html>
<html lang="en" data-bs-theme='dark'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>

    <!-- link of bs css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <header class="p-3">
        <h1>Your Watch List:</h1>
    </header>
    <main class="p-3">
        <div class="mb-3">
            <?php echo $Hunger_games->getFilm() ?>
        </div>
        <div>
            <?php echo $Oppenheimer->getFilm() ?>
        </div>
    </main>
    

    <!-- link of bs js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>