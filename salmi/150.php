<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 150 Ogni vivente dia lode al Signore";

    //lodi sabato
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Ogni vivente",
            "dia lode al Signore."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate il Signore nel suo santuario,"),
                array('','2',"lodatelo nel firmamento della sua potenza."),
                array('','*',"Lodatelo per i suoi prodigi,"),
                array('','2',"lodatelo per la sua immensa grandezza.")
            ),
            array(
                array('','*',"Lodatelo con squilli di tromba,"),
                array('','2',"lodatelo con arpa e cetra;"),
                array('','*',"lodatelo con timpani e danze,"),
                array('','2',"lodatelo sulle corde e sui flauti.")
            ),
            array(
                array('','+',"Lodatelo con cembali sonori,"),
                array('','*',"lodatelo con cembali squillanti;"),
                array('','2',"ogni vivente dia lode al Signore.")
            )
        )
    );

}
?>