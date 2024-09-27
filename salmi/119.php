<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 119 Fervido desiderio di pace';

    //nona lunedì
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
            "Signore,",
            "libera la mia vita dalle parole di menzogna."
        );
    }

    $this->antifona[1]=array(
        "Signore,",
        "libera la mia vita dalle parole di menzogna."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Nella mia angoscia ho gridato al Signore"),
                array('','2',"ed egli mi ha risposto."),
                array('','*',"Signore, libera la mia vita dalle labbra di menzogna,"),
                array('','2',"dalla lingua ingannatrice.")
            ),
            array(
                array('','*',"Che ti posso dare, come ripagarti,"),
                array('','2',"lingua ingannatrice?"),
                array('','*',"Frecce acute di un prode,"),
                array('','2',"con carboni di ginepro.")
            ),
            array(
                array('','*',"Me infelice: abito straniero in Mosoch,"),
                array('','2',"dimoro tra le tende di Kedar!"),
                array('','*',"Troppo io ho dimorato"),
                array('','2',"con chi detesta la pace."),
                array('','*',"Io sono per la pace"),
                array('','2',"ma quando ne parlo, essi vogliono la guerra.")
            )
        )
    );

}
?>