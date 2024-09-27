<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 95 Dio, re e giudice dell'universo";

    //lodi venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Cantate a Dio,",
            "benedite il suo nome! Dite tra i popoli: Il Signore regna."
        );
    }

    $this->antifona[1]=array(
        "Cantate a Dio,",
        "benedite il suo nome! Dite tra i popoli: Il Signore regna."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Cantate al Signore un canto nuovo,"),
                array('','2',"cantate al Signore da tutta la terra."),
                array('','*',"Cantate al Signore, benedite il suo nome,"),
                array('','2',"annunziate di giorno in giorno la sua salvezza."),
                array('','*',"In mezzo ai popoli narrate la sua gloria,"),
                array('','2',"a tutte le nazioni dite i suoi prodigi.")
            ),
            array(
                array('','*',"Grande è il Signore e degno di ogni lode,"),
                array('','2',"terribile sopra tutti gli dei."),
                array('','*',"Tutti gli dei delle nazioni sono un nulla,"),
                array('','2',"ma il Signore ha fatto i cieli."),
                array('','*',"Maestà e bellezza sono davanti a lui,"),
                array('','2',"potenza e splendore nel suo santuario.")
            ),
            array(
                array('','+',"Date al Signore, o famiglie dei popoli,"),
                array('','*',"date al Signore gloria e potenza,"),
                array('','2',"date al Signore la gloria del suo nome."),
                array('','*',"Portate offerte ed entrate nei suoi atri,"),
                array('','2',"prostratevi al Signore in sacri ornamenti.")
            ),
            array(
                array('','*',"Tremi davanti a lui tutta la terra."),
                array('','2',"Dite tra i popoli: « Il Signore regna! »."),
                array('','*',"Sorregge il mondo, perché non vacilli;"),
                array('','2',"giudica le nazioni con rettitudine.")
            ),
            array(
                array('','+',"Gioiscano i cieli, esulti la terra,"),
                array('','*',"frema il mare e quanto racchiude;"),
                array('','2',"esultino i campi e quanto contengono,"),
                array('','+',"si rallegrino gli alberi della foresta"),
                array('','*',"davanti al Signore che viene,"),
                array('','2',"perché viene a giudicare la terra."),
                array('','*',"Giudicherà il mondo con giustizia"),
                array('','2',"e con verità tutte le genti.")
            )
        )
    );

}
?>