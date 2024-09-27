<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 13 Stoltezza degli empi';

    //nona sabato
    $this->antifona[0]=array(
        "Il Signore",
        "guarda dal cielo se c'è uno che cerchi Dio."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Lo stolto pensa: « Non c'è Dio »."),
                array('','*',"Sono corrotti, fanno cose abominevoli:"),
                array('','2',"nessuno più agisce bene."),
                array('','+',"Il signore dal cielo si china sugli uomini"),
                array('','*',"per vedere se esista un saggio:"),
                array('','2',"se c'è uno che cerchi Dio.")
            ),
            array(
                array('','*',"Tutti hanno traviato, sono tutti corrotti;"),
                array('','2',"più nessuno fa il bene, neppure uno."),
                array('','*',"Non comprendono nulla tutti i malvagi,"),
                array('','2',"che divorano il mio popolo come il pane?")
            ),
            array(
                array('','*',"Non invocano Dio: tremeranno di spavento,"),
                array('','2',"perché Dio è con la stirpe del giusto."),
                array('','*',"Volete confondere le speranze del misero,"),
                array('','2',"ma il Signore è il suo rifugio.")
            ),
            array(
                array('','+',"Venga da Sion la salvezza d'Israele!"),
                array('','*',"Quando il Signore ricondurrà il suo popolo,"),
                array('','2',"esulterà Giacobbe e gioirà Israele.")
            )
        )
    );

}
?>