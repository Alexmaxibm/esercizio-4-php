<?php

// var_dump($_SERVER); Questo commento, se rimosso, permetterebbe di stampare tutte le informazioni contenute nell’array $_SERVER, che contiene informazioni sull’ambiente del server e sulla richiesta HTTP.
// var_dump($_POST); 
//se decommentati, permetterebbero di visualizzare i dati inviati tramite il form (var_dump($_POST);) o il valore specifico del campo ‘name’ (echo $_POST['name'];).
    // echo $_POST['name'];
    
    //sotto verifica se i campi ‘name’, ‘email’ e ‘message’ sono stati impostati (isset) e non sono vuoti (empty). Questo è fatto per assicurarsi che l’utente abbia fornito tutti i dati richiesti prima di procedere.  
    //Se tutti i campi sono presenti e non vuoti, il codice assegna il valore di $_POST['..'] alla variabile $nome e stampa un messaggio di conferma o errore.

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $avviso = "";
        $errore = false; //valore predefinito : non c'è errore!
        if((!isset($_POST['name']) || empty($_POST['name']))) {
            $errore = true;
            $avviso .= "errore nel campo nome";
        }
    
        if((!isset($_POST['email']) || empty($_POST['email']))) {
            $errore = true;
            $avviso .= " errore nel campo email";
        }
    
        if((!isset($_POST['message']) || empty($_POST['message']))) {
            $errore = true;
            $avviso .= " errore nel campo messaggio";
        }
    
        if(!$errore){ // !false diventa true
            echo "Benvenuto utente " .$_POST['name'];
        } else {
            echo $avviso;
        }
    
        // var_dump($errore);
    }



?>