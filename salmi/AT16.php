<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 16 (Sir 36,1-5. 10-13) Preghiera per il popolo santo di Dio";

    //lodi lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Mostrati grande",
            "fra i popoli, Signore: fuori di te non c'è altro Dio, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Mostrati grande",
            "fra i popoli, Signore: fuori di te non c'è altro Dio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Abbi pietà di noi, Signore Dio dell'universo e guarda,"),
                array('','2',"infondi il tuo timore su tutte le nazioni."),
                array('','*',"Alza la tua mano sulle nazioni straniere,"),
                array('','2',"perché vedano la tua potenza.")
            ),
            array(
                array('','*',"Come ai loro occhi ti sei mostrato santo in mezzo a noi,"),
                array('','2',"così ai nostri occhi mostrati grande fra di loro."),
                array('','*',"Ti riconoscano, come noi abbiamo riconosciuto"),
                array('','2',"che non c'è un Dio fuori di te, Signore."),
                array('','*',"Rinnova i segni e compi altri prodigi,"),
                array('','2',"glorifica la tua mano e il tuo braccio destro.")
            ),
            array(
                array('','*',"Raduna tutte le tribù di Giacobbe,"),
                array('','2',"rendi loro il possesso come era al principio."),
                array('','*',"Abbi pietà, Signore, del popolo chiamato con il tuo nome,"),
                array('','2',"di Israele che hai trattato come un primogenito.")
            ),
            array(
                array('','*',"Abbi pietà della città tua santa,"),
                array('','2',"di Gerusalemme tua dimora."),
                array('','*',"Riempi Sion del tuo splendore,"),
                array('','2',"il tuo popolo della tua gloria.")
            )
        )
    );

}
?>