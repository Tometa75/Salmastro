<?php
$this->closure['load']=function() {

    $this->titolo="Cantico NT 20 (AP 11,17-18; 12, 10b-12a) Il giudizio di Dio";

    //vespri giovedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Il Signore",
            "gli ha dato il potere, la gloria e il regno; tutti i popoli serviranno a lui."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Noi ti rendiamo grazie, Signore Dio onnipotente,"),
                array('','2',"che sei e che eri,"),
                array('','*',"perché hai messo mano alla tua grande potenza,"),
                array('','2',"e hai instaurato il tuo regno."),
            ),
            array(
                array('','+',"Le genti fremettero,"),
                array('','*',"ma è giunta l'ora della tua ira,"),
                array('','2',"il tempo di giudicare i morti,"),
                array('','+',"di dare la ricompensa ai tuoi servi,"),
                array('','*',"ai profeti e ai santi"),
                array('','2',"e a quanti temono il tuo nome, piccoli e grandi."),
            ),
            array(
                array('','*',"Ora si è compiuta la salvezza, la forza e il regno del nostro Dio"),
                array('','2',"e la potenza del suo Cristo,"),
                array('','+',"poiché è stato precipitato l'accusatore;"),
                array('','*',"colui che accusava i nostri fratelli,"),
                array('','2',"davanti al nostro Dio giorno e notte."),
            ),
            array(
                array('','+',"Essi lo hanno vinto per il sangue dell'Agnello"),
                array('','*',"e la testimonianza del loro martirio;"),
                array('','2',"perché hanno disprezzato la vita fino a morire."),
            ),
            array(
                array('','+',"Esultate, dunque, o cieli,"),
                array('','*',"rallegratevi e gioite,"),
                array('','2',"voi che abitate in essi."),
            )
        )
    );

}
?>