<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 11 Preghiera nella persecuzione';

    //nona venerdì
    $this->antifona[0]=array(
        "Guardaci,",
        "o Signore, dalla lingua bugiarda e dal cuore doppio."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Salvami Signore! Non c'è più un uomo fedele;"),
                array('','2',"è scomparsa la fedeltà tra i figli dell'uomo."),
                array('','*',"Si dicono menzogne l'uno all'altro,"),
                array('','2',"labbra bugiarde parlano con cuore doppio.")
            ),
            array(
                array('','*',"Recida il Signore le labbra bugiarde,"),
                array('','2',"la lingua che dice parole arroganti,"),
                array('','+',"quanti dicono: « Per la nostra lingua siamo forti,"),
                array('','*',"ci difendiamo con le nostre labbra:"),
                array('','2',"chi sarà nostro padrone? ».")
            ),
            array(
                array('','+',"« Per l'oppressione dei miseri e il gemito dei poveri,"),
                array('','*',"io sorgerò - dice il Signore -"),
                array('','2',"metterò in salvo chi è disprezzato ».")
            ),
            array(
                array('','+',"I detti del Signore sono puri,"),
                array('','*',"argento raffinato nel crogiolo,"),
                array('','2',"purificato nel fuoco sette volte.")
            ),
            array(
                array('','*',"Tu, o Signore, ci custodirai,"),
                array('','2',"ci guarderai da questa gente per sempre."),
                array('','*',"Mentre gli empi si aggirano intorno,"),
                array('','2',"emergono i peggiori tra gli uomini.")
            )
        )
    );

}
?>