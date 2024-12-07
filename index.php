<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

  <div class="container">

    
    <?php

    // Example-01
    echo "<h1>"."Hello,"." "."Welcome to our website"."</h1>";
    
    
    // Example-02
    print "<h1>"."Hello"."<br>";
    
    // Example-03: The  + 15 part will be ignored in the calculation:
    $x = 5 /* +15 */ + 5;
    echo $x ."<br>"; 
   
    

    // Example-04: Checking php version
    echo phpversion()  ."<br>";


    //========= PHP Variables =======//

    // Example-05: 
    $name = "Johora";
    echo "My name is $name" ."<br>";

    // Example-06:
    $y = 5;
    $z = 10;
    echo $y + $z ."<br>";

    // Example-07:
    $age = 32;
    echo var_dump($age) ."<br>";

    // Example-08: 
    $district = "Khulna";
    echo var_dump($district) ."<br>";

    // Example-09:
    $isItTrue = true;
    echo $isItTrue ."<br>";
    echo var_dump($isItTrue) ."<br>";

    // Example-10: 
    echo var_dump(false) ."<br>";

    // Example-11: 
    echo var_dump(100.05) ."<br>";

    // Example-12: 
    echo var_dump([2, 3, 56]) ."<br>";

    // Example-13: 
    echo var_dump(null) ."<br>";

    // Example-14:
    $a = $b = $c = "Fruit";
    echo $a ."<br>";
    echo $b ."<br>";
    echo $c ."<br>";


    //========= PHP Variables Scope ============//

    // Example-15: 
    $banglaMarks = 55;
   // global scope

    function myBanglaMarks(){
      // using banglaMarks inside this function will generate an error
      // echo "<p>My Bangla mark is $banglaMarks</p>"
    }
    myBanglaMarks();
    // echo "<p>My Bangla mark is $banglaMarks</p>"


    // Example-16:
  
    function myEnglishMark(){
      $englishMark = 65; // local scope
      echo "<p>My English mark is $englishMark</p>";
    }
    myEnglishMark();


    // Example-17:
    $mathMark = 90;

    function myMathMark(){
      global $mathMark; // using global keyword
      echo "<p>My Math mark is $mathMark</p>";
    }
    myMathMark();


    // Example-18:

    $m = 100;
    $n = 90;

    function result(){
      $GLOBALS["m"] = $GLOBALS["m"] + $GLOBALS["n"];
      echo $GLOBALS["m"];
    }
    result();
    echo "<br>";


    // Example-19: 

    function useStaticKeyword(){
      static $x = 0;
      echo $x;
      $x++;

    }
    useStaticKeyword();
    echo "<br>";
    useStaticKeyword();
    echo "<br>";
    useStaticKeyword();
    echo "<br>";



    //=========== PHP echo and print ==========/ 
    // Example-20:
    echo "Hello";
    echo "<br>";
    //same as:
    echo("Hello"); 
    echo "<br>";

     // Example-21:
     echo "<h2>PHP is Fun!</h2>";
     echo "Hello world!<br>";
     echo "I'm about to learn PHP!<br>";
     echo "This ", "string ", "was ", "made ", "with multiple parameters.";

    // Example-22: 
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    echo "<h2>$txt1</h2>";
    echo "<p>Study PHP at $txt2</p>";


    ?>

  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>