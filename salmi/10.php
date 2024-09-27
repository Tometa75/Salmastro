<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 10 Nel Signore è la fiducia del giusto';

    //nona venerdì
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
            "Giusto",
            "è il Signore: in lui è il mio rifugio."
        );
    }

    $this->antifona[1]=array(
        "Giusto",
        "è il Signore: in lui è il mio rifugio."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Nel Signore mi sono rifugiato, come potete dirmi:"),
                array('','2'," « Fuggi come un passero verso il monte »?")
            ),
            array(
                array('','+',"Ecco, gli empi tendono l'arco,"),
                array('','*',"aggiustano la freccia sulla corda"),
                array('','2',"per colpire nel buio i retti di cuore."),
                array('','*',"Quando sono scosse le fondamenta,"),
                array('','2',"il giusto che cosa può fare?")
            ),
            array(
                array('','*',"Ma il Signore nel tempio santo,"),
                array('','2',"il Signore ha il trono nei cieli."),
                array('','*',"I suoi occhi sono aperti sul mondo,"),
                array('','2',"le sua pupille scrutano ogni uomo.")
            ),
            array(
                array('','*',"Il Signore scruta giusti ed empi,"),
                array('','2',"egli odia chi ama la violenza."),
                array('','*',"Farà piovere sugli empi brace, fuoco e zolfo,"),
                array('','2',"vento bruciante toccherà loro in sorte.")
            ),
            array(
                array('','*',"Giusto è il Signore, ama le cose giuste;"),
                array('','2',"gli uomini retti vedranno il suo volto.")
            )
        )
    );

}
?>