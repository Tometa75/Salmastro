<?php
$this->closure['load']=function() {

    $this->titolo='Cantico NT 10 (Ef 1,3-10) Dio Salvatore';

    //vespri lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Benedetto",
            "sei tu, Padre, che ci hai scelti nel tuo Figlio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Benedetto sia Dio, Padre del Signore nostro Gesù Cristo,"),
                array('','2',"che ci ha benedetti con ogni benedizione spirituale nei cieli, in Cristo."),
                array('','*',"In lui ci ha scelti"),
                array('','2',"prima della creazione del mondo,"),
                array('','*',"per trovarci, al suo cospetto,"),
                array('','2',"santi e immacolati nell'amore.")
            ),
            array(
                array('','*',"Ci ha predestinati"),
                array('','2',"a essere suoi figli adottivi"),
                array('','*',"per opera di Gesù Cristo,"),
                array('','2',"secondo il beneplacito del suo volere,"),
                array('','*',"a lode e gloria della sua grazia,"),
                array('','2',"che ci ha dato nel suo Figlio diletto.")
            ),
            array(
                array('','+',"In lui abbiamo la redenzione mediante il suo sangue,"),
                array('','*',"la remissione dei peccati"),
                array('','2',"secondo la ricchezza della sua grazia."),
                array('','*',"Dio l'ha abbondantemente riversata su di noi con ogni sapienza e intelligenza,"),
                array('','2',"poiché egli ci ha fatto conoscere il mistero del suo volere,")
            ),
            array(
                array('','*',"il disegno di ricapitolare in Cristo tutte le cose,"),
                array('','2',"quelle del cielo come quelle della terra."),
                array('','*',"Nella sua benevolenza lo aveva in lui prestabilito"),
                array('','2',"per realizzarlo nella pienezza dei tempi.")
            )
        )
    );

}
?>