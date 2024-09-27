<?php
$this->closure['load']=function() {

    $this->titolo="Cantico NT 21 (AP 15,3-4) Inno di adorazione e di lode";

    //vespri venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Tutte le genti",
            "verranno ad adorarti, Signore."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Grandi e mirabili sono le tue opere,"),
                array('','*',"o Signore Dio onnipotente;"),
                array('','2',"giuste e veraci le tue vie, o Re delle genti!"),
            ),
            array(
                array('','+',"Chi non temerà il tuo nome,"),
                array('','*',"chi non ti glorificherà, o Signore?"),
                array('','2',"Tu solo sei santo!"),
            ),
            array(
                array('','+',"Tutte le genti verranno a te, Signore,"),
                array('','*',"davanti a te si prostreranno,"),
                array('','2',"perché i tuoi giusti giudizi si sono manifestati."),
            )
        )
    );

}
?>