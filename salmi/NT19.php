<?php
$this->closure['load']=function() {

    $this->titolo='Cantico NT 19 (Ap 4,11;5,9-10.12-14) Inno dei salvati';

    //vespri martedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Hai fatto di noi,",
            "Signore, un popolo regale, sacerdoti per il nostro Dio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Tu sei degno, o Signore e Dio nostro,"),
                array('','2',"di ricevere la gloria, l'onore e la potenza,"),
                array('','+',"perché tu hai creato tutte le cose,"),
                array('','*',"per la tua volontà furono create,"),
                array('','2',"per il tuo volere sussistono.")
            ),
            array(
                array('','*',"Tu sei degno, o Signore, di prendere il libro"),
                array('','2',"e di aprirne i sigilli,"),
                array('','+',"perché sei stato immolato"),
                array('','*',"e hai riscattato per Dio con il tuo sangue"),
                array('','2',"uomini di ogni tribù, lingua, popolo e nazione e li hai costituiti per il nostro Dio"),
                array('','*',"un regno di sacerdoti"),
                array('','2',"e regneranno sopra la terra.")
            ),
            array(
                array('','+',"L'agnello che fu immolato è degno di potenza,"),
                array('','*',"ricchezza, sapienza e forza,"),
                array('','2',"onore, gloria e benedizione.")
            ),
            array(
                array('','+',"A colui che siede sul trono e all'Agnello"),
                array('','*',"lode, onore, gloria e potenza,"),
                array('','2',"nei secoli dei secoli. Amen.")
            )   
        )
    );

}
?>