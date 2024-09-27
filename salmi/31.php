<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 31 Ringraziamento per il perdono dei peccati";

    //compieta mercoledì 
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Confesserò al Signore",
            "le mie colpe: in lui è il mio rifugio, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Confesserò al Signore",
            "le mie colpe: in lui è il mio rifugio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Beato l'uomo a cui è rimessa la colpa,"),
                array('','2',"e perdonato il peccato."),
                array('','*',"Beato l'uomo a cui Dio non imputa alcun male"),
                array('','2',"e nel cui spirito non è inganno.")
            ),
            array(
                array('','*',"Tacevo e si logoravano le mie ossa,"),
                array('','2',"mentre gemevo tutto il giorno."),
                array('','*',"Giorno e notte pesava su di me la tua mano,"),
                array('','2',"come per arsura d'estate inaridiva il mio vigore.")
            ),
            array(
                array('','*',"Ti ho manifestato il mio peccato,"),
                array('','2',"non ho tenuto nascosto il mio errore."),
                array('','*',"Ho detto: « Confesserò al Signore le mie colpe »."),
                array('','2',"e tu hai rimesso la malizia del mio peccato.")
            ),
            array(
                array('','*',"Per questo ti prega ogni fedele"),
                array('','2',"nel tempo dell'angoscia."),
                array('','*',"Quando irromperanno grandi acque"),
                array('','2',"non lo potranno raggiungere."),
                array('','*',"Tu sei il mio rifugio, mi preservi dal pericolo,"),
                array('','2',"mi circondi di esultanza per la salvezza.")
            ),
            array(
                array('','*',"Ti farò saggio, t'indicherò la via da seguire;"),
                array('','2',"con gli occhi su di te, ti darò consiglio."),
                array('','+',"Non siate come il cavallo e come il mulo privi d'intelligenza;"),
                array('','*',"si piega la loro fierezza con morso e briglie,"),
                array('','2',"se no, a te non si avvicinano."),
            ),
            array(
                array('','*',"Molti saranno i dolori dell'empio,"),
                array('','2',"ma la grazia circonda chi confida nel Signore."),
                array('','*',"Gioite nel Signore ed esultate, giusti,"),
                array('','2',"giubilate, voi tutti, retti di cuore."),
            )
        )
    );

}
?>