<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 26 (Is 38,10-14.17-20) Angosce di un moribondo, gioia di un risanato";

    //lodi lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Salvaci, Signore,",
            "in tutti i giorni della nostra vita, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Salvaci, Signore,",
            "in tutti i giorni della nostra vita."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Io dicevo: « A metà della mia vita"),
                array('','*',"me ne vado alle porte degli inferi;"),
                array('','2',"sono privato del resto dei miei anni »."),
                array('','*',"Dicevo: « Non vedrò più il Signore"),
                array('','2',"sulla terra dei viventi,"),
                array('','*',"non vedrò più nessuno"),
                array('','2',"fra gli abitanti di questo mondo.")
            ),
            array(
                array('','*',"La mia tenda è stata divelta e gettata lontano,"),
                array('','2',"come una tenda di pastori."),
                array('','+',"Come un tessitore hai arrotolato la mia vita,"),
                array('','*',"mi recidi dall'ordito."),
                array('','2',"in un giorno e una notte mi conduci alla fine ».")
            ),
            array(
                array('','*',"Io ho gridato fino al mattino."),
                array('','2',"Come un leone, così egli stritola tutte le mie ossa."),
                array('','*',"Pigolo come una rondine,"),
                array('','2',"gemo come una colomba."),
                array('','*',"Sono stanchi i miei occhi"),
                array('','2',"di guardare in alto.")
            ),
            array(
                array('','*',"Tu hai preservato la mia vita dalla fossa della distruzione,"),
                array('','2',"perché ti sei gettato dietro le spalle tutti i miei peccati."),
                array('','*',"Poiché non ti lodano gli inferi,"),
                array('','2',"né la morte ti canta inni;"),
                array('','*',"quanti scendono nella fossa"),
                array('','2',"nella tua fedeltà non sperano.")
            ),
            array(
                array('','*',"Il vivente, il vivente ti rende grazie"),
                array('','2',"come io faccio quest'oggi"),
                array('','*',"Il Padre farà conoscere ai figli"),
                array('','2',"la fedeltà del tuo amore.")
            ),
            array(
                array('','+',"Il Signore si è degnato di aiutarmi;"),
                array('','*',"per questo canteremo sulle cetre tutti i giorni della nostra vita,"),
                array('','2',"canteremo nel tempio del Signore.")
            )
        )
    );

}
?>