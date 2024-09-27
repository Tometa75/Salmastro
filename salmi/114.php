<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 114 Rendimento di grazie";

    //vespri domenica
    $this->antifona[0]=array(
        "Che cosa renderò",
        "al Signore? Offrirò il calice della salvezza."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Amo il Signore perché ascolta,"),
                array('','2',"il grido della mia preghiera."),
                array('','*',"Verso di me ha teso l'orecchio"),
                array('','2',"nel giorno in cui lo invocavo.")
            ),
            array(
                array('','*',"Mi stringevano funi di morte,"),
                array('','2',"ero preso nei lacci degli inferi."),
                array('','+',"Mi opprimevano tristezza e angoscia"),
                array('','*',"e ho invocato il nome del Signore:"),
                array('','2',"« Ti prego, Signore, salvami ».")
            ),
            array(
                array('','*',"Buono e giusto è il Signore,"),
                array('','2',"il nostro Dio è misericordioso."),
                array('','*',"Il Signore protegge gli umili:"),
                array('','2',"ero misero ed egli mi ha salvato.")
            ),
            array(
                array('','*',"Ritorna, anima mia, alla tua pace,"),
                array('','2',"poiché il Signore ti ha beneficato;"),
                array('','+',"egli mi ha sottratto dalla morte,"),
                array('','*',"ha liberato i miei occhi dalle lacrime,"),
                array('','2',"ha preservato i miei piedi dalla caduta."),
                array('','*',"Camminerò alla presenza del Signore"),
                array('','2',"sulla terra dei viventi.")
            )
        )
    );
}
?>