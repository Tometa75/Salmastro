<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 134 Lodate il Signore che opera meraviglie";

    //compieta domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Lodate il Signore",
            "perché è buono: egli guida il suo popolo."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate il nome del Signore,"),
                array('','2',"lodatelo, servi del Signore,"),
                array('','*',"voi che state nella casa del Signore,"),
                array('','2',"negli atri della casa del nostro Dio.")
            ),
            array(
                array('','*',"Lodate il Signore: il Signore è buono;"),
                array('','2',"cantate inni al suo nome, perché è amabile."),
                array('','*',"Il Signore si è scelto Giacobbe,"),
                array('','2',"Israele come suo possesso.")
            ),
            array(
                array('','*',"Io so che grande è il Signore,"),
                array('','2',"il nostro Dio sopra tutti gli dei."),
                array('','+',"Tutto ciò che vuole il Signore lo compie"),
                array('','*',"in cielo e sulla terra,"),
                array('','2',"nei mari e in tutti gli abissi."),
                array('','+',"Fa salire le nubi dall'estremità della terra,"),
                array('','*',"produce le folgori per la pioggia,"),
                array('','2',"dalle sue riserve libera i venti.")
            ),
            array(
                array('','*',"Egli percosse i primogeniti d'Egitto,"),
                array('','2',"dagli uomini fino al bestiame."),
                array('','*',"Mandò segni e prodigi in mezzo a te, Egitto,"),
                array('','2',"contro il faraone e tutti i suoi ministri.")
            ),
            array(
                array('','*',"Colpì numerose nazioni,"),
                array('','2',"e uccise re potenti:"),
                array('','*',"Seon, re degli Amorrei, Og, re di Basan,"),
                array('','2',"e tutti i regni di Cànaan."),
                array('','*',"Diede la loro terra in eredità a Israele,"),
                array('','2',"in eredità a Israele suo popolo.")
            ),
            array(
                array('','*',"Signore, il tuo nome è per sempre;"),
                array('','2',"Signore, il tuo ricordo per ogni generazione."),
                array('','*',"Il Signore guida il suo popolo,"),
                array('','2',"si muove a pietà dei suoi servi.")
            ),
            array(
                array('','*',"Gli idoli dei popoli sono argento e oro,"),
                array('','2',"opera delle mani dell'uomo."),
                array('','*',"Hanno bocca e non parlano;"),
                array('','2',"hanno occhi e non vedono;")
            ),
            array(
                array('','*',"hanno orecchi e non odono;"),
                array('','2',"non c'è respiro nella loro bocca."),
                array('','*',"Sia come loro chi li fabbrica"),
                array('','2',"e chiunque in essi confida.")
            ),
            array(
                array('','*',"Benedici il Signore, casa d'Israele;"),
                array('','2',"benedici il Signore, casa di Aronne;"),
                array('','*',"benedici il Signore, casa di Levi;"),
                array('','2',"voi che temete il Signore, benedite il Signore."),
                array('','*',"Da Sion sia benedetto il Signore"),
                array('','2',"che abita in Gerusalemme.")
            )
        )
            
    );

}
?>