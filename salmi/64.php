<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 64 Gioia delle creature di Dio per la sua provvidenza';

    //lodi martedì
    $this->antifona[0]=array(
        "O Dio,",
        "beato chi scegli e chiami vicino, lo sazierai dei beni della tua casa."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "O Dio,",
            "beato chi scegli e chiami vicino, lo sazierai dei beni della tua casa."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"A te si deve lode, o Dio, in Sion;"),
                array('','2',"a te si sciolga il voto in Gerusalemme."),
                array('','*',"A te, che ascolti la preghiera,"),
                array('','2',"viene ogni mortale."),
                array('','*',"Pesano su di noi le nostre colpe,"),
                array('','2',"ma tu perdoni i nostri peccati.")
            ),
            array(
                array('','*',"Beato chi hai scelto e chiamato vicino,"),
                array('','2',"abiterà nei tuoi atrii."),
                array('','*',"Ci sazieremo dei beni della tua casa,"),
                array('','2',"della santità del tuo tempio."),
                array('','+',"Con i prodigi della tua giustizia,"),
                array('','*',"tu ci rispondi, o Dio, nostra salvezza,"),
                array('','2',"speranza dei confini della terra e dei mari lontani.")
            ),
            array(
                array('','*',"Tu rendi saldi i monti con la tua forza,"),
                array('','2',"cinto di potenza."),
                array('','+',"Tu fai tacere il fragore del mare,"),
                array('','*',"il fragore dei suoi flutti,"),
                array('','2',"tu plachi il tumulto dei popoli.")
            ),
            array(
                array('','*',"Gli abitanti degli estremi confini"),
                array('','2',"stupiscono davanti ai tuoi prodigi:"),
                array('','*',"di gioia fai gridare la terra,"),
                array('','2',"le soglie dell'oriente e dell'occidente.")
            ),
            array(
                array('','*',"Tu visiti la terra e la disseti:"),
                array('','2',"la ricolmi delle sue ricchezze."),
                array('','*',"Il fiume di Dio è gonfio di acque;"),
                array('','2',"tu fai crescere il frumento per gli uomini."),
                array('','+',"Così prepari la terra:"),
                array('','*',"ne irrighi i solchi, ne spiani le zolle,"),
                array('','2',"la bagni con le piogge e benedici i suoi germogli.")
            ),
            array(
                array('','*',"Coroni l'anno con i tuoi benefici,"),
                array('','2',"al tuo passaggio stilla l'abbondanza."),
                array('','*',"Stillano i pascoli del deserto"),
                array('','2',"e le colline si cingono di esultanza."),
                array('','+',"I prati si coprono di greggi,"),
                array('','*',"di frumento si ammantano le valli;"),
                array('','2',"tutto canta e grida di gioia.")
            )
        )
    );

}
?>