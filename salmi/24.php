<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 24 Preghiera per il perdono e la salvezza';

    //sesta lunedì
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
            "Insegnami, Signore,",
            "le tue vie: sono tutte verità e grazia."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"A te, Signore, elevo l'anima mia,"),
                array('','*',"Dio, mio, in te confido: non sia confuso!"),
                array('','2',"Non trionfino su di me i miei nemici!"),
                array('','*',"Chiunque spera in te non resti deluso,"),
                array('','2',"sia confuso chi tradisce per un nulla.")
            ),
            array(
                array('','*',"Fammi conoscere, Signore, le tue vie,"),
                array('','2',"insegnami i tuoi sentieri."),
                array('','+',"Guidami nella tua verità e istruiscimi,"),
                array('','*',"perché sei tu il Dio della mia salvezza,"),
                array('','2',"in te ho sempre sperato.")
            ),
            array(
                array('','*',"Ricordati, Signore, del tuo amore,"),
                array('','2',"della tua fedeltà che è da sempre."),
                array('','+',"Non ricordare i peccati della mia giovinezza:"),
                array('','*',"ricordati di me nella tua misericordia,"),
                array('','2',"per la tua bontà, Signore.")
            ),
            array(
                array('','*',"Buono e retto è il Signore,"),
                array('','2',"la via giusta addita ai peccatori;"),
                array('','*',"guida gli umili secondo giustizia,"),
                array('','2',"insegna ai poveri le sue vie.")
            ),
            array(
                array('','*',"Tutti i sentieri del Signore sono verità e grazia,"),
                array('','2',"per chi osserva il suo patto e i suoi precetti."),
                array('','*',"Per il tuo nome, Signore,"),
                array('','2',"perdona il mio peccato, anche se grande.")
            ),
            array(
                array('','*',"Chi è l'uomo che teme Dio?"),
                array('','2',"Gli indica il cammino da seguire."),
                array('','*',"Egli vivrà nella ricchezza,"),
                array('','2',"la sua discendenza possederà la terra.")
            ),
            array(
                array('','*',"Il Signore si rivela a chi lo teme,"),
                array('','2',"gli fa conoscere la sua alleanza."),
                array('','*',"Tengo i miei occhi rivolti al Signore,"),
                array('','2',"perché libera dal laccio il mio piede.")
            ),
            array(
                array('','*',"Volgiti a me e abbi misericordia,"),
                array('','2',"perché sono solo ed infelice."),
                array('','*',"Allevia le angosce del mio cuore,"),
                array('','2',"liberami dagli affanni.")
            ),
            array(
                array('','*',"Vedi la mia miseria e la mia pena"),
                array('','2',"e perdona tutti i miei peccati."),
                array('','*',"Guarda i miei nemici: sono molti"),
                array('','2',"e mi detestano con odio violento.")
            ),
            array(
                array('','*',"Proteggimi, dammi salvezza;"),
                array('','2',"al tuo riparo io non sia deluso."),
                array('','*',"Mi proteggano integrità e rettitudine,"),
                array('','2',"perché in te ho sperato.")
            ),
            array(
                array('','*',"O Dio, libera Israele"),
                array('','2',"da tutte le sue angosce.")
            )
        )
    );

}
?>