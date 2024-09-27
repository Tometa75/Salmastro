<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 148 Glorificazione di Dio Signore e Creatore';

    //lodi giovedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Popoli tutti",
            "lodate il Signore: la sua gloria risplende sulla terra e nei cieli."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate il Signore dai cieli,"),
                array('','2',"lodatelo nell'alto dei cieli."),
                array('','*',"Lodatelo voi tutti, suoi angeli,"),
                array('','2',"lodatelo, voi tutte, sue schiere.")
            ),
            array(
                array('','*',"Lodatelo, sole e luna,"),
                array('','2',"lodatelo, voi tutte, fulgide stelle."),
                array('','*',"Lodatelo, cieli dei cieli"),
                array('','2',"voi, acque al di sopra dei cieli.")
            ),
            array(
                array('','*',"Lodino tutti il nome del Signore,"),
                array('','2',"perché egli disse e furono creati."),
                array('','*',"Li ha stabiliti per sempre,"),
                array('','2',"ha posto una legge che non passa.")
            ),
            array(
                array('','*',"Lodate il Signore dalla terra,"),
                array('','2',"mostri marini e voi tutti, abissi,"),
                array('','*',"fuoco e grandine, neve e nebbia,"),
                array('','2',"vento di bufera che obbedisce alla sua parola,")
            ),
            array(
                array('','*',"monti e voi tutte, colline,"),
                array('','2',"alberi da frutto e tutti voi, cedri,"),
                array('','*',"voi, fiere e tutte le bestie,"),
                array('','2',"rettili e uccelli alati.")
            ),
            array(
                array('','*',"I re della terra e i popoli tutti,"),
                array('','2',"i governanti e i giudici della terra,"),
                array('','+',"i giovani e le fanciulle,"),
                array('','*',"i vecchi insieme ai bambini"),
                array('','2',"lodino il nome del Signore:")
            ),
            array(
                array('','+',"perché solo il suo nome è sublime,"),
                array('','*',"la sua gloria risplende sulla terra e nei cieli."),
                array('','2',"Egli ha sollevato la potenza del suo popolo."),
                array('','*',"È canto di lode per tutti i suoi fedeli,"),
                array('','2',"per i figli di Israele, popolo che egli ama.")
            )
        )
    );

}
?>