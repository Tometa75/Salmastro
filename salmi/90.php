<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 90 Beato chi si pone sotto la protezione dell'Altissimo.";

    //compieta domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Dimora,",
            "all'ombra dell'Onnipotente, sotto le sue ali troverai rifugio, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Dimora,",
            "all'ombra dell'Onnipotente, sotto le sue ali troverai rifugio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Tu che abiti al riparo dell'Altissimo"),
                array('','2',"e dimori all'ombra dell'Onnipotente,"),
                array('','*',"Dì al Signore: « Mio rifugio e mia fortezza,"),
                array('','2',"mio Dio, in cui confido ».")
            ),
            array(
                array('','*',"Egli ti libererà dal laccio del cacciatore,"),
                array('','2',"dalla peste che distrugge."),
                array('','*',"Ti coprirà con le sue penne,"),
                array('','2',"sotto le sue ali troverai rifugio.")
            ),
            array(
                array('','*',"La sua fedeltà ti sarà scudo e corazza;"),
                array('','2',"non temerai i terrori della notte,"),
                array('','+',"né la freccia che vola di giorno,"),
                array('','*',"la peste che vaga nelle tenebre,"),
                array('','2',"lo sterminio che devasta a mezzogiorno.")
            ),
            array(
                array('','+',"Mille cadranno al tuo fianco"),
                array('','*',"e diecimila alla tua destra;"),
                array('','2',"ma nulla ti potrà colpire."),
                array('','*',"Solo che tu guardi, con i tuoi occhi"),
                array('','2',"vedrai il castigo degli empi.")
            ),
            array(
                array('','*',"Poiché tuo rifugio è il Signore"),
                array('','2',"e hai fatto dell'Altissimo la tua dimora,"),
                array('','*',"non ti potrà colpire la sventura,"),
                array('','2',"nessun colpo cadrà sulla tua tenda.")
            ),
            array(
                array('','*',"Egli darà ordine ai suoi angeli"),
                array('','2',"di custodirti in tutti i suoi passi."),
                array('','*',"Sulle loro mani ti porteranno"),
                array('','2',"perché non inciampi nella pietra il tuo piede."),
                array('','*',"Camminerai su aspidi e vipere,"),
                array('','2',"schiaccerai leoni e draghi.")
            ),
            array(
                array('','*',"Lo salverò, perché a me si è affidato;"),
                array('','2',"lo esalterò, perché ha conosciuto il mio nome."),
                array('','+',"Mi invocherà e gli darò risposta;"),
                array('','*',"presso di lui sarò nella sventura,"),
                array('','2',"lo salverò e lo renderò glorioso."),
                array('','*',"Lo sazierò di lunghi giorni"),
                array('','2',"e gli mostrerò la mia salvezza.")
            )
        )
    );

}
?>