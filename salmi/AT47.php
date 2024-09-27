<?php
$this->closure['load']=function() {

    $this->titolo='Cantico AT 47 (Dn 3,52-57) Ogni creatura lodi il Signore';

    //lodi domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "È risorto",
            "Cristo dal sepolcro, lui che liberò i tre fanciulli dalla fornace ardente, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Cantiamo",
            "un inno al Signore nostro Dio, alleluia."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Benedetto sei tu, Signore, Dio dei padri nostri,"),
                array('','2',"degno di lode e di gloria nei secoli."),
                array('','*',"Benedetto il tuo nome glorioso e santo,"),
                array('','2',"degno di lode e di gloria nei secoli.") 
            ),
            array(
                array('','*',"Benedetto sei tu, nel tuo tempio santo glorioso,"),
                array('','2',"degno di lode e di gloria nei secoli."),
                array('','*',"Benedetto sei tu sul trono del tuo regno,"),
                array('','2',"degno di lode e di gloria nei secoli.") 
            ),
            array(
                array('','+',"Benedetto sei tu che penetri con lo sguardo gli abissi"),
                array('','*',"e siedi sui cherubini,"),
                array('','2',"degno di lode e di gloria nei secoli."),
                array('','*',"Benedetto sei tu nel firmamento del cielo,"),
                array('','2',"degno di lode e di gloria nei secoli.") 
            ),
            array(
                array('','*',"Benedite opere tutte del Signore, il Signore,"),
                array('','2',"lodatelo ed esaltatelo nei secoli.")
            ),
            array(
                array('','*',"Benediciamo il Padre e il Figlio con lo Spirito Santo,"),
                array('','2',"lodiamolo ed esaltiamolo nei secoli.")
            )
        )
    );

}
?>