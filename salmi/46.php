<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 46 Il Signore, re dell'universo";

    //lodi giovedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Cantate",
            "con arte a Dio, inneggiate al re di tutta la terra!"
        );
    }

    $this->antifona[1]=array(
        "Cantate",
        "con arte a Dio, inneggiate al re di tutta la terra!"
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Applaudite, popoli tutti,"),
                array('','2',"acclamate Dio con voci di gioia;"),
                array('','*',"perché terribile è il Signore, l'Altissimo,"),
                array('','2',"re grande su tutta la terra.")
            ),
            array(
                array('','*',"Egli ci ha assoggettati i popoli,"),
                array('','2',"ha messo le nazioni sotto i nostri piedi."),
                array('','*',"La nostra eredità ha scelto per noi,"),
                array('','2',"vanto di Giacobbe suo prediletto.")
            ),
            array(
                array('','*',"Ascende Dio tra le acclamazioni,"),
                array('','2',"il Signore al suono di tromba."),
                array('','*',"Cantate inni a Dio, cantate inni;"),
                array('','2',"cantate inni al nostro re, cantate inni;"),
                array('','*',"perché Dio è re di tutta la terra,"),
                array('','2',"cantate inni con arte.")
            ),
            array(
                array('','*',"Dio regna sui popoli,"),
                array('','2',"Dio siede sul suo trono santo."),
                array('','*',"I capi dei popoli si sono raccolti"),
                array('','2',"con il popolo del Dio di Abramo,"),
                array('','*',"perché di Dio sono i potenti della terra:"),
                array('','2',"egli è l'Altissimo.")
            )
        )
    );

}
?>