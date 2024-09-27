<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 4 Rendimento di grazie';

    //compieta domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "In te confido,",
            "Signore, e in pace mi addormento, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "In te confido,",
            "Signore, e in pace mi addormento."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Quando ti invoco, rispondimi, Dio, mia giustizia:"),
                array('','*',"dalle angosce mi hai liberato;"),
                array('','2',"pietà di me, ascolta la mia preghiera.")
            ),
            array(
                array('','*',"Fino a quando, o uomini, sarete duri di cuore?"),
                array('','2',"Perché amate cose vane e cercate la menzogna?"),
                array('','*',"Sappiate che il Signore fa prodigi per il suo fedele:"),
                array('','2',"il Signore mi ascolta quando lo invoco.")
            ),
            array(
                array('','*',"Tremate e non peccate,"),
                array('','2',"sul vostro giaciglio riflettete e placatevi."),
                array('','*',"Offrite sacrifici di giustizia"),
                array('','2',"e confidate nel Signore.")
            ),
            array(
                array('','*',"Molti dicono: « Chi ci farà vedere il bene? »."),
                array('','2',"Risplenda su di noi, Signore, la luce del tuo volto."),
                array('','*',"Hai messo più gioia nel mio cuore"),
                array('','2',"di quando abbondano vino e frumento."),
                array('','*',"In pace mi corico e subito mi addormento:"),
                array('','2',"tu solo, Signore, al sicuro mi fai riposare.")
            )
        )
    );

}
?>