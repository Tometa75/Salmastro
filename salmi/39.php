<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 39 Ringraziamento e domanda di aiuto';

    //vespri giovedì
    $this->antifona[0]=array(
        "Ecco io vengo,",
        "o Dio, per fare la tua volontà."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Ecco io vengo,",
            "o Dio, per fare la tua volontà."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Ho sperato: ho sperato nel Signore"),
                array('','*',"ed egli su di me si è chinato,"),
                array('','2',"ha dato ascolto al mio grido."),
                array('','*',"Mi ha tratto dalla fossa della morte,"),
                array('','2',"dal fango della palude;"),
                array('','*',"i miei piedi ha stabilito nella roccia,"),
                array('','2',"ha reso sicuri i miei passi.")
            ),
            array(
                array('','*',"Mi ha messo sulla bocca un canto nuovo,"),
                array('','2',"lode al nostro Dio."),
                array('','*',"Molti vedranno e avranno timore"),
                array('','2',"e confideranno nel Signore.")
            ),
            array(
                array('','+',"Beato l'uomo che spera nel Signore"),
                array('','*',"e non si mette dalla parte dei superbi,"),
                array('','2',"né si volge a chi segue la menzogna.")
            ),
            array(
                array('','+',"Quanti prodigi hai fatto, Signore mio Dio,"),
                array('','*',"quali disegni in nostro favore:"),
                array('','2',"nessuno a te si può paragonare."),
                array('','*',"Se li voglio annunziare e proclamare"),
                array('','2',"sono troppi per essere contati.")
            ),
            array(
                array('','*',"Sacrificio e offerta non gradisci,"),
                array('','2',"gli orecchi mi hai aperto."),
                array('','*',"Non hai chiesto olocausto e vittima per la colpa."),
                array('','2',"Allora ho detto: « Ecco, io vengo.")
            ),
            array(
                array('','*',"Sul rotolo del libro di me è scritto"),
                array('','2',"di compiere il tuo volere."),
                array('','*',"Mio Dio, questo io desidero,"),
                array('','2',"la tua legge è nel profondo del mio cuore ».")
            ),
            array(
                array('','*',"Ho annunziato la tua giustizia nella grande assemblea;"),
                array('','2',"vedi, non tengo chiuse le labbra, Signore, tu lo sai."),
                array('','*',"Non ho nascosto la tua giustizia in fondo al cuore,"),
                array('','2',"la tua fedeltà e la tua salvezza ho proclamato."),
                array('','*',"Non ho nascosto la tua grazia"),
                array('','2',"e la tua fedeltà alla grande assemblea.")
            ),
            array(
                array('','*',"Non rifiutarmi, Signore, la tua misericordia,"),
                array('','2',"la tua fedeltà e la tua grazia mi proteggano sempre,"),
                array('','+',"Poiché mi circondano mali senza numero,"),
                array('','*',"le mie colpe mi opprimono"),
                array('','2',"e non posso più vedere.")
            ),
            array(
                array('','*',"Sono più dei capelli del mio capo,"),
                array('','2',"il mio cuore viene meno."),
                array('','*',"Dégnati, Signore, di liberarmi;"),
                array('','2',"accorri, Signore, in mio aiuto.")
            ),
            array(
                array('','*',"Vergogna e confusione"),
                array('','2',"per quanti cercano di togliermi la vita."),
                array('','*',"Retrocedano coperti d'infamia"),
                array('','2',"quelli che godono della mia sventura."),
                array('','*',"Siano presi da tremore e da vergogna"),
                array('','2',"quelli che mi scherniscono.")
            ),
            array(
                array('','+',"Esultino e gioiscano in te quanti ti cercano,"),
                array('','*',"dicano sempre: « Il Signore è grande »"),
                array('','2',"quelli che bramano la tua salvezza.")
            ),
            array(
                array('','*',"Io sono povero e infelice;"),
                array('','2',"di me ha cura il Signore."),
                array('','*',"Tu, mio aiuto e mia liberazione,"),
                array('','2',"mio Dio, non tardare.")
            )
        )
    );

}
?>