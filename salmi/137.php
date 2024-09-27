<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 137 Rendimento di grazie';

    //primi vespri domenica
    $this->antifona[0]=array(
        "A te",
        "voglio cantare davanti agli angeli, mio Dio."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "A te",
            "voglio cantare davanti agli angeli, mio Dio."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ti rendo grazie, Signore, con tutto il cuore:"),
                array('','2',"hai ascoltato le parole della mia bocca."),
                array('','*',"A te voglio cantare davanti agli angeli,"),
                array('','2',"mi prostro verso il tuo tempio santo.")
            ),
            array(
                array('','*',"Rendo grazie al tuo nome"),
                array('','2',"per la tua fedeltà e la tua misericordia:"),
                array('','*',"hai reso la tua promessa"),
                array('','2',"più grande di ogni fama.")
            ),
            array(
                array('','*',"Nel giorno in cui t'ho invocato, mi hai risposto,"),
                array('','2',"hai accresciuto in me la forza."),
                array('','*',"Ti loderanno, Signore, tutti i re della terra"),
                array('','2',"quando udranno le parole della tua bocca.")
            ),
            array(
                array('','*',"Canteranno le vie del Signore,"),
                array('','2',"perché grande è la gloria del Signore;"),
                array('','*',"eccelso è il signore e guarda verso l'umile,"),
                array('','2',"ma al superbo volge lo sguardo da lontano.")
            ),
            array(
                array('','*',"Se cammino in mezzo alla sventura,"),
                array('','2',"tu mi ridoni vita;"),
                array('','*',"contro l'ira dei miei nemici stendi la mano,"),
                array('','2',"e la tua destra mi salva."),
                array('','+',"Il Signore completerà per me l'opera sua."),
                array('','*',"Signore, la tua bontà dura per sempre:"),
                array('','2',"non abbandonare l'opera delle tue mani.")
            )
        )
    );

}
?>