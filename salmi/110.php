<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 110 Grandi le opere del Signore';

    //vespri giovedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Rendiamo grazie",
            "a Dio, celebrando il ricordo dei suoi prodigi."
        );
    }

    $this->antifona[1]=array(
        "Rendiamo grazie",
        "a Dio, celebrando il ricordo dei suoi prodigi."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Renderò grazie al Signore con tutto il cuore,"),
                array('','2',"nel consesso dei giusti e nell'assemblea."),
                array('','*',"Grandi sono le opere del Signore,"),
                array('','2',"le contemplino coloro che le amano.")
            ),
            array(
                array('','*',"Le sue opere sono splendore di bellezza,"),
                array('','2',"la sua giustizia dura per sempre."),
                array('','*',"Ha lasciato un ricordo dei suoi prodigi:"),
                array('','2',"pietà e tenerezza è il Signore.")
            ),
            array(
                array('','*',"Egli dà il cibo a chi lo teme,"),
                array('','2',"si ricorda sempre della sua alleanza."),
                array('','*',"Mostrò al suo popolo la potenza delle sue opere,"),
                array('','2',"gli diede l'eredità delle genti.")
            ),
            array(
                array('','*',"Le opere delle sue mani sono verità e giustizia,"),
                array('','2',"stabili sono tutti i suoi comandi,"),
                array('','*',"immutabili nei secoli, per sempre,"),
                array('','2',"eseguiti con fedeltà e rettitudine."),
                array('','*',"Mandò a liberare il suo popolo,"),
                array('','2',"stabilì la sua alleanza per sempre.")
            ),
            array(
                array('','*',"Santo e terribile il suo nome."),
                array('','2',"Principio della saggezza è il timore del Signore,"),
                array('','*',"saggio è colui che gli è fedele;"),
                array('','2',"la lode del Signore è senza fine.")
            )
        )
    );

}
?>