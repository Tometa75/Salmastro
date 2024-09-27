<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 125 Dio nostra gioia e nostra speranza';

    //nona mercoledì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "Maria rispose:",
            "che vuol dire il tuo saluto? È turbato il mio spirito. Io sarò la madre del Re, rimanendo intatta nella mia verginità."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "I miei occhi",
            "hanno visto la salvezza, che hai preparato di fronte a tutti i popoli."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Siamo saldi",
            "nella prova: nostra forza è la giustizia di Dio."
        );
    }
    else {
        $this->antifona[0]=array(
            "Il Signore",
            "è stato grande con noi, ci ha colmati di gioia."
        );
    }

    $this->antifona[1]=array(
        "Il Signore",
        "è stato grande con noi, ci ha colmati di gioia."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Quando il Signore ricondusse i prigionieri di Sion,"),
                array('','2',"ci sembrava di sognare."),
                array('','*',"Allora la nostra bocca si aprì al sorriso,"),
                array('','2',"la nostra lingua si sciolse in canti di gioia.")
            ),
            array(
                array('','*',"Allora si diceva tra i popoli:"),
                array('','2',"« Il Signore ha fatto grandi cose per loro »."),
                array('','*',"Grandi cose ha fatto il Signore per noi,"),
                array('','2',"ci ha colmati di gioia.")
            ),
            array(
                array('','*',"Riconduci, Signore, i nostri prigionieri,"),
                array('','2',"come i torrenti del Negheb."),
                array('','*',"Chi semina nelle lacrime"),
                array('','2',"mieterà con giubilo.")
            ),
            array(
                array('','*',"Nell'andare, se ne va e piange,"),
                array('','2',"portando la semente da gettare,"),
                array('','*',"ma nel tornare, viene con giubilo,"),
                array('','2',"portando i suoi covoni.")
            )
        )
    );

}
?>