<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 145 Beato chi spera nel Signore';

    //lodi venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Loderò Dio",
            "finché vivo: beato chi spera in lui."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Loda il Signore, anima mia:"),
                array('','*',"loderò il Signore per tutta la mia vita,"),
                array('','2',"finché vivo canterò inni al mio Dio.")
            ),
            array(
                array('','*',"Non confidate nei potenti,"),
                array('','2',"in un uomo che non può salvare."),
                array('','*',"Esala lo spirito e ritorna alla terra;"),
                array('','2',"in quel giorno svaniscono tutti i suoi disegni.")
            ),
            array(
                array('','*',"Beato chi ha per aiuto il Dio di Giacobbe,"),
                array('','2',"chi spera nel Signore suo Dio,"),
                array('','*',"creatore del cielo e della terra,"),
                array('','2',"del mare e di quanto contiene.")
            ),
            array(
                array('','+',"Egli è fedele per sempre,"),
                array('','*',"rende giustizia agli oppressi,"),
                array('','2',"dà il pane agli affamati."),
                array('','*',"Il Signore libera i prigionieri,"),
                array('','2',"il Signore ridona la vista ai ciechi,"),
                array('','*',"il Signore rialza chi è caduto,"),
                array('','2',"il Signore ama i giusti,")
            ),
            array(
                array('','+',"il Signore protegge lo straniero,"),
                array('','*',"egli sostiene l'orfano e la vedova,"),
                array('','2',"ma sconvolge le vie degli empi."),
                array('','*',"Il Signore regna per sempre,"),
                array('','2',"il tuo Dio, o Sion, per ogni generazione.")
            )
        )
    );

}
?>