<?php
   /* PHP e OOP
      - Creazione di una classe ‘Movie’
      - Dichiarazione delle proprietà della classe
      - Dichiarazione del costruttore
      - Dichiarazione di almeno un metodo
      - Fare poi degli esempi di utilizzo della classe istanziando almeno due oggetti e stampando a schermo il valore delle proprietà
   */

   // Class creation
   class Movie {
      // Properties
      public $title;
      public $original_title;
      public $genre;
      public $starring;
      public $original_language;
      public $country;
      public $release_year;
      public $running_time;
      
      // Methods
      public function doIHaveTimeToSeeIt($availableMinutes){
         $canISeeIt = 'Nope';
         
         if ( $availableMinutes >= $this->running_time){
            $canISeeIt = 'Yeah';
         }

         return $canISeeIt;
      }

      // Constructor
      public function __construct($title, $original_title, $genre, $starring, $original_language, $country, $release_year, $running_time){
         $this->title = $title;
         $this->original_title = $original_title;
         $this->genre = $genre;
         $this->starring = $starring;
         $this->original_language = $original_language;
         $this->country = $country;
         $this->release_year = $release_year;
         $this->running_time = $running_time;
      }

      // Destructor
      public function __destruct(){
         echo '<br><br>Distruzione oggetto';
      }
   }

   // Instances creation
   $movie1stars = 'Keanu Reeves, Michael Nyqvist, Alfie Allen, Adrianne Palicki, Bridget Moynahan, Dean Winters, Ian McShane, John Leguizamo, Willem Dafoe';
   $movie2stars = 'Keanu Reeves, Common, Laurence Fishburne, Riccardo Scamarcio, Ruby Rose, Lance Reddick, Peter Stormare, Bridget Moynahan, Franco Nero, John Leguizamo, Ian McShane';
   $movie3stars = 'Keanu Reeves, Halle Berry, Laurence Fishburne, Mark Dacascos, Asia Kate Dillon, Lance Reddick, Angelica Huston, Ian McShane';
   
   $movie1 = new Movie('John Wick', 'John Wick', 'Action', $movie1stars, 'English, Russian', 'United States of America', 2014, 101);
   $movie2 = new Movie('John Wick - Capitolo 2', 'John Wick: Chapter 2', 'Action', $movie2stars, 'English', 'United States of America', 2017, 122);
   $movie3 = new Movie('John Wick: Capitolo 3 – Parabellum', 'John Wick: Chapter 3 – Parabellum', 'Action', $movie3stars, 'English', 'United States of America', 2019, 131);

   // Print Objects
   echo "<strong>Title: </strong> $movie1->title <br>";
   echo "<strong>Original title: </strong> $fmovie->original_title <br>";
   echo "<strong>Genre: </strong> $movie1->genre <br>";
   echo "<strong>Starring: </strong> $movie1->starring<br>";
   echo "<strong>Original language: </strong> $movie1->original_language <br>";
   echo "<strong>Country: </strong> $movie1->country <br>";
   echo "<strong>Release Year: </strong> $movie1->release_year <br>";
   echo "<strong>Running time: </strong> $movie1->running_time minutes<br>";
   echo "<strong>Do I have time to see it? </strong> {$movie1->doIHaveTimeToSeeIt(130)}<br><br>";

   echo "<strong>Title: </strong> $movie2->title <br>";
   echo "<strong>Original title: </strong> $movie2->original_title <br>";
   echo "<strong>Genre: </strong> $movie2->genre <br>";
   echo "<strong>Starring: </strong> $movie2->starring<br>";
   echo "<strong>Original language: </strong> $movie2->original_language <br>";
   echo "<strong>Country: </strong> $movie2->country <br>";
   echo "<strong>Release Year: </strong> $movie2->release_year <br>";
   echo "<strong>Running time: </strong> $movie2->running_time minutes<br>";
   echo "<strong>Do I have time to see it? </strong> {$movie2->doIHaveTimeToSeeIt(60)}<br><br>";

   echo "<strong>Title: </strong> $movie3->title <br>";
   echo "<strong>Original title: </strong> $movie3->original_title <br>";
   echo "<strong>Genre: </strong> $movie3->genre <br>";
   echo "<strong>Starring: </strong> $movie3->starring<br>";
   echo "<strong>Original language: </strong> $movie3->original_language <br>";
   echo "<strong>Country: </strong> $movie3->country <br>";
   echo "<strong>Release Year: </strong> $movie3->release_year <br>";
   echo "<strong>Running time: </strong> $movie3->running_time minutes<br>";
   echo "<strong>Do I have time to see it? </strong> {$movie3->doIHaveTimeToSeeIt(120)}";