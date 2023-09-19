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
