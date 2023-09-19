<?php
// CLASSE MOVIE
class Movie
{
    // VARIABILI DI ISTANZA
    public $titolo;
    public $regia;
    public $anno;

    // COSTRUTTORE
    public function __construct($titolo, $regia, $anno)
    {
        $this->titolo = $titolo;
        $this->regia = $regia;
        $this->anno = $anno;
    }
    // METODO STAMPA INFO MOVIE
    public function printInfo()
    {
        echo "Titolo: " . $this->titolo . "<br>";
        echo "Regista: " . $this->regia . "<br>";
        echo "Anno: " . $this->anno . "<br>";
    }
}
// OGGETTI MOVIE
$movie1 = new Movie("Il Signore degli Anelli", "Peter Jackson", 2001);
$movie2 = new Movie("Guardiani della Galassia", "James Gunn", 2014);

// STAMPO INFO MOVIE
echo "Film 1:<br>";
$movie1->printInfo();
echo "<br>";

echo "Film 2:<br>";
$movie2->printInfo();
