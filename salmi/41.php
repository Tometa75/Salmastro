<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 41 Desiderio del Signore e del suo tempio';

    //sesta martedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "L'angelo Gabriele",
            "disse a Maria: Ave, piena di grazia, il signore è con te; tu sei benedetta fra le donne."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "Maria",
            "meditava nel suo cuore gli eventi meravigliosi del suo Figlio."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Io sono il Vivente,",
            "dice il Signore: non voglio la morte del peccatore, ma che si converta e viva."
        );
    }
    else {
        $this->antifona[0]=array(
            "L'anima mia",
            "ha sete del Dio vivente: quando vedrò il suo volto?"
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Come la cerva anela ai corsi d'acqua,"),
                array('','2',"così l'anima mia anela a te, o Dio."),
                array('','*',"L'anima mia ha sete di Dio, del Dio vivente:"),
                array('','2',"quando verrò e vedrò il volto di Dio?")
            ),
            array(
                array('','*',"Le lacrime sono mio pane giorno e notte,"),
                array('','2',"mentre mi dicono sempre: « Dov'è il tuo Dio? »."),
                array('','+',"Questo io ricordo, e il mio cuore si strugge:"),
                array('','*',"attraverso la folla avanzavo tra i primi"),
                array('','2',"fino alla casa di Dio,"),
                array('','*',"in mezzo ai canti di gioia"),
                array('','2',"di una moltitudine in festa.")
            ),
            array(
                array('','*',"Perché ti rattristi, anima mia,"),
                array('','2',"perché su di me gemi?"),
                array('','*',"Spera in Dio: ancora potrò lodarlo,"),
                array('','2',"lui, salvezza del mio volto e mio Dio.")
            ),
            array(
                array('','+',"In me si abbatte l'anima mia;"),
                array('','*',"perciò di te mi ricordo"),
                array('','2',"dal paese del Giordano e dell'Ermon, dal monte Mizar."),
                array('','*',"Un abisso chiama l'abisso al fragore delle tue cascate;"),
                array('','2',"tutti i tuoi flutti e le tue onde sopra di me sono passati.")
            ),
            array(
                array('','+',"Di giorno il Signore mi dona la sua grazia,"),
                array('','*',"di notte per lui innalzo il mio canto:"),
                array('','2',"la mia preghiera al Dio vivente."),
                array('','+',"Dirò a Dio, mia difesa:"),
                array('','*',"« Perché mi hai dimenticato?"),
                array('','2',"Perché triste me ne vado, oppresso dal nemico? ».")
            ),
            array(
                array('','+',"Per l'insulto dei miei avversari sono infrante le mie ossa;"),
                array('','*',"essi dicono a me tutto il giorno:"),
                array('','2',"« Dov'è il tuo Dio? ».")
            ),
            array(
                array('','*',"Perché ti rattristi, anima mia,"),
                array('','2',"perché su di me gemi?"),
                array('','*',"Spera in Dio: ancora potrò lodarlo,"),
                array('','2',"lui, salvezza del mio volto e mio Dio.")
            )
        )
    );

}
?>