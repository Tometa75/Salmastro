<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 61 Solo in Dio la nostra pace";

    //compieta mercoledì 
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Solo in Dio",
            "riposa l'anima mia, da lui la mia speranza, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Solo in Dio",
            "riposa l'anima mia, da lui la mia speranza."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Solo in Dio riposa l'anima mia;"),
                array('','2',"da lui la mia salvezza."),
                array('','*',"Lui solo è mia rupe e mia salvezza,"),
                array('','2',"mia roccia di difesa: non potrò vacillare.")
            ),
            array(
                array('','+',"Fino a quando vi scaglierete contro un uomo,"),
                array('','*',"per abbatterlo tutti insieme,"),
                array('','2',"come muro cadente, come recinto che crolla?"),
                array('','*',"tramano solo di precipitarlo dall'alto,"),
                array('','2',"si compiacciono della menzogna."),
                array('','*',"Con la bocca benedicono,"),
                array('','2',"nel loro cuore maledicono.")
            ),
            array(
                array('','*',"Solo in Dio riposa l'anima mia,"),
                array('','2',"da lui la mia speranza."),
                array('','*',"Lui solo è mia rupe e mia salvezza,"),
                array('','2',"mia roccia di difesa: non potrò vacillare.")
            ),
            array(
                array('','*',"In Dio è la mia salvezza e la mia gloria;"),
                array('','2',"il mio saldo rifugio, la mia difesa è in Dio."),
                array('','+',"Confida sempre in lui, o popolo,"),
                array('','*',"davanti a lui effondi il tuo cuore,"),
                array('','2',"nostro rifugio è Dio.")
            ),
            array(
                array('','+',"Sì, sono un soffio i figli di Abramo,"),
                array('','*',"una menzogna tutti gli uomini,"),
                array('','2',"insieme, sulla bilancia, sono meno di un soffio."),
                array('','*',"Non confidate nella violenza,"),
                array('','2',"non illudetevi della rapina;"),
                array('','*',"alla ricchezza, anche se abbonda,"),
                array('','2',"non attaccate il cuore.")
            ),
            array(
                array('','+',"Una parola ha detto Dio, due ne ho udite:"),
                array('','*',"il potere appartiene a Dio,"),
                array('','2',"tua, Signore, è la grazia;"),
                array('','*',"secondo le sue opere"),
                array('','2',"tu ripaghi ogni uomo.")
            )
        )
    );

}
?>