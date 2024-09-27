<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 53 Invocazione d'aiuto";

    //nona sabato
    $this->antifona[0]=array(
        "Dio",
        "è il mio aiuto, il Signore mi sostiene."
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
            "Dio",
            "è il mio aiuto, il Signore mi sostiene."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Dio, per il tuo nome, salvami,"),
                array('','2',"Per la tua potenza rendimi giustizia."),
                array('','*',"Dio, ascolta la mia preghiera,"),
                array('','2',"porgi l'orecchio alle parole della mia bocca;")
            ),
            array(
                array('','+',"poiché sono insorti contro di me gli arroganti"),
                array('','*',"e i prepotenti insidiano la mia vita,"),
                array('','2',"davanti a sé non pongono Dio."),
                array('','*',"Ecco, Dio è il mio aiuto,"),
                array('','2',"il Signore mi sostiene.")
            ),
            array(
                array('','*',"Fa' ricadere il male sui miei nemici,"),
                array('','2',"nella tua fedeltà disperdili."),
                array('','*',"Di tutto cuore ti offrirò un sacrificio,"),
                array('','2',"Signore, loderò il tuo nome perché è buono;"),
                array('','*',"da ogni angoscia mi hai liberato"),
                array('','2',"e il mio occhio ha sfidato i miei nemici.")
            )
        )
    );

}
?>