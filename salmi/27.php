<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 27 Supplica e ringraziamento';

    //vespri lunedì
    $this->antifona[0]=array(
        "Il Signore",
        "mi ha dato aiuto, esulta in lui il mio cuore."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"A te grido, Signore;"),
                array('','2',"non restare in silenzio, mio Dio,"),
                array('','*',"perché, se tu non mi parli,"),
                array('','2',"io sono come chi scende nella fossa.")
            ),
            array(
                array('','*',"Ascolta la voce della mia supplica,"),
                array('','2',"quando ti grido aiuto,"),
                array('','*',"quando alzo le mie mani"),
                array('','2',"verso il tuo santo tempio.")
            ),
            array(
                array('','*',"Non travolgermi con gli empi,"),
                array('','2',"con quelli che fanno il male."),
                array('','*',"Parlano di pace al loro prossimo,"),
                array('','2',"ma hanno la malizia nel cuore.")
            ),
            array(
                array('','*',"Ripagali secondo la loro opera"),
                array('','2',"e la malvagità delle loro azioni."),
                array('','*',"Secondo le opere delle loro mani,"),
                array('','2',"rendi loro quanto hanno meritato."),
                array('','+',"Poiché non hanno compreso l'agire del Signore"),
                array('','*',"e le opere delle sue mani,"),
                array('','2',"egli li abbatta e non li rialzi.")
            ),
            array(
                array('','*',"Sia benedetto il Signore,"),
                array('','2',"che ha dato ascolto alla voce della mia preghiera;"),
                array('','*',"il Signore è la mia forza e il mio scudo,"),
                array('','2',"ho posto in lui la mia fiducia;"),
                array('','*',"mi ha dato aiuto ed esulta il mio cuore,"),
                array('','2',"con il mio canto gli rendo grazie.")
            ),
            array(
                array('','*',"Il Signore è la forza del suo popolo,"),
                array('','2',"rifugio di salvezza del suo consacrato."),
                array('','*',"Salva il tuo popolo e la tua eredità benedici,"),
                array('','2',"guidali e sostienili per sempre.")
            )
        )
    );

}
?>