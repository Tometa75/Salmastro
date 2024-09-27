<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 116 Invito a lodare Dio per il suo amore';

    //lodi martedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Lodate",
            "il Signore per la sua fedeltà e il suo amore."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate il Signore, popoli tutti,"),
                array('','2',"voi tutte, nazioni, dategli gloria;")
            ),
            array(
                array('','*',"perché forte è il suo amore per noi"),
                array('','2',"e la fedeltà del Signore dura in eterno.")
            )
        )
    );

}
?>