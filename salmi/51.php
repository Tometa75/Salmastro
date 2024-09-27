<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 51 Contro un calunniatore';

    //nona sabato
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
            "Come olivo",
            "verdeggiante è chi si abbandona a Dio."
        );
    }

    $this->antifona[1]=array(
        "Come olivo",
        "verdeggiante è chi si abbandona a Dio."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Perché ti vanti del male,"),
                array('','2',"o prepotente nella tua malizia?"),
                array('','+',"Ordisci insidie ogni giorno;"),
                array('','*',"la tua lingua è come lama affilata,"),
                array('','2',"artefice di inganni.")
            ),
            array(
                array('','+',"Tu preferisci il male al bene,"),
                array('','*',"la menzogna al parlare sincero."),
                array('','2',"Ami ogni parola di rovina, o lingua di impostura."),
                array('','+',"Perciò Dio ti demolirà per sempre,"),
                array('','*',"ti spezzerà e ti strapperà dalla tenda"),
                array('','2',"e ti sradicherà dalla terra dei viventi.")
            ),
            array(
                array('','*',"Vedendo, i giusti saran presi da timore"),
                array('','2',"e di lui rideranno:"),
                array('','+',"« Ecco l'uomo che non ha posto in Dio la sua difesa,"),
                array('','*',"ma confidava nella sua grande ricchezza"),
                array('','2',"e si faceva forte dei suoi crimini ».")
            ),
            array(
                array('','+',"Io invece come olivo verdeggiante nella casa di Dio."),
                array('','*',"Mi abbandono alla fedeltà di Dio"),
                array('','2',"ora e per sempre."),
                array('','*',"Voglio renderti grazie in eterno"),
                array('','2',"per quanto hai operato;"),
                array('','*',"spero nel tuo nome, perché è buono,"),
                array('','2',"davanti ai tuoi fedeli.")
            )
        )
    );

}
?>