<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 98 Santo è il Signore Dio nostro';

    //lodi sabato
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Esaltate",
            "il Signore nostro Dio, perché è santo."
        );
    }

    $this->antifona[1]=array(
        "Esaltate",
        "il Signore nostro Dio, perché è santo."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Il Signore regna, tremino i popoli;"),
                array('','2',"siede sui cherubini, si scuota la terra."),
                array('','*',"Grande è il Signore in Sion,"),
                array('','2',"eccelso sopra tutti i popoli.")
            ),
            array(
                array('','*',"Lodino il tuo nome grande e terribile,"),
                array('','2',"perché è santo.")
            ),
            array(
                array('','+',"Re potente che ami la giustizia,"),
                array('','*',"tu hai stabilito ciò che è retto,"),
                array('','2',"diritto e giustizia tu eserciti in Giacobbe.")
            ),
            array(
                array('','+',"Esaltate il Signore nostro Dio,"),
                array('','*',"prostratevi allo sgabello dei suoi piedi,"),
                array('','2',"perché è santo.")
            ),
            array(
                array('','+',"Mosè e Aronne tra i suoi sacerdoti,"),
                array('','*',"Samuele tra quanti invocano il suo nome:"),
                array('','2',"invocavano il Signore ed egli rispondeva."),
                array('','+',"Parlava loro da una colonna di nubi:"),
                array('','*',"obbedivano ai suoi comandi"),
                array('','2',"e alla legge che aveva loro dato."),
                array('','+',"Signore, Dio nostro, tu li esaudivi,"),
                array('','*',"eri per loro un Dio paziente,"),
                array('','2',"pur castigando i loro peccati.")
            ),
            array(
                array('','+',"Esaltate il Signore nostro Dio,"),
                array('','*',"prostratevi davanti al suo monte santo,"),
                array('','2',"perché santo è il Signore, nostro Dio.")
            )
        )
    );

}
?>