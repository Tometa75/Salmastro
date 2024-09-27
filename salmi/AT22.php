<?php
$this->closure['load']=function() {

    $this->titolo='Cantico AT 22 (Is 12,1-6) Esultanza del popolo redento';

    //lodi giovedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Grandi cose",
            "ha compiuto il Signore: sappiano i popoli le sue imprese, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Grandi cose",
            "ha compiuto il Signore: sappiano i popoli le sue imprese."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Ti ringrazio, Signore;"),
                array('','*',"tu eri con me adirato,"),
                array('','2',"ma la tua collera si è calmata e tu mi hai consolato.")
            ),
            array(
                array('','*',"Ecco, Dio è la mia salvezza;"),
                array('','2',"io confiderò, non avrò mai timore,"),
                array('','*',"perché mia forza e mio canto è il Signore;"),
                array('','2',"egli è stato la mia salvezza.") 
            ),
            array(
                array('','*',"Attingerete acqua con gioia"),
                array('','2',"alle sorgenti della salvezza."),
                array('','*',"In quel giorno direte:"),
                array('','2',"« Lodate il Signore, invocate il suo nome;"),
                array('','*',"manifestate tra i popoli le sue meraviglie,"),
                array('','2',"proclamate che il suo nome è sublime.") 
            ),
            array(
                array('','*',"Cantate inni al Signore, perché ha fatto opere grandi,"),
                array('','2',"ciò sia noto in tutta la terra."),
                array('','*',"Gridate giulivi, ed esultate, abitanti di Sion,"),
                array('','2',"perché grande in mezzo a voi è il Santo di Israele ».")
            )
        )
    );

}
?>