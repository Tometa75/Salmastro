<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 121 Saluto alla città santa di Gerusalemme';

    //nona lunedì
    $this->antifona[0]=array(
        "Su di te",
        "sia pace, Gerusalemme!"
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
            "Su di te",
            "sia pace, Gerusalemme!"
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Quale gioia, quando mi dissero:"),
                array('','2',"« Andremo alla casa del Signore »."),
                array('','*',"E ora i nostri piedi si fermano"),
                array('','2',"alle tue porte, Gerusalemme!"),
                array('','*',"Gerusalemme è costruita"),
                array('','2',"come città salda e compatta.")
            ),
            array(
                array('','+',"Là salgono assieme le tribù, le tribù del Signore,"),
                array('','*',"secondo la legge di Israele,"),
                array('','2',"per lodare il nome del Signore."),
                array('','*',"Là sono posti i seggi del giudizio,"),
                array('','2',"i seggi della casa di Davide.")
            ),
            array(
                array('','*',"Domandate pace per Gerusalemme:"),
                array('','2',"sia pace a coloro che ti amano,"),
                array('','*',"sia pace sulle tue mura,"),
                array('','2',"sicurezza nei tuoi baluardi.")
            ),
            array(
                array('','*',"Per i miei fratelli e i miei amici"),
                array('','2',"io dirò: « Su di te sia pace! »."),
                array('','*',"Per la casa del Signore nostro Dio, "),
                array('','2',"chiederò per te il bene.")
            )
        )
    );

}
?>