<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 130 L'infanzia spirituale";

    //nona giovedì
    $this->antifona[0]=array(
        "Come bimbo",
        "in braccio a sua madre si affida a te l'anima mia."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[1]=array(
            "Maria rispose:",
            "che vuol dire il tuo saluto? È turbato il mio spirito. Io sarò la madre del Re, rimanendo intatta nella mia verginità."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[1]=array(
            "I miei occhi",
            "hanno visto la salvezza, che hai preparato di fronte a tutti i popoli."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[1]=array(
            "Siamo saldi",
            "nella prova: nostra forza è la giustizia di Dio."
        );
    }
    else {
        $this->antifona[1]=array(
            "Come bimbo",
            "in braccio a sua madre si affida a te l'anima mia."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, non si inorgoglisce il mio cuore"),
                array('','2',"e non si leva con superbia il mio sguardo;"),
                array('','*',"non vado in cerca di cose grandi,"),
                array('','2',"superiori alle mie forze.")
            ),
            array(
                array('','+',"Io sono tranquillo e sereno"),
                array('','*',"come bimbo svezzato in braccio a sua madre,"),
                array('','2',"come un bimbo svezzato è l'anima mia.")
            ),
            array(
                array('','*',"Speri Israele nel Signore,"),
                array('','2',"ora e sempre.")
            )
        )
    );

}
?>