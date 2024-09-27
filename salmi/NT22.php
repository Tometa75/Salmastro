<?php
$this->closure['load']=function() {

    $this->titolo="Cantico NT 22 (AP 19,1-2. 5-7) Le nozze dell'Agnello";

    //vespri2 domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Dio regna:",
            "a lui la gloria, alleluia."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','',"Alleluia."),
                array('','*',"Salvezza, gloria e potenza sono del nostro Dio;"),
                array('','2',"veri e giusti sono i suoi giudizi."),
            ),
            array(
                array('','',"Alleluia."),
                array('','*',"Lodate il nostro Dio, voi tutti suoi servi,"),
                array('','2',"voi che lo temete, piccoli e grandi."),
            ),
            array(
                array('','',"Alleluia."),
                array('','*',"Ha preso possesso del suo regno il Signore,"),
                array('','2',"il nostro Dio, l'Onnipotente."),
            ),
            array(
                array('','',"Alleluia."),
                array('','*',"Rallegriamoci ed esultiamo,"),
                array('','2',"rendiamo a lui gloria."),
            ),
            array(
                array('','',"Alleluia."),
                array('','*',"sono giunte le nozze dell'Agnello;"),
                array('','2',"la sua sposa è pronta."),
            )
        )
    );

}
?>