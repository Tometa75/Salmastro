<?php
$this->closure['load']=function() {

    $this->titolo='Cantico NT 11 (Fil 2,6-11) Cristo, servo di Dio';

    //primi vespri domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia",
            "alleluia, alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Il Signore Gesù",
            "si è umiliato nella morte; e Dio lo ha innalzato nella gloria."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Cristo Gesù, pur essendo di natura divina,"),
                array('','2',"non considerò un tesoro geloso la sua uguaglianza con Dio;"),
                array('','+',"ma spogliò se stesso,"),
                array('','*',"assumendo la condizione di servo"),
                array('','2',"e divenendo simile agli uomini;"),
                array('','+',"apparso in forma umana umiliò se stesso"),
                array('','*',"facendosi obbediente fino alla morte"),
                array('','2',"e alla morte di croce.") 
            ),
            array(
                array('','*',"Per questo Dio lo ha esaltato"),
                array('','2',"e gli ha dato il nome che è al di sopra di ogni altro nome;"),
                array('','*',"perché nel nome di Gesù ogni ginocchio si pieghi"),
                array('','2',"nei cieli, sulla terra e sotto terra;") 
            ),
            array(
                array('','*',"e ogni lingua proclami che Gesù Cristo è il Signore,"),
                array('','2',"a gloria di Dio Padre.")
            )
        )
    );

}
?>