<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 149 Festa degli amici di Dio";

    //lodi mercoledì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Il Signore",
            "ama il suo popolo, la sua lode nell'assemblea dei santi."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Cantate al Signore un canto nuovo;"),
                array('','2',"la sua lode nell'assemblea dei fedeli."),
                array('','*',"Gioisca Israele nel suo Creatore,"),
                array('','2',"esultino nel loro Re i figli di Sion.")
            ),
            array(
                array('','*',"Lodino il suo nome con danze,"),
                array('','2',"con timpani e cetre gli cantino inni."),
                array('','*',"Il Signore ama il suo popolo,"),
                array('','2',"incorona gli umili di vittoria.")
            ),
            array(
                array('','*',"Esultino i fedeli nella gloria,"),
                array('','2',"sorgano lieti dai loro giacigli."),
                array('','*',"Le lodi di Dio sulla loro bocca"),
                array('','2',"e la spada a due tagli nelle loro mani,"),
                array('','*',"per compiere la vendetta tra i popoli"),
                array('','2',"e punire le genti;")
            ),
            array(
                array('','*',"per stringere in catene i loro capi,"),
                array('','2',"i loro nobili in ceppi di ferro;"),
                array('','*',"per eseguire su di essi il giudizio già scritto:"),
                array('','2',"questa è la gloria per tutti i suoi fedeli.")
            )
        )
    );

}
?>