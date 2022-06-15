<?php
    if(!empty($_POST['mail']) && !empty($_POST['message'])){
        // proctection  XSS
        $mail = htmlspecialchars($_POST['mail']); 
        $message = htmlspecialchars($_POST['message']); 
        $name = htmlspecialchars($_POST['name']); 
        $contact = htmlspecialchars($_POST['contact']); 
        $entetes .= "Content-type: text/html; charset=utf-8\n";

        // if ($mail==="" && $message==="" && $name==="" && $contact==="") {
            mail("saib.kafana.kone@gmail.com, teamc500@gmail.com", "Nouveau message de ENTRER->PRENDRE",
            "Nom:" . $name . "<br>" . 
            "Contact:" . $contact . "<br>" . 
            "Email:" . $mail . "<br>" . 
            "Message:". "<div style='background-color: gray; color: #fff; padding: 3em;'>" .$message. "</div>", $entetes);
            header('Location: index.php');
            die();
        // }
        // else{
        //     header('Location: index.php');
        // }
       

    }  
?>