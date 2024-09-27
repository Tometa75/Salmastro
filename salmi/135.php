<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 135 Inno pasquale';

    //nona domenica
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
            "Tu solo, Signore,",
            "hai compiuto meraviglie: eterna è la sua misericordia"
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate il Signore perché è buono:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lodate il Dio degli dei:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lodate il Signore dei signori:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Egli solo ha compiuto meraviglie:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Ha creato i cieli con sapienza:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Ha stabilito la terra sulle acque:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Ha fatto i grandi luminari:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Il sole per regolare il giorno:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"La luna e le stelle per regolare la notte:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Percosse l'Egitto nei suoi primogeniti:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Da loro liberò Israele:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Con mano potente e braccio teso:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Divise il mar Rosso in due parti:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"In mezzo fece passare Israele:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Travolse il faraone e il suo esercito nel mar Rosso:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Guidò il suo popolo nel deserto:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Percosse grandi sovrani:"),
                array('','2',"eterna è la sua misericordia;"),
                array('','*',"uccise re potenti:"),
                array('','2',"eterna è la sua misericordia;")
            ),
            array(
                array('','*',"Seon, re degli Amorrei:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Og, re di Basan:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Diede in eredità il loro paese:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"in eredità a Israele suo servo:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Nella nostra umiliazione si è ricordato di noi:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"ci ha liberati dai nostri nemici:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Egli dà il cibo ad ogni vivente:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lodate il Dio del cielo:"),
                array('','2',"eterna è la sua misericordia.")
            )
        )
    );

}
?>