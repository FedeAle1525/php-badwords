<?php

// Stampo l'Array Associativo con all'interno i paramentri ricevuti dalla chiamata al Server (Query Selector)
var_dump($_GET);

// Creo Variabile con all'interno il Paramentro "paragraph" dentro l'Array Associativo
$text = $_GET["paragraph"];
// Salvo in una Variabile la lunghezza del paragrafo utilizzando una la Funzione "strlen()"
$text_len = strlen($text);
// Salvo in una Variabile il Paramentro "word" dentro Array Associativo
$word_ban = $_GET["word"];
// Salvo in una Variabile il Testo Censurato grazie alla Funzione "str_replace()"
$text_ban = str_replace($word_ban, "***", $text);

?>

<div>

  <!-- Utilizzo TAG <php> per usare il codice dentro HTML -->
  <!-- Utilizzo la Funzione di Stampa "echo" per stampare la Variabile $text   -->
  <!-- Stampo la lunghezza del paragrafo utilizzando il linguaggio php -->
  <?php echo $text ?> ---- (Lunghezza = <?php echo $text_len ?>)

</div>

<div>

  <!-- Stampo il Testo censurato utilizzando il linguaggio php -->
  <?php echo $text_ban ?>

</div>