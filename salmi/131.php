<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 131';

    //vespri II Pastori e dottori
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Sacerdoti di Dio,",
            "benedite il Signore; sciogliete inni a Dio, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Sacerdoti di Dio,",
            "benedite il Signore; sciogliete inni a Dio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ricordati, Signore, di Davide,"),
                array('','2',"di tutte le sue prove,"),
                array('','*',"quando giurò al Signore,"),
                array('','2',"al potente di Giacobbe fece voto:")
            ),
            array(
                array('','*',"« Non entrerò sotto il tetto della mia casa,"),
                array('','2',"non mi stenderò sul mio giaciglio,"),
                array('','*',"non concederò sonno ai miei occhi"),
                array('','2',"né riposo alle mie palpebre,"),
                array('','*',"finché non trovi una sede per il Signore,"),
                array('','2',"una dimora per il potente di Giacobbe ».")
            ),
            array(
                array('','*',"Ecco, abbiamo saputo che era in Èfrata,"),
                array('','2',"l'abbiamo trovata nei campi di Iàar."),
                array('','*',"Entriamo nella sua dimora,"),
                array('','2',"prostriamoci allo sgabello dei suoi piedi.")
            ),
            array(
                array('','*',"Alzati, Signore, verso il luogo del tuo riposo,"),
                array('','2',"tu e l'arca della tua potenza."),
                array('','*',"I tuoi sacerdoti si vestano di giustizia,"),
                array('','2',"i tuoi fedeli cantino di gioia."),
                array('','*',"Per amore di Davide tuo servo"),
                array('','2',"non respingere il volto del tuo consacrato.")
            ),
            array(
                array('','+',"Il Signore ha giurato a Davide"),
                array('','*',"e non ritratterà la sua parola:"),
                array('','2',"« Il frutto delle tue viscere io metterò sul tuo trono!"),
                array('','+',"Se i tuoi figli custodiranno la mia alleanza"),
                array('','*',"e i precetti che insegnerò ad essi,"),
                array('','2',"anche i loro figli per sempre sederanno sul tuo trono ».")
            ),
            array(
                array('','*',"Il Signore ha scelto Sion,"),
                array('','2',"l'ha voluta per sua dimora:"),
                array('','*',"« Questo è il mio riposo per sempre;"),
                array('','2',"qui abiterò perché l'ho desiderato.")
            ),
            array(
                array('','*',"Benedirò tutti i suoi raccolti,"),
                array('','2',"sazierò di pane i suoi poveri."),
                array('','*',"Rivestirò di salvezza i suoi sacerdoti,"),
                array('','2',"esulteranno di gioia i suoi fedeli.")
            ),
            array(
                array('','*',"Là farò germogliare la potenza di Davide,"),
                array('','2',"preparerò una lampada al mio consacrato."),
                array('','*',"Coprirò di vergogna i suoi nemici,"),
                array('','2',"ma su di lui splenderà la corona ».")
            )
        )
    );

}
?>