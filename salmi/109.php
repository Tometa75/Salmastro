<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 109';

    //vespri festivi
    $this->antifona[0]=array();

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Oracolo del Signore al mio Signore:"),
                array('','2',"« Siedi alla mia destra,"),
                array('','*',"finché io ponga i tuoi nemici"),
                array('','2',"a sgabello dei tuoi piedi ».")
            ),
            array(
                array('','*',"Lo scettro del tuo potere stende il Signore da Sion:"),
                array('','2',"« Domina in mezzo ai tuoi nemici."),
                array('','+',"A te il principato nel giorno della tua potenza"),
                array('','*',"tra santi splendori;"),
                array('','2',"dal seno dell'aurora, come rugiada, io ti ho generato ».")
            ),
            array(
                array('','*',"Il Signore ha giurato e non si pente:"),
                array('','2',"« Tu sei sacerdote per sempre al modo di Melchisedek »."),
                array('','*',"Il Signore è alla tua destra,"),
                array('','2',"annienterà i re nel giorno della sua ira.")
            ),
            array(
                array('','*',"Giudicherà i popoli:"),
                array('','2',"in mezzo a cadaveri ne stritolerà la testa su vasta terra."),
                array('','*',"Lungo il cammino si disseta al torrente"),
                array('','2',"e solleva alta la testa.")
            )
        )
    );

}
?>