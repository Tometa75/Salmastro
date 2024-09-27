<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 128 Rinasce la fiducia nel popolo provato';

    //nona giovedì
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
            "è il Signore: egli spezza il giogo degli empi."
        );
    }

    $this->antifona[1]=array(
        "Giusto",
        "è il Signore: egli spezza il giogo degli empi."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Dalla giovinezza molto mi hanno perseguitato,"),
                array('','2',"- lo dica Israele -"),
                array('','*',"dalla giovinezza molto mi hanno perseguitato,"),
                array('','2',"ma non hanno prevalso.")
            ),
            array(
                array('','*',"Sul mio dorso hanno arato gli aratori,"),
                array('','2',"hanno fatto lunghi solchi."),
                array('','*',"Il Signore è giusto:"),
                array('','2',"ha spezzato il giogo degli empi.")
            ),
            array(
                array('','*',"Siano confusi e volgano le spalle"),
                array('','2',"quanti odiano Sion."),
                array('','*',"Siano come l'erba dei tetti:"),
                array('','2',"prima che sia strappata, dissecca;"),
                array('','*',"non se ne riempie la mano il mietitore,"),
                array('','2',"né il grembo chi raccoglie i covoni.")
            ),
            array(
                array('','+',"I passanti non possono dire:"),
                array('','*',"« La benedizione del Signore sia su di voi,"),
                array('','2',"vi benediciamo nel nome del Signore ».")
            )
        )
    );

}
?>