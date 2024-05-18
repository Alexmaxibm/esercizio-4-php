<?php
                                         // Esercizi sugli Array Associativi

/* 1. Scrivi un programma PHP che crei un array associativo chiamato $studente
con le seguenti chiavi e valori:
"nome" => "Mario"
"cognome" => "Rossi"
"età" => 20
● Quindi stampa il nome completo dello studente seguito dalla sua età.
● Poi utilizza un ciclo foreach per stampare tutte le chiavi e i valori dell'array
$studente. */
                               
$studente = [
    "nome" => "Mario",
    "cognome" => "Rossi",
    "eta" => 20
];

//echo "Lo studente si chiama {$studente['cognome ']} {$studente['nome ']} e ha {$studente['eta ']} anni.\n";
//echo "\n"; 
echo "Lo studente si chiama: " .$studente["cognome"] ." " . $studente["nome"] ." ". "e ha ". $studente['eta']." " . "anni.\n";
echo "\n"; 


foreach($studente as $key => $element){
    echo "chiave : $key -> : $element \n"; 
    echo "$key : $element .\n";     
}

echo "\n"; 

foreach($studente as $key => $element){
       echo "$key : $element .\n";     
}


echo "\n"; 

                                  // Esercizi per incentivare il problem solving

/* ● Modifica il programma precedente per aggiornare l'età dello studente a 21 e 
stampa di nuovo l'intero array per verificare che la modifica sia stata effettuata
correttamente.
● Aggiungi un nuovo elemento all'array $studente chiamato "corso" con il valore
"Informatica" e stampa l'array aggiornato.
● Rimuovi l'elemento relativo al corso di studio dall'array $studente e stampa
l'array aggiornato.
● Conta il numero di elementi presenti nell'array $studente e stampa il risultato.
● Ordina l'array $studente in base alfabetico, stampa l'array ordinato.*/

$studente["eta"] = 21; //modifico l'eta studente da 20 a 21 anni 
print_r($studente);
echo "\n"; 

$studente["corso"] = "informatica"; // aggiungo un elemento all'array con chiave "corso" cui corrisponde elemento "informatica".
print_r($studente);
echo "\n"; 

unset($studente["corso"]); // con "unset" elimino un elemento dall'array e specifico quale.
print_r($studente);
echo "\n";

$conteggio = count($studente); // con "count" conto gli elementi dell'array creando una variabile, come per le stringhe. 
echo "Gli elementi contenuti nell'array sono" ." " . $conteggio .".";
echo "\n";

ksort($studente); // ksort(): consente l'ordinamento in ordine crescente di array associativi in base alla chiave degli elementi.
print_r($studente);

echo "\n";

                                          //Esercizi con i form

/* 1. Create un form di contatto che deve includere tre campi di input: nome, email e
messaggio. Gli utenti devono compilare tutti e tre i campi e per ogni campo
mancante deve dare un avviso personalizzato all’utente. Se tutti i campi sono
compilati, salutate l’utente */

// vedi form-contatto.html + form-contatto.php 

echo "\n"; 

                                                 // Esercizi con le funzioni
//1. Creare una funzione per determinare se un numero è pari

function pari($numero){
    if($numero % 2 == 0){
         return true; // con "return true" esco dalla funzione avendo ottenuto il risultato, altrimenti verifica la seconda
    }
   return false;
} 

echo "inserisci il valore per verificare se e pari: ";
$val = intval(trim(fgets(STDIN)));
var_dump(pari($val));

if(pari($val)) {
    echo "Il valore inserito e pari";
} else {
    echo "Il valore inserito non è pari";
}

echo "\n"; 


// 2. Creare una funzione per determinare se un numero è positivo

function positivo($numero_positivo){
    if($numero_positivo < 0){
         return true; // con "return true" esco dalla funzione avendo ottenuto il risultato, altrimenti verifica la seconda
    }
   return false;
} 

echo "inserisci il valore per verificare se e positivo: ";
$positivo = intval(trim(fgets(STDIN)));
var_dump(positivo($positivo));

if(pari($positivo)) {
    echo "Il valore inserito e positivo";
} else {
    echo "Il valore inserito non è positivo";
}

echo "\n"; 

// 3. Creare una funzione per verificare se una parola è palindroma

function palindromo($parola){
$parola_inversa = strrev(trim($parola));
    return strtolower(trim($parola)) === strtolower(strrev(trim($parola)));
}

$parola = "  mamma ";

if(palindromo($parola)) {
    echo "la parola inseerita è un palindromo";
} else {
    echo "la parola inserita non è un palindromo";
}
echo "\n"; 

?>

