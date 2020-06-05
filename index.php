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

      public function printDetails(){
         echo "<h2>$this->title</h2>
               <p><strong>Title: </strong>$this->original_title</p>
               <p><strong>Original title: </strong>$this->genre</p>
               <p><strong>Starring: </strong>$this->starring</p>
               <p><strong>Original language: </strong>$this->original_language</p>
               <p><strong>Country: </strong>$this->country</p>
               <p><strong>Release year: </strong>$this->release_year</p>
               <p><strong>Running time: </strong>$this->running_time</p>";
      }
   }

   // Instances creation
   $movie1 = new Movie();
   $movie1->title = 'John Wick';
   $movie1->original_title = 'John Wick';
   $movie1->genre = 'Action';
   $movie1->starring = 'Keanu Reeves, Michael Nyqvist, Alfie Allen, Adrianne Palicki, Bridget Moynahan, Dean Winters, Ian McShane, John Leguizamo, Willem Dafoe';
   $movie1->original_language = 'English, Russian';
   $movie1->country = 'United States of America';
   $movie1->release_year = 2014;
   $movie1->running_time = 101;

   $movie2 = new Movie();
   $movie2->title = 'John Wick - Capitolo 2';
   $movie2->original_title = 'John Wick: Chapter 2';
   $movie2->genre = 'Action';
   $movie2->starring = 'Keanu Reeves, Common, Laurence Fishburne, Riccardo Scamarcio, Ruby Rose, Lance Reddick, Peter Stormare, Bridget Moynahan, Franco Nero, John Leguizamo, Ian McShane';
   $movie2->original_language = 'English';
   $movie2->country = 'United States of America';
   $movie2->release_year = 2017;
   $movie2->running_time = 122;

   $movie3 = new Movie();
   $movie3->title = 'John Wick: Capitolo 3 – Parabellum';
   $movie3->original_title = 'John Wick: Chapter 3 – Parabellum';
   $movie3->genre = 'Action';
   $movie3->starring = 'Keanu Reeves, Halle Berry, Laurence Fishburne, Mark Dacascos, Asia Kate Dillon, Lance Reddick, Angelica Huston, Ian McShane';
   $movie3->original_language = 'English';
   $movie3->country = 'United States of America';
   $movie3->release_year = 2019;
   $movie3->running_time = 131;

   // Print Objects
   $movie1->printDetails();
   echo "<strong>Do I have time to see it? </strong> {$movie1->doIHaveTimeToSeeIt(130)}<br><br>";
   $movie2->printDetails();
   echo "<strong>Do I have time to see it? </strong> {$movie2->doIHaveTimeToSeeIt(60)}<br><br>";
   $movie3->printDetails();
   
   /*echo "<strong>Do I have time to see it? </strong> {$movie3->doIHaveTimeToSeeIt(120)}";
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
   echo "<strong>Do I have time to see it? </strong> {$movie3->doIHaveTimeToSeeIt(120)}";*/