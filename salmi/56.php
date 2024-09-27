<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 56 Preghiera del mattino nella sofferenza";

    //lodi mercoledì
    $this->antifona[0]=array(
        "Sveglierò l'aurora,",
        "a te, mio Dio, voglio inneggiare."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else{
        $this->antifona[1]=array(
            "Sveglierò l'aurora,",
            "a te, mio Dio, voglio inneggiare."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Pietà di me, pietà di me, o Dio,"),
                array('','2',"in te mi rifugio;"),
                array('','*',"mi rifugio all'ombra delle tue ali"),
                array('','2',"finché sia passato il pericolo.")
            ),
            array(
                array('','*',"Invocherò Dio, l'Altissimo,"),
                array('','2',"Dio che mi fa il bene."),
                array('','+',"Mandi dal cielo a salvarmi."),
                array('','*',"dalla mano dei miei persecutori,"),
                array('','2',"Dio mandi la sua fedeltà e la sua grazia.")
            ),
            array(
                array('','*',"Io sono come in mezzo a leoni,"),
                array('','2',"che divorano gli uomini;"),
                array('','*',"i loro denti sono lance e frecce,"),
                array('','2',"la loro lingua spada affilata.")
            ),
            array(
                array('','*',"Innàlzati sopra il cielo, o Dio,"),
                array('','2',"su tutta la terra la tua gloria.")
            ),
            array(
                array('','*',"Hanno teso una rete ai miei piedi,"),
                array('','2',"mi hanno piegato,"),
                array('','*',"hanno scavato davanti a me una fossa"),
                array('','2',"e vi sono caduti.")
            ),
            array(
                array('','+',"Saldo è il mio cuore, o Dio,"),
                array('','*',"saldo è il mio cuore."),
                array('','2',"Voglio cantare, a te voglio inneggiare:"),
                array('','+',"svegliati, mio cuore,"),
                array('','*',"svegliatevi, arpa e cetra,"),
                array('','2',"voglio svegliare l'aurora.")
            ),
            array(
                array('','*',"Ti loderò tra i popoli, Signore,"),
                array('','2',"a te canterò inni tra le genti,"),
                array('','*',"perché la tua bontà è grande fino ai cieli,"),
                array('','2',"e la tua fedeltà fino alle nubi.")
            ),
            array(
                array('','*',"Innàlzati sopra il cielo, o Dio,"),
                array('','2',"su tutta la terra la tua gloria.")
            )
        )
    );

}
?>