<!--
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
-->

<?php

$posts = [
  '05/05/2010' => [
    [
      'author' => 'F.C. Inter',
      'text' => 'Vittoria della coppa Italia nella finale con la Roma'
    ],
    [
      'author' => 'A.S. Roma',
      'text' => 'Sconfitta nella finale di coppa Italia contro l Inter'
    ],
  ],
  '16/05/2010' => [
    [
      'author' => 'F.C. Inter',
      'text' => 'Vittoria del campionato italiano a Siena'
    ]
  ],
  '22/05/2010' => [
    [
      'author' => 'F.C. Inter',
      'text' => 'Vittoria della Champions League a Madrid contro il  Bayern Monaco'
    ],
    [
      'author' => 'F.C. Bayern',
      'text' => 'Sconfitta nella finale di Champions League contro l Inter'
    ],
    [
      'author' => 'F.C. Inter',
      'text' => 'Primo triplete nella storia della società e prima squadra a vincerlo in Serie A'
    ],
  ],
];
//var_dump($posts);

//$data = array_keys($posts);
//var_dump($data);


/*
foreach($posts as $post){
  var_dump($post);
}

$autore = [];
$testo = [];
*/

foreach($posts as $key => $value){
  var_dump($key);
  //var_dump($value);

  //$autore[] = $value['author'];
  //$testo[] = $value['text'];

  foreach($value as $post) {

    //var_dump($post);

    echo $post['author'];
    echo $post['text'];
  }

}
//var_dump($autore);
//var_dump($testo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Posts</h1>
  <div>
    <ul>
      <?php
      foreach($posts as $key => $value){
        echo "<h2>{$key}</h2>";
      
        foreach($value as $post) {
      
          //var_dump($post);
      
          echo "<li> <h4>{$post['author']}</h4>
          <p>{$post['text']}</p>";
        }
      
      }
      ?>
    </ul>
  </div>
</body>
</html>