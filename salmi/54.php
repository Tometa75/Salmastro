<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 54 L'amico che tradisce";

    //sesta giovedì
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
            "Getta sul Signore",
            "il tuo affanno, sarà lui il tuo sostegno."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Porgi l'orecchio, Dio, alla mia preghiera,"),
                array('','*',"non respingere la mia supplica;"),
                array('','2',"dammi ascolto e rispondimi,"),
                array('','*',"mi agito nel mio lamento e sono sconvolto"),
                array('','2',"al grido del nemico, al clamore dell'empio.")
            ),
            array(
                array('','*',"Contro di me riversano sventura,"),
                array('','2',"mi perseguitano con furore."),
                array('','*',"Dentro di me freme il mio cuore,"),
                array('','2',"piombano su di me terrori di morte."),
                array('','*',"Timore e spavento mi invadono"),
                array('','2',"e lo sgomento mi opprime.")
            ),
            array(
                array('','*',"Dico: « Chi mi darà ali come di colomba,"),
                array('','2',"per volare e trovare riposo?"),
                array('','*',"Ecco, errando, volerei lontano,"),
                array('','2',"abiterei nel deserto."),
                array('','*',"Riposerei in un luogo di riparo"),
                array('','2',"dalla furia del vento e dell'uragano ».")
            ),
            array(
                array('','+',"Disperdili, Signore,"),
                array('','*',"confondi le loro lingue:"),
                array('','2',"ho visto nella città violenza e contese."),
                array('','+',"Giorno e notte si aggirano sulle sue mura,"),
                array('','*',"all'interno iniquità, travaglio e insidie"),
                array('','2',"e non cessano nelle sue piazze sopruso e inganno.")
            ),
            array(
                array('','*',"Se mi avesse insultato un nemico,"),
                array('','2',"l'avrei sopportato;"),
                array('','*',"se fosse insorto contro di me un avversario,"),
                array('','2',"da lui mi sarei nascosto.")
            ),
            array(
                array('','*',"Ma sei tu, mio compagno,"),
                array('','2',"mio amico e confidente;"),
                array('','*',"ci legava una dolce amicizia,"),
                array('','2',"verso la casa di Dio camminavamo in festa.")
            ),
            array(
                array('','*',"Piombi su di loro la morte,"),
                array('','2',"scendano vivi negli inferi:"),
                array('','*',"perché il male è nelle loro case,"),
                array('','2',"e nel loro cuore.")
            ),
            array(
                array('','+',"Io invoco Dio e il Signore mi salva."),
                array('','*',"Di sera, al mattino, a mezzogiorno mi lamento e sospiro"),
                array('','2',"ed egli ascolta la mia voce;")
            ),
            array(
                array('','*',"mi salva, mi dà pace da coloro che mi combattono:"),
                array('','2',"sono tanti i miei avversari."),
                array('','*',"Dio mi ascolta e li umilia,"),
                array('','2',"egli che domina da sempre.")
            ),
            array(
                array('','*',"Per essi non c'è conversione"),
                array('','2',"e non temono Dio."),
                array('','*',"Ognuno ha steso la mano contro i suoi nemici,"),
                array('','2',"ha violato la sua alleanza.")
            ),
            array(
                array('','*',"Più untuosa del burro è la sua bocca,"),
                array('','2',"ma nel cuore ha la guerra;"),
                array('','*',"più fluide dell'olio le sue parole,"),
                array('','2',"ma sono spade sguainate.")
            ),
            array(
                array('','+',"Getta sul Signore il tuo affanno"),
                array('','*',"ed egli ti darà sostegno,"),
                array('','2',"mai permetterà che il giusto vacilli.")
            ),
            array(
                array('','*',"Tu, Dio, li sprofonderai nella tomba"),
                array('','2',"gli uomini sanguinari e fraudolenti:"),
                array('','*',"essi non giungeranno alla metà dei loro giorni."),
                array('','2',"Ma io, Signore, in te confido.")
            )
        )
    );

}
?>