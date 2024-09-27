<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 22 Il buon pastore';

    //vespri giovedì
    $this->antifona[0]=array(
        "Tu sei",
        "il mio pastore, non temo alcun male."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Il Signore è il mio pastore:"),
                array('','2',"non manco di nulla;"),
                array('','*',"su pascoli erbosi mi fa riposare,"),
                array('','2',"ad acque tranquille mi conduce."),
                array('','*',"Mi rinfranca, mi guida per il giusto cammino,"),
                array('','2',"per amore del suo nome.")
            ),
            array(
                array('','+',"Se dovessi camminare in una valle oscura,"),
                array('','*',"non temerei alcun male,"),
                array('','2',"perché tu sei con me, Signore."),
                array('','*',"Il tuo bastone e il tuo vincastro"),
                array('','2',"mi danno sicurezza.")
            ),
            array(
                array('','*',"Davanti a me tu prepari una mensa"),
                array('','2',"sotto gli occhi dei miei nemici;"),
                array('','*',"cospargi di olio il mio capo."),
                array('','2',"Il mio calice trabocca.")
            ),
            array(
                array('','*',"Felicità e grazia mi saranno compagne"),
                array('','2',"tutti i giorni della mia vita,"),
                array('','*',"e abiterò nella casa del Signore"),
                array('','2',"per lunghissimi anni.")
            )
        )
    );

}
?>