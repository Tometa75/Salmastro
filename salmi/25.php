<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 25 Preghiera fiduciosa di un innocente';

    //vespri martedì
    $this->antifona[0]=array(
        "Signore,",
        "amo la casa dove dimori; riscattami e abbi misericordia!"
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Signore, fammi giustizia:"),
                array('','*',"nell'integrità ho camminato,"),
                array('','2',"confido nel Signore, non potrò vacillare."),
                array('','*',"Scrutami, Signore, e mettimi alla prova,"),
                array('','2',"raffinami al fuoco il cuore e la mente.")
            ),
            array(
                array('','*',"La tua bontà è davanti ai miei occhi"),
                array('','2',"e nella tua verità dirigo i miei passi."),
                array('','*',"Non siedo con uomini falsi"),
                array('','2',"e non frequento i simulatori."),
                array('','*',"Odio l'alleanza dei malvagi,"),
                array('','2',"non mi associo con gli empi.")
            ),
            array(
                array('','*',"Lavo nell'innocenza le mie mani"),
                array('','2',"e giro attorno al tuo altare, Signore,"),
                array('','*',"per far risuonare voci di lode"),
                array('','2',"e per narrare tutte le tue meraviglie."),
                array('','*',"Signore, amo la casa dove dimori"),
                array('','2',"e il luogo dove abita la tua gloria.")
            ),
            array(
                array('','*',"Non travolgermi insieme ai peccatori,"),
                array('','2',"con gli uomini di sangue non perder la mia vita,"),
                array('','*',"perché nelle loro mani è la perfidia,"),
                array('','2',"la loro destra è piena di regali.")
            ),
            array(
                array('','*',"Integro è invece il mio cammino;"),
                array('','2',"riscattami e abbi misericordia."),
                array('','*',"Il mio piede sta su terra piana;"),
                array('','2',"nelle assemblee benedirò il Signore.")
            )
        )
    );

}
?>