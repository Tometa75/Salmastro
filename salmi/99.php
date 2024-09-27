<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 99 La gioia di coloro che entrano nel tempio";

    //lodi lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Servite il Signore",
            "in letizia, presentatevi a lui con esultanza."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Acclamate al Signore, voi tutti della terra,"),
                array('','*',"servite il Signore nella gioia,"),
                array('','2',"presentatevi a lui con esultanza."),
                array('','+',"Riconoscete che il Signore è Dio;"),
                array('','*',"egli ci ha fatti e noi siamo suoi,"),
                array('','2',"suo popolo e gregge del suo pascolo."),
            ),
            array(
                array('','+',"Varcate le sue porte con inni di grazie,"),
                array('','*',"i suoi atri con canti di lode,"),
                array('','2',"lodatelo, benedite il suo nome;"),
                array('','+',"poiché buono è il Signore,"),
                array('','*',"eterna la sua misericordia,"),
                array('','2',"la sua fedeltà per ogni generazione."),
            )
        )            
    );

}
?>