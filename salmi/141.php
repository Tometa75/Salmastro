<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 141 Sei tu il mio rifugio';

    //vespri venerdì
    $this->antifona[0]=array(
        "Liberami",
        "dall'angoscia, o Dio: renderò grazie al tuo nome."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Con la mia voce al Signore grido aiuto,"),
                array('','2',"con la mia voce supplico il Signore;"),
                array('','*',"davanti a lui effondo il mio lamento,"),
                array('','2',"al suo cospetto sfogo la mia angoscia.")
            ),
            array(
                array('','*',"Mentre il mio spirito vien meno,"),
                array('','2',"tu conosci la mia via."),
                array('','*',"Nel sentiero dove cammino"),
                array('','2',"mi hanno teso un laccio.")
            ),
            array(
                array('','*',"Guarda a destra e vedi:"),
                array('','2',"nessuno mi riconosce."),
                array('','*',"Non c'è per me via di scampo,"),
                array('','2',"nessuno ha cura della mia vita.")
            ),
            array(
                array('','+',"Io grido a te, Signore;"),
                array('','*',"dico: Sei tu il mio rifugio,"),
                array('','2',"sei tu la mia sorte nella terra dei viventi."),
                array('','*',"Ascolta la mia supplica:"),
                array('','2',"ho toccato il fondo dell'angoscia."),
                array('','*',"Salvami dai miei persecutori"),
                array('','2',"perché sono di me più forti.")
            ),
            array(
                array('','*',"Strappa dal carcere la mia vita,"),
                array('','2',"perché io renda grazie al tuo nome:"),
                array('','*',"i giusti mi faranno corona"),
                array('','2',"quando mi concederai la tua grazia.")
            )
        )
    );

}
?>