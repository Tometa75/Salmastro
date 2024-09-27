<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 143 Preghiera del re per la vittoria e per la pace';

    //vespri venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Canterò per te",
            "un canto nuovo, Dio che dai vittoria."
        );
    }

    $this->antifona[1]=array(
        "Canterò per te",
        "un canto nuovo, Dio che dai vittoria."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Benedetto il Signore, mia roccia,"),
                array('','*',"che addestra le mie mani alla guerra,"),
                array('','2',"le mie dita alla battaglia."),
                array('','*',"Mia grazia e mia fortezza,"),
                array('','2',"mio rifugio e mia liberazione,"),
                array('','*',"mio scudo in cui confido,"),
                array('','2',"colui che mi assoggetta i popoli.")
            ),
            array(
                array('','*',"Signore, che cos'è un uomo perché te ne curi?"),
                array('','2',"Un figlio d'uomo perché te ne dia pensiero?"),
                array('','*',"L'uomo è come un soffio,"),
                array('','2',"i suoi giorni come ombra che passa.")
            ),
            array(
                array('','*',"Signore, piega il tuo cielo e scendi,"),
                array('','2',"tocca i monti ed essi fumeranno."),
                array('','*',"Le tue folgori disperdano i nemici,"),
                array('','2',"lancia frecce, sconvolgili.")
            ),
            array(
                array('','+',"Stendi dall'alto la tua mano,"),
                array('','*',"scampami e salvami dalle grandi acque,"),
                array('','2',"dalla mano degli stranieri."),
                array('','*',"La loro bocca dice menzogne"),
                array('','2',"e alzando la destra giurano il falso.")
            ),
            array(
                array('','*',"Mio Dio, ti canterò un canto nuovo,"),
                array('','2',"suonerò per te sull'arpa a dieci corde;"),
                array('','*',"a te, che dai vittoria al tuo consacrato,"),
                array('','2',"che liberi Davide tuo servo.")
            ),
            array(
                array('','*',"Salvami dalla spada iniqua,"),
                array('','2',"liberami dalla mano degli stranieri;"),
                array('','*',"la loro bocca dice menzogne"),
                array('','2',"e la loro destra giura il falso.")
            ),
            array(
                array('','*',"I nostri figli siano come piante"),
                array('','2',"cresciute nella loro giovinezza;"),
                array('','*',"le nostre figlie come colonne d'angolo"),
                array('','2',"nella costruzione del tempio."),
                array('','*',"I nostri granai siano pieni,"),
                array('','2',"trabocchino di frutti di ogni specie;")
            ),
            array(
                array('','+',"siano migliaia i nostri greggi,"),
                array('','*',"a miriadi nelle nostre campagne;"),
                array('','2',"siano carichi i nostri buoi."),
                array('','*',"Nessuna breccia, nessuna incursione,"),
                array('','2',"nessun gemito nelle nostre piazze."),
                array('','*',"Beato il popolo che possiede questi beni:"),
                array('','2',"beato il popolo il cui Dio è il Signore.")
            )
        )
    );

}
?>