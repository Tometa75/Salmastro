<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 100 Programma di un re fedele a Dio';

    //lodi lunedì
    $this->antifona[0]=array(
        "Camminerò,",
        "con cuore integro nella casa del Signore."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Camminerò,",
            "con cuore integro nella casa del Signore."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Amore e giustizia voglio cantare,"),
                array('','2',"voglio cantare inni a te, o Signore."),
                array('','*',"Agirò con saggezza nella via dell'innocenza:"),
                array('','2',"quando a me verrai?")
            ),
            array(
                array('','*',"Camminerò con cuore integro,"),
                array('','2',"dentro la mia casa."),
                array('','+',"Non sopporterò davanti ai miei occhi azioni malvagie;"),
                array('','*',"detesto chi fa il male,"),
                array('','2',"non mi sarà vicino.")
            ),
            array(
                array('','*',"Lontano da me il cuore perverso,"),
                array('','2',"il malvagio non lo voglio conoscere."),
                array('','*',"Chi calunnia in segreto il suo prossimo"),
                array('','2',"io lo farò perire;"),
                array('','*',"chi ha occhi altezzosi e cuore superbo"),
                array('','2',"non lo potrò sopportare.")
            ),
            array(
                array('','+',"I miei occhi sono rivolti ai fedeli del paese"),
                array('','*',"perché restino a me vicino:"),
                array('','2',"chi cammina per la via integra sarà mio servitore.")
            ),
            array(
                array('','*',"Non abiterà nella mia casa chi agisce con inganno,"),
                array('','2',"chi dice menzogne non starà alla mia presenza."),
                array('','*',"Sterminerò ogni mattino tutti gli empi del paese,"),
                array('','2',"per estirpare dalla città del Signore quanti operano il male.")
            )
        )
    );

}
?>