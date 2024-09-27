<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 14 Chi è degno di stare davanti al Signore?';

    //compieta1 domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Beati",
            "i puri di cuore, perché vedranno Dio, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Beati",
            "i puri di cuore, perché vedranno Dio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, chi abiterà nella tua tenda?"),
                array('','2',"Chi dimorerà sul tuo santo monte?"),
                array('','*',"Colui che cammina senza colpa,"),
                array('','2',"agisce con giustizia e parla lealmente,"),
                array('','+',"chi non dice calunnia con la sua lingua,"),
                array('','*',"non fa danno al suo prossimo"),
                array('','2',"e non lancia insulto al suo vicino.")
            ),
            array(
                array('','*',"Ai suoi occhi è spregevole il malvagio,"),
                array('','2',"ma onora chi teme il Signore."),
                array('','+',"Anche se giura a suo danno, non cambia;"),
                array('','*',"se presta denaro non fa usura,"),
                array('','2',"e non accetta doni contro l'innocente.")
            ),
            array(
                array('','*',"Colui che agisce in questo modo"),
                array('','2',"resterà saldo per sempre.")
            )
        )
    );

}
?>