<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 120 Il custode di Israele';

    //nona lunedì
    $this->antifona[0]=array(
        "Il Signore",
        "è il mio custode, veglia su di me per sempre."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Alzo gli occhi verso i monti:"),
                array('','2',"da dove mi verrà l'aiuto?"),
                array('','*',"Il mio aiuto viene dal Signore,"),
                array('','2',"che ha fatto cielo e terra.")
            ),
            array(
                array('','*',"Non lascerà vacillare il tuo piede,"),
                array('','2',"non si addormenterà il tuo custode."),
                array('','*',"Non si addormenta, non prende sonno,"),
                array('','2',"il custode d'Israele.")
            ),
            array(
                array('','+',"Il Signore è il tuo custode,"),
                array('','*',"il Signore è come ombra che ti copre,"),
                array('','2',"e sta alla tua destra."),
                array('','*',"Di giorno non ti colpirà il sole,"),
                array('','2',"né la luna di notte.")
            ),
            array(
                array('','*',"Il Signore ti proteggerà da ogni male,"),
                array('','2',"egli proteggerà la tua vita."),
                array('','*',"Il Signore veglierà su di te, quando esci e quando entri,"),
                array('','2',"da ora e per sempre.")
            )
        )
    );

}
?>