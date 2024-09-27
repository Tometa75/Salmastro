<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 124 Il Signore custodisce il suo popolo';

    //nona martedì
    $this->antifona[0]=array(
        "Chi confida nel Signore",
        "non vacilla, è stabile per sempre."
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
            "Chi confida nel Signore",
            "non vacilla, è stabile per sempre."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Chi confida nel Signore è come il monte Sion:"),
                array('','2',"non vacilla, è stabile per sempre."),
                array('','+',"I monti cingono Gerusalemme:"),
                array('','*',"il Signore è intorno al suo popolo,"),
                array('','2',"ora e sempre.")
            ),
            array(
                array('','*',"Egli non lascerà pesare lo scettro degli empi"),
                array('','2',"sul possesso dei giusti,"),
                array('','*',"perché i giusti non stendano le mani"),
                array('','2',"a compiere il male.")
            ),
            array(
                array('','*',"La tua bontà, Signore, sia con i buoni"),
                array('','2',"e con i retti di cuore."),
                array('','+',"Quelli che vanno per sentieri tortuosi"),
                array('','*',"il Signore li accomuni alla sorte dei malvagi."),
                array('','2',"Pace su Israele!")
            )
        )
    );

}
?>