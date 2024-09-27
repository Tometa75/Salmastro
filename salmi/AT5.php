<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 5 (Tb 13,2-10a) Dio castiga e salva";

    //lodi lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Benedite",
            "il Signore della giustizia, inneggiate al re dei secoli, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Benedite",
            "il Signore della giustizia, inneggiate al re dei secoli."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Benedetto Dio che vive in eterno;"),
                array('','2',"il suo regno dura per tutti i secoli;"),
                array('','*',"egli castiga e usa misericordia,"),
                array('','2',"fa scendere negli abissi della terra,"),
                array('','*',"fa risalire dalla grande perdizione"),
                array('','2',"e nulla sfugge alla sua mano.")
            ),
            array(
                array('','+',"Lodatelo, figli di Israele, davanti alle genti:"),
                array('','*',"egli vi ha disperso in mezzo ad esse"),
                array('','2',"per proclamare la sua grandezza."),
                array('','+',"Esaltatelo davanti ad ogni vivente,"),
                array('','*',"è lui il Signore, il nostro Dio,"),
                array('','2',"lui il nostro Padre, il Dio per tutti i secoli.")
            ),
            array(
                array('','*',"Vi castiga per le vostre ingiustizie,"),
                array('','2',"ma userà misericordia a tutti voi."),
                array('','*',"Vi raduna da tutte le genti,"),
                array('','2',"in mezzo alle quali siete stati dispersi.")
            ),
            array(
                array('','*',"Convertitevi a lui con tutto il cuore e con tutta l'anima,"),
                array('','2',"per fare la giustizia davanti a lui;"),
                array('','*',"e allora egli si convertirà a voi"),
                array('','2',"e non vi nasconderà il suo volto.")
            ),
            array(
                array('','*',"Ora contemplate ciò che ha operato con voi,"),
                array('','2',"e ringraziatelo con tutta la voce;"),
                array('','*',"benedite il Signore della giustizia"),
                array('','2',"ed esaltate il re dei secoli."),
                array('','*',"Io gli do lode nel paese del mio esilio"),
                array('','2',"e manifesto la sua forza e grandezza a un popolo di peccatori.")
            ),
            array(
                array('','*',"Convertitevi, o peccatori,"),
                array('','2',"e operate la giustizia davanti a lui;"),
                array('','*',"chi sa che non torni ad amarvi"),
                array('','2',"e vi usi misericordia?")
            ),
            array(
                array('','*',"Io esalto il mio Dio e celebro il re del cielo"),
                array('','2',"ed esulto per la sua grandezza."),
                array('','*',"Tutti ne parlino"),
                array('','2',"e diano lode a lui in Gerusalemme.")
            )
        )
    );

}
?>