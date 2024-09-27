<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 4 (1Cr 29,10-13) Solo a Dio l'onore e la gloria";

    //lodi lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Lodiamo",
            "il tuo nome glorioso, Signore, nostro Dio, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Lodiamo",
            "il tuo nome glorioso, Signore, nostro Dio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Sii benedetto, Signore Dio d'Israele, nostro Padre,"),
                array('','2',"ora e sempre."),
                array('','+',"Tua, Signore, è la grandezza, la potenza,"),
                array('','*',"la gloria, la maestà e lo splendore,"),
                array('','2',"perché tutto, nei cieli e sulla terra, è tuo.")
            ),
            array(
                array('','*',"Tuo è il regno, Signore;"),
                array('','2',"tu ti innalzi sovrano sopra ogni cosa."),
                array('','*',"Da te provengono ricchezza e gloria;"),
                array('','2',"tu domini tutto;")
            ),
            array(
                array('','*',"nella tua mano c'è forza e potenza;"),
                array('','2',"dalla tua mano ogni grandezza e potere."),
                array('','*',"Per questo, nostro Dio, ti ringraziamo"),
                array('','2',"e lodiamo il tuo nome glorioso.")
            )
        )
    );

}
?>