<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 112 Lodate il nome del Signore';

    //vespri2 domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Dal sorgere del sole",
            "al suo tramonto lodate il nome del Signore."
        );
    }

    $this->antifona[1]=array(
        "Dal sorgere del sole",
        "al suo tramonto lodate il nome del Signore."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate, servi del Signore,"),
                array('','2',"lodate il nome del Signore."),
                array('','*',"Sia benedetto il nome del Signore,"),
                array('','2',"ora e sempre.")
            ),
            array(
                array('','*',"Dal sorgere del sole al suo tramonto"),
                array('','2',"sia lodato il nome del Signore."),
                array('','*',"Su tutti i popoli eccelso è il Signore,"),
                array('','2',"più alta dei cieli è la sua gloria.")
            ),
            array(
                array('','*',"Chi è pari al Signore nostro Dio che siede nell'alto"),
                array('','2',"e si china a guardare nei cieli e sulla terra?"),
                array('','*',"Solleva l'indigente dalla polvere,"),
                array('','2',"dall'immondizia rialza il povero,")
            ),
            array(
                array('','*',"per farlo sedere tra i principi,"),
                array('','2',"tra i principi del suo popolo."),
                array('','*',"Fa abitare la sterile nella sua casa"),
                array('','2',"quale madre gioiosa di figli.")
            )
        )
    );

}
?>