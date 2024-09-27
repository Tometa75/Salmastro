<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 3 Il Signore mi sostiene';

    //lodi domenica
    $this->antifona[0]=array(
        "O Dio,",
        "tu sei per me uno scudo, fin dal mattino mi sostieni."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, quanti sono i miei oppressori!"),
                array('','2',"molti contro di me insorgono."),
                array('','*',"Molti di me vanno dicendo:"),
                array('','2',"« Neppure Dio lo salva! ».")
            ),
            array(
                array('','*',"Ma tu, Signore, sei mia difesa,"),
                array('','2',"tu sei mia gloria e sollevi il mio capo."),
                array('','*',"Al Signore innalzo la mia voce"),
                array('','2',"e mi risponde dal suo monte santo.")
            ),
            array(
                array('','*',"Io mi corico e mi addormento,"),
                array('','2',"mi sveglio perché il Signore mi sostiene."),
                array('','+',"Non temo la moltitudine di genti"),
                array('','*',"che contro di me si accampano."),
                array('','2',"Sorgi, Signore, salvami, Dio mio.")
            ),
            array(
                array('','*',"Hai colpito sulla guancia i miei nemici,"),
                array('','2',"hai spezzato i denti ai peccatori."),
                array('','*',"Del Signore è la salvezza:"),
                array('','2',"sul tuo popolo la tua benedizione.")
            )
        )
    );

}
?>