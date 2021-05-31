<h2>LISTA DEI FILM </H2>
<?php 
/**
 * MOVIES
 * Ripassare i primi concetti di classe e di attributi e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 *  - è definita una classe ‘Movie’
 *   => all'interno della classe sono dichiarati degli attributi
 *   => all'interno della classe è definito un costruttore
 *   => all'interno della classe è definito almeno un metodo
 *   - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */

// Creazione della classe
class Movie {
    // Attributi
   public $name; 
   public $age; 
   public $kind;
   public $description;


   // Costruttore
    function __construct($name, $age, $kind, $description) {
      $this->name = $name;
      $this->age = $age;
      $this->kind = $kind;
      $this->description = $description;
  }

   //GetExcerpt
   public function getExcerpt() {
    $sub = substr($this->description, 0 ,255);
    return $sub;
   } 
}


// Istanza 1
$first_movie = new Movie('The Avengers','2012','Fantascienza','Il Tesseract è un antico artefatto in grado di produrre energia illimitata. Un alieno e il suo portavoce The Other intendono appropriarsene. Loki, che intende conquistare la Terra e sottomettere il genere umano, stringe un accordo con i due.Nick Fury, direttore dello S.H.I.E.L.D., raggiunge in un complesso il dottor Erik Selvig, che sta effettuando dei test sul Tesseract, il quale, improvvisamente, apre un varco dimensionale e appare Loki, che impugna uno scettro. Loki uccide gli agenti presenti e compie un incantesimo su Selvig e sull\'agente Clint Barton, mettendoli al suo servizio, per poi fuggire con il Tesseract.');

//var_dump($first_movie);

//Stampa echo $first_movie->getExcerpt();
?>

<h2><?php echo $first_movie->name; ?></h2>
<h2><?php echo $first_movie->age; ?></h2>
<h2><?php echo $first_movie->kind; ?></h2>

<?php
echo '<p> Un breve prezzo della trama : <br>' . $first_movie->getExcerpt() . '</p>';
?>

<?php
// Istanza 2
$second_movie = new Movie('Dune', '2021', 'Avventura', 'In un distante futuro dell\'umanità, il duca Leto Atreides accetta la gestione del pericoloso pianeta di Arrakis, anche noto come Dune, l\'unica fonte della sostanza più preziosa dell\'universo, la spezia, una droga che allunga la vita, fornisce capacità mentali sovrumane e rende possibili i viaggi nello spazio. Nonostante Leto sappia che l\'offerta è parte di una complessa trappola creata dai suoi nemici, decide di partire per Arrakis, portando con sé la sua concubina Bene Gesserit Lady Jessica, il giovane figlio ed erede Paul, e i suoi più fidati consiglieri. Leto prende il controllo di un\'operazione di estrazione della spezia, resa pericolosa dalla presenza di enormi vermi delle sabbie. Un amaro tradimento conduce Paul e Jessica dai Fremen, nativi di Arrakis che vivono nel deserto più profondo.');
//var_dump($second_movie);

//Stampa
?>

<h2><?php echo $second_movie->name; ?></h2>
<h2><?php echo $second_movie->age; ?></h2>
<h2><?php echo $second_movie->kind; ?></h2>

<?php
echo '<p> Un breve prezzo della trama : <br>' . $second_movie->getExcerpt() . '</p>';
?>
