<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 86 Gerusalemme madre di tutti i popoli";

    //vespri mercoledì 
    $this->antifona[0]=array(
        "Di te",
        "si dicono cose stupende, città di Dio."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Di te",
            "si dicono cose stupende, città di Dio."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Le sue fondamenta sono sui monti santi;"),
                array('','*',"il Signore ama le porte di Sion"),
                array('','2',"più di tutte le dimore di Giacobbe."),
                array('','*',"Di te si dicono cose stupende,"),
                array('','2',"città di Dio.")
            ),
            array(
                array('','+',"Ricorderò Raab e Babilonia fra quelli che mi conoscono;"),
                array('','*',"ecco Palestina, Tiro ed Etiopia:"),
                array('','2',"tutti là sono nati."),
                array('','*',"Si dirà di Sion: « L'uno e l'altro è nato in essa"),
                array('','2',"e l'Altissimo la tiene salda ».")
            ),
            array(
                array('','*',"Il Signore scriverà nel libro dei popoli:"),
                array('','2',"« Là costui è nato »."),
                array('','*',"E danzando canteranno:"),
                array('','2',"« Sono in te tutte le mie sorgenti ».")
            )
        )
    );

}
?>