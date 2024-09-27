<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 65 Inno di grazie in occasione del sacrificio';

    //primi vespri domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Venite",
            "e vedete le opere di Dio, entrate con olocausti nella sua casa."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Acclamate a Dio da tutta la terra,"),
                array('','*',"cantate alla gloria del suo nome,"),
                array('','2',"date a lui splendida lode."),
                array('','*',"Dite a Dio: « Stupende sono le tue opere!"),
                array('','2',"Per la grandezza della tua potenza a te si piegano i tuoi nemici."),
                array('','*',"A te si prostri tutta la terra,"),
                array('','2',"a te canti inni, canti al tuo nome ».")
            ),
            array(
                array('','*',"Venite e vedete le opere di Dio,"),
                array('','2',"mirabile nel suo agire sugli uomini."),
                array('','+',"Egli cambiò il mare in terra ferma,"),
                array('','*',"passarono a piedi il fiume;"),
                array('','2',"per questo in lui esultiamo di gioia."),
                array('','+',"Con la sua forza domina in eterno,"),
                array('','*',"il suo occhio scruta le nazioni;"),
                array('','2',"i ribelli non rialzino la fronte.")
            ),
            array(
                array('','*',"Benedite, popoli, il nostro Dio,"),
                array('','2',"fate risuonare la sua lode;"),
                array('','*',"è lui che salvò la nostra vita"),
                array('','2',"e non lasciò vacillare i nostri passi.")
            ),
            array(
                array('','*',"Dio, tu ci hai messi alla prova;"),
                array('','2',"ci hai passati al crogiolo, come l'argento."),
                array('','*',"Ci hai fatti cadere in un agguato,"),
                array('','2',"hai messo un peso ai nostri fianchi."),
                array('','+',"Hai fatto cavalcare uomini sulle nostre teste;"),
                array('','*',"ci hai fatto passare per il fuoco e l'acqua,"),
                array('','2',"ma poi ci hai dato sollievo.")
            ),
            array(
                array('','*',"Entrerò nella tua casa con olocausti,"),
                array('','2',"a te scioglierò i miei voti,"),
                array('','*',"i voti pronunziati dalle mie labbra,"),
                array('','2',"promessi nel momento dell'angoscia."),
                array('','*',"Ti offrirò pingui olocausti con fragranza di montoni,"),
                array('','2',"immolerò a te buoi e capri."),
            ),
            array(
                array('','*',"Venite, ascoltate, voi tutti che temete Dio,"),
                array('','2',"e narrerò quanto per me ha fatto."),
                array('','*',"A lui ho rivolto il mio grido,"),
                array('','2',"la mia lingua cantò la sua lode.")
            ),
            array(
                array('','*',"Se nel mio cuore avessi cercato il male,"),
                array('','2',"il Signore non mi avrebbe ascoltato."),
                array('','*',"Ma Dio ha ascoltato,"),
                array('','2',"si è fatto attento alla voce della mia preghiera.")
            ),
            array(
                array('','*',"Sia benedetto Dio: non ha respinto la mia preghiera,"),
                array('','2',"non mi ha negato la sua misericordia."),
            )
        )
    );

}
?>