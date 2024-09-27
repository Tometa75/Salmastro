<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 146 Potenza e bontà del Signore';

    //lodi domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Loda",
            "il tuo Dio, Gerusalemme, ha messo pace nei tuoi confini."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Lodate il Signore:"),
                array('','*',"è bello cantare al nostro Dio,"),
                array('','2',"dolce è lodarlo come a lui conviene.")
            ),
            array(
                array('','*',"Il Signore ricostruisce Gerusalemme,"),
                array('','2',"raduna i dispersi d'Israele."),
                array('','*',"Risana i cuori affranti"),
                array('','2',"e fascia le loro ferite;"),
                array('','*',"egli conta il numero delle stelle"),
                array('','2',"e chiama ciascuna per nome.")
            ),
            array(
                array('','*',"Grande è il Signore, onnipotente,"),
                array('','2',"La sua sapienza non ha confini."),
                array('','*',"Il Signore sostiene gli umili"),
                array('','2',"ma abbassa fino a terra gli empi.")
            ),
            array(
                array('','*',"Cantate al Signore un canto di grazie,"),
                array('','2',"intonate sulla cetra inni al nostro Dio."),
                array('','+',"Egli copre il cielo di nubi,"),
                array('','*',"prepara la pioggia per la terra,"),
                array('','2',"fa germogliare l'erba sui monti."),
                array('','*',"Provvede il cibo al bestiame,"),
                array('','2',"ai piccoli del corvo che gridano a lui."),
            ),
            array(
                array('','*',"Non fa conto del vigore del cavallo,"),
                array('','2',"non apprezza l'agile corsa dell'uomo."),
                array('','*',"Il Signore si compiace di chi lo teme,"),
                array('','2',"di chi spera nella sua grazia.")
            )
        )
    );

}
?>