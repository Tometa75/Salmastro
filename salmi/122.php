<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 122 La fiducia del popolo è nel Signore';

    //nona martedì
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
            "Pietà di noi,",
            "o Dio: a te è rivolto il nostro sguardo."
        );
    }

    $this->antifona[1]=array(
        "Pietà di noi,",
        "o Dio: a te è rivolto il nostro sguardo."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"A te levo i miei occhi,"),
                array('','2',"a te che abiti nei cieli."),
                array('','*',"Ecco, come gli occhi dei servi alla mano dei loro padroni;"),
                array('','2',"come gli occhi della schiava alla mano della sua padrona,"),
                array('','*',"così i nostri occhi sono rivolti al Signore nostro Dio,"),
                array('','2',"finché abbia pietà di noi.")
            ),
            array(
                array('','*',"Pietà di noi, Signore, pietà di noi,"),
                array('','2',"già troppo ci hanno colmato di scherni,"),
                array('','*',"noi siamo troppo sazi degli scherni dei gaudenti,"),
                array('','2',"del disprezzo dei superbi.")
            )
        )
    );

}
?>