<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 97 Il trionfo del Signore alla sua venuta finale';

    //lodi martedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Il Signore",
            "ha manifestato la sua salvezza: acclami a lui tutta la terra."
        );
    }

    $this->antifona[1]=array(
        "Il Signore",
        "ha manifestato la sua salvezza: acclami a lui tutta la terra."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Cantate al Signore un canto nuovo,"),
                array('','2',"perché ha compiuto prodigi."),
                array('','*',"Gli ha dato vittoria la sua destra"),
                array('','2',"e il suo braccio santo.")
            ),
            array(
                array('','*',"Il Signore ha manifestato la sua salvezza,"),
                array('','2',"agli occhi dei popoli ha rivelato la sua giustizia."),
                array('','*',"Egli si è ricordato del suo amore,"),
                array('','2',"della sua fedeltà alla casa di Israele.")
            ),
            array(
                array('','*',"Tutti i confini della terra hanno veduto"),
                array('','2',"la salvezza del nostro Dio."),
                array('','*',"Acclami al Signore tutta la terra,"),
                array('','2',"gridate, esultate con canti di gioia.")
            ),
            array(
                array('','*',"Cantate inni al Signore con l'arpa,"),
                array('','2',"con l'arpa e con suono melodioso;"),
                array('','*',"con la tromba e al suono del corno"),
                array('','2',"acclamate davanti al re, il Signore.")
            ),
            array(
                array('','*',"Frema il mare e quanto racchiude,"),
                array('','2',"il mondo e i suoi abitanti."),
                array('','*',"I fiumi battano le mani,"),
                array('','2',"esultino insieme le montagne"),
                array('','*',"davanti al Signore che viene,"),
                array('','2',"che viene a giudicare la terra.")
            ),
            array(
                array('','*',"Giudicherà il mondo con giustizia"),
                array('','2',"e i popoli con rettitudine.")
            )
        )
    );

}
?>