<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 111';

    //vespri festivi
    $this->antifona[0]=array();

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Beato l'uomo che teme il Signore"),
                array('','2',"e trova grande gioia nei suoi comandamenti."),
                array('','*',"Potente sulla terra sarà la sua stirpe,"),
                array('','2',"la discendenza dei giusti sarà benedetta.")
            ),
            array(
                array('','*',"Onore e ricchezza nella sua casa,"),
                array('','2',"la sua giustizia rimane per sempre."),
                array('','*',"Spunta nelle tenebre come luce per i giusti,"),
                array('','2',"buono, misericordioso e giusto.")
            ),
            array(
                array('','*',"Felice l'uomo pietoso che dà in prestito,"),
                array('','2',"amministra i suoi beni con giustizia."),
                array('','*',"Egli non vacillerà in eterno:"),
                array('','2',"il giusto sarà sempre ricordato.")
            ),
            array(
                array('','*',"Non temerà annunzio di sventura,"),
                array('','2',"saldo è il suo cuore, confida nel Signore."),
                array('','*',"Sicuro è il suo cuore, non teme,"),
                array('','2',"finché trionferà dei suoi nemici.")
            ),
            array(
                array('','+',"Egli dona largamente ai poveri,"),
                array('','*',"la sua giustizia rimane per sempre,"),
                array('','2',"la sua potenza s'innalza nella gloria."),
                array('','+',"L'empio vede e si adira,"),
                array('','*',"digrigna i denti e si consuma."),
                array('','2',"Ma il desiderio degli empi fallisce.")
            )
        )
    );

}
?>