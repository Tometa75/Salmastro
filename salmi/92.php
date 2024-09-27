<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 92 Esaltazione della potenza di Dio creatore';

    //lodi domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Tu sei re,",
            "Signore, ti sei cinto di forza."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Il Signore regna, si ammanta di splendore;"),
                array('','*',"il Signore si riveste, si cinge di forza;"),
                array('','2',"rende saldo il mondo, non sarà mai scosso."),
                array('','*',"Saldo è il tuo trono fin dal principio,"),
                array('','2',"da sempre tu sei.")
            ),
            array(
                array('','+',"Alzano i fiumi, Signore,"),
                array('','*',"alzano i fiumi la loro voce,"),
                array('','2',"alzano i fiumi il loro fragore."),
                array('','+',"Ma più potente delle voci di grandi acque,"),
                array('','*',"più potente dei flutti del mare,"),
                array('','2',"potente nell'alto è il Signore.")
            ),
            array(
                array('','+',"Degni di fede sono i tuoi insegnamenti,"),
                array('','*',"la santità si addice alla tua casa"),
                array('','2',"per la durata dei giorni, Signore.")
            )
        )
    );

}
?>