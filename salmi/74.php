<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 74 Dio, giudice supremo';

    //vespri martedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Narrate",
            "le meraviglie del Signore: egli giudica con rettitudine."
        );
    }

    $this->antifona[1]=array(
        "Narrate",
        "le meraviglie del Signore: egli giudica con rettitudine."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Noi ti rendiamo grazie, o Dio, ti rendiamo grazie:"),
                array('','2',"invocando il tuo nome, raccontiamo le tue meraviglie.")
            ),
            array(
                array('','*',"Nel tempo che avrò stabilito"),
                array('','2',"io giudicherò con rettitudine."),
                array('','*',"Si scuota la terra con i suoi abitanti,"),
                array('','2',"io tengo salde le sue colonne.")
            ),
            array(
                array('','*',"Dico a chi si vanta: « Non vantatevi »."),
                array('','2',"E agli empi « Non alzate la testa »."),
                array('','*',"Non alzate la testa contro il cielo,"),
                array('','2',"non dite insulti a Dio.")
            ),
            array(
                array('','*',"Non dall'oriente, non dall'occidente,"),
                array('','2',"non dal deserto, non dalle montagne"),
                array('','*',"ma da Dio, viene il giudizio:"),
                array('','2',"è lui che abbatte l'uno e innalza l'altro.")
            ),
            array(
                array('','*',"Poiché nella mano del Signore è un calice,"),
                array('','2',"ricolmo di vino drogato."),
                array('','+',"Egli ne versa:"),
                array('','*',"fino alla feccia ne dovranno sorbire,"),
                array('','2',"ne berranno tutti gli empi della terra.")
            ),
            array(
                array('','*',"Io invece esulterò per sempre,"),
                array('','2',"canterò inni al Dio di Giacobbe."),
                array('','*',"Annienterò tutta l'arroganza degli empi,"),
                array('','2',"allora si alzerà la potenza dei giusti.")
            )
        )
    );

}
?>