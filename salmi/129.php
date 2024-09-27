<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 129 Dal profondo a te grido';

    //nona giovedì
    $this->antifona[0]=array(
        "Presso di te",
        "è il perdono, o Dio: spero nella tua parola."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Dal profondo a te grido, o Signore;"),
                array('','2',"Signore, ascolta la mia voce."),
                array('','*',"Siano i tuoi orecchi attenti"),
                array('','2',"alla voce della mia preghiera.")
            ),
            array(
                array('','*',"Se consideri le colpe, Signore,"),
                array('','2',"Signore, chi potrà sussistere?"),
                array('','*',"Ma presso di te è il perdono:"),
                array('','2',"perciò avremo il tuo timore.")
            ),
            array(
                array('','*',"Io spero nel Signore,"),
                array('','2',"l'anima mia spera nella sua parola."),
                array('','*',"L'anima mia attende il Signore"),
                array('','2',"più che le sentinelle l'aurora.")
            ),
            array(
                array('','*',"Israele attenda il Signore,"),
                array('','2',"perché presso il Signore è la misericordia"),
                array('','*',"e grande presso di lui la redenzione."),
                array('','2',"Egli redimerà Israele da tutte le sue colpe.")
            )
        )
    );

}
?>