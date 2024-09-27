<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 127 La pace di Dio nella famiglia che gli è fedele';

    //nona mercoldì
    $this->antifona[0]=array(
        "Ti benedica",
        "il Signore da Sion: pace su Israele!"
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
            "Ti benedica",
            "il Signore da Sion: pace su Israele!"
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Beato l'uomo che teme il Signore"),
                array('','2',"e cammina nelle sue vie."),
                array('','*',"Vivrai del lavoro delle tue mani,"),
                array('','2',"sarai felice e godrai d'ogni bene.")
            ),
            array(
                array('','*',"La tua sposa come vite feconda"),
                array('','2',"nell'intimità della tua casa;"),
                array('','*',"i tuoi figli come virgulti d'ulivo"),
                array('','2',"intorno alla tua mensa."),
                array('','*',"Così sarà benedetto l'uomo"),
                array('','2',"che teme il Signore.")
            ),
            array(
                array('','+',"Ti benedica il Signore da Sion!"),
                array('','*',"Possa tu vedere la prosperità di Gerusalemme"),
                array('','2',"per tutti i giorni della tua vita."),
                array('','*',"Possa tu vedere i figli dei tuoi figli."),
                array('','2',"Pace su Israele!")
            )
        )
    );

}
?>