<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 133 Orazione notturna nel tempio";

    //compieta domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Nella notte",
            "benedite il Signore, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Nella notte",
            "benedite il Signore."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ecco, benedite il Signore,"),
                array('','2',"voi tutti, servi del Signore;"),
                array('','*',"voi che state nella casa del Signore"),
                array('','2',"durante le notti.")
            ),
            array(
                array('','*',"Alzate le mani verso il tempio"),
                array('','2',"e benedite il Signore."),
                array('','*',"Da Sion ti benedica il Signore,"),
                array('','2',"che ha fatto cielo e terra.")
            )
        )
            
    );

}
?>