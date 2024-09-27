<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 96 La gloria del Signore nel giudizio";

    //lodi mercoledì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Tu sei",
            "l'Altissimo su tutta la terra."
        );
    }

    $this->antifona[1]=array(
        "Tu sei",
        "l'Altissimo su tutta la terra."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Il Signore regna, esulti la terra,"),
                array('','2',"gioiscano le isole tutte."),
                array('','*',"Nubi e tenebre lo avvolgono,"),
                array('','2',"giustizia e diritto sono la base del suo trono.")
            ),
            array(
                array('','*',"Davanti a lui cammina il fuoco"),
                array('','2',"e brucia tutt'intorno i suoi nemici."),
                array('','*',"Le sue folgori rischiarano il mondo:"),
                array('','2',"vede e sussulta la terra.")
            ),
            array(
                array('','*',"I monti fondono come cera davanti al Signore,"),
                array('','2',"davanti al Signore di tutta la terra."),
                array('','*',"I cieli annunziano la sua giustizia"),
                array('','2',"e tutti i popoli contemplano la sua gloria.")
            ),
            array(
                array('','+',"Siano confusi tutti gli adoratori di statue"),
                array('','*',"e chi si gloria dei propri idoli."),
                array('','2',"Si prostrino a lui tutti gli dei!"),
                array('','+',"Ascolta Sion e ne gioisce,"),
                array('','*',"esultano le città di Giuda"),
                array('','2',"per i tuoi giudizi, Signore."),
                array('','*',"Perché tu sei, Signore, l'Altissimo su tutta la terra,"),
                array('','2',"tu sei eccelso sopra tutti gli dei.")
            ),
            array(
                array('','+',"Odiate il male, voi che amate il Signore:"),
                array('','*',"lui che custodisce la vita dei suoi fedeli"),
                array('','2',"li strapperà dalle mani degli empi."),
                array('','*',"Una luce si è levata per il giusto,"),
                array('','2',"gioia per i retti di cuore."),
                array('','*',"Rallegratevi, giusti, nel Signore,"),
                array('','2',"rendete grazie al suo santo nome.")
            )
        )
    );

}
?>