<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 60 Preghiera di un esule';

    //vespri lunedì
    $this->antifona[0]=array(
        "Dai confini del mondo",
        "t'invoco, Signore: canterò inni al tuo nome, sempre."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ascolta, o Dio, il mio grido,"),
                array('','2',"sii attento alla mia preghiera."),
                array('','+',"Dai confini della terra io t'invoco;"),
                array('','*',"mentre il mio cuore viene meno,"),
                array('','2',"guidami su rupe inaccessibile.")
            ),
            array(
                array('','*',"Tu sei per me rifugio,"),
                array('','2',"torre salda davanti all'avversario."),
                array('','*',"Dimorerò nella tua tenda per sempre,"),
                array('','2',"all'ombra delle tue ali troverò riparo;"),
                array('','*',"perché tu, Dio, hai ascoltato i miei voti,"),
                array('','2',"mi hai dato l'eredità di chi teme il tuo nome.")
            ),
            array(
                array('','*',"Ai giorni del re aggiungi altri giorni,"),
                array('','2',"per molte generazioni siano i suoi anni."),
                array('','*',"Regni per sempre sotto gli occhi di Dio;"),
                array('','2',"grazia e fedeltà lo custodiscano."),
                array('','*',"Allora canterò inni al tuo nome, sempre,"),
                array('','2',"sciogliendo i miei voti giorno per giorno.")
            )
        )
    );

}
?>