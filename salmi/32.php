<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 32 Inno alla provvidenza di Dio';

    //vespri lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Cantate al Signore",
            "un canto nuovo, della sua grazia è piena la terra."
        );
    }

    $this->antifona[1]=array(
        "Cantate al Signore",
        "un canto nuovo, della sua grazia è piena la terra."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Esultate, giusti, nel Signore:"),
                array('','2',"ai retti si addice la lode."),
                array('','*',"Lodate il Signore con la cetra,"),
                array('','2',"con l'arpa a dieci corde a lui cantate."),
                array('','*',"Cantate al Signore un canto nuovo,"),
                array('','2',"suonate la cetra con arte e acclamate.")
            ),
            array(
                array('','*',"Poiché retta è la parola del Signore"),
                array('','2',"e fedele ogni sua opera."),
                array('','*',"Egli ama il diritto e la giustizia,"),
                array('','2',"della sua grazia è piena la terra.")
            ),
            array(
                array('','*',"Dalla parola del Signore furono fatti i cieli,"),
                array('','2',"dal soffio della sua bocca ogni loro schiera."),
                array('','*',"Come in un otre raccoglie le acque del mare,"),
                array('','2',"chiude in riserve gli abissi.")
            ),
            array(
                array('','*',"Tema il Signore tutta la terra,"),
                array('','2',"tremino davanti a lui gli abitanti del mondo,"),
                array('','*',"perché egli parla e tutto è fatto,"),
                array('','2',"comanda e tutto esiste.")
            ),
            array(
                array('','*',"Il Signore annulla i disegni delle nazioni,"),
                array('','2',"rende vani i progetti dei popoli."),
                array('','*',"Ma il piano del Signore sussiste per sempre,"),
                array('','2',"i pensieri del suo cuore per tutte le generazioni.")
            ),
            array(
                array('','*',"Beata la nazione il cui Dio è il Signore,"),
                array('','2',"il popolo che si è scelto come erede."),
                array('','*',"Il Signore guarda dal cielo,"),
                array('','2',"egli vede tutti gli uomini.")
            ),
            array(
                array('','*',"Dal luogo della sua dimora"),
                array('','2',"scruta tutti gli abitanti della terra,"),
                array('','*',"lui che, solo, ha plasmato il loro cuore"),
                array('','2',"e comprende tutte le loro opere.")
            ),
            array(
                array('','*',"Il re non si salva per un forte esercito"),
                array('','2',"né il prode per il suo grande vigore."),
                array('','*',"Il cavallo non giova per la vittoria,"),
                array('','2',"con tutta la sua forza non potrà salvare.")
            ),
            array(
                array('','*',"Ecco, l'occhio del Signore veglia su chi lo teme,"),
                array('','2',"su chi spera nella sua grazia,"),
                array('','*',"per liberarlo dalla morte"),
                array('','2',"e nutrirlo in tempo di fame.")
            ),
            array(
                array('','*',"L'anima nostra attende il Signore,"),
                array('','2',"egli è nostro aiuto e nostro scudo."),
                array('','*',"In lui gioisce il nostro cuore"),
                array('','2',"e confidiamo nel suo santo nome.")
            ),
            array(
                array('','*',"Signore, sia su di noi la tua grazia,"),
                array('','2',"perché in te speriamo.")
            )
        )
    );

}
?>