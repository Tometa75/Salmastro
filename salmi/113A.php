<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 113 A Meraviglie dell'esodo dall'Egitto";

    //vespri2 domenica
    $this->antifona[0]=array(
        "Dio,",
        "ha liberato il suo popolo, con mano potente e braccio teso."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Quando Israele uscì dall'Egitto,"),
                array('','2',"la casa di Giacobbe da un popolo barbaro,"),
                array('','*',"Giuda divenne il suo santuario,"),
                array('','2',"Israele il suo dominio.")
            ),
            array(
                array('','*',"Il mare vide e si ritrasse,"),
                array('','2',"il Giordano si volse indietro,"),
                array('','*',"i monti saltellarono come arieti,"),
                array('','2',"le colline come agnelli di un gregge.")
            ),
            array(
                array('','*',"Che hai tu, mare, per fuggire,"),
                array('','2',"e tu, Giordano, perché torni indietro?"),
                array('','*',"Perché voi monti saltellate come arieti"),
                array('','2',"e voi colline come agnelli di un gregge?")
            ),
            array(
                array('','*',"Trema, o terra, davanti al Signore,"),
                array('','2',"davanti al Dio di Giacobbe,"),
                array('','*',"che muta la rupe in un lago,"),
                array('','2',"la roccia in sorgenti d'acqua.")
            )
        )
    );
}
?>