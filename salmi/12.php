<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 12 Lamento di un giusto nella prova";

    //nona giovedì
    $this->antifona[0]=array(
        "Gioisca",
        "il mio cuore nella tua salvezza: fino a quando mi nasconderai il tuo volto?"
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
            "Gioisca",
            "il mio cuore nella tua salvezza: fino a quando mi nasconderai il tuo volto?"
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Fino a quando, Signore, continuerai a dimenticarmi?"),
                array('','2',"Fino a quando mi nasconderai il tuo volto?"),
                array('','+',"Fino a quando nell'anima mia proverò affanni,"),
                array('','*',"tristezza nel cuore ogni momento?"),
                array('','2',"Fino a quando su di me trionferà il nemico?")
            ),
            array(
                array('','+',"Guarda, rispondimi, Signore mio Dio,"),
                array('','*',"conserva la luce ai miei occhi,"),
                array('','2',"perché non mi sorprenda il sonno della morte,"),
                array('','*',"perché il mio nemico non dica: « L'ho vinto! »"),
                array('','2',"e non esultino i miei avversari quando vacillo.")
            ),
            array(
                array('','+',"Nella tua misericordia ho confidato."),
                array('','*',"Gioisca il mio cuore nella tua salvezza"),
                array('','2',"e canti al Signore, che mi ha beneficato.")
            )
        )
    );

}
?>