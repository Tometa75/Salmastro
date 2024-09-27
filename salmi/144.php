<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 144 Lode alla Maestà divina';

    //vespri martedì
    $this->antifona[0]=array(
        "Voglio benedirti,",
        "ogni giorno, e narrare agli uomini i tuoi prodigi."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Voglio benedirti,",
            "ogni giorno, e narrare agli uomini i tuoi prodigi."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"O Dio, mio re, voglio esaltarti"),
                array('','2',"e benedire il tuo nome in eterno e per sempre."),
                array('','*',"Ti voglio benedire ogni giorno,"),
                array('','2',"lodare il tuo nome in eterno e per sempre."),
                array('','*',"Grande è il Signore e degno di ogni lode,"),
                array('','2',"la sua grandezza non si può misurare.")
            ),
            array(
                array('','*',"Una generazione narra all'altra le tue opere,"),
                array('','2',"annunzia le tue meraviglie."),
                array('','*',"Proclamano lo splendore della tua gloria"),
                array('','2',"e raccontano i tuoi prodigi.")
            ),
            array(
                array('','*',"Dicono la stupenda tua potenza"),
                array('','2',"e parlano della tua grandezza."),
                array('','*',"Diffondono il ricordo della tua bontà immensa,"),
                array('','2',"acclamano la tua giustizia.")
            ),
            array(
                array('','*',"Paziente e misericordioso è il Signore,"),
                array('','2',"lento all'ira e ricco di grazia."),
                array('','*',"Buono è il Signore verso tutti,"),
                array('','2',"la sua tenerezza si espande su tutte le creature.")
            ),
            array(
                array('','*',"Ti lodino, Signore, tutte le tue opere"),
                array('','2',"e ti benedicano i tuoi fedeli."),
                array('','*',"Dicano la gloria del tuo regno"),
                array('','2',"e parlino della tua potenza,"),
                array('','*',"per manifestare agli uomini i tuoi prodigi"),
                array('','2',"e la splendida gloria del tuo regno.")
            ),
            array(
                array('','*',"Il tuo regno è regno di tutti i secoli,"),
                array('','2',"il tuo dominio si estende ad ogni generazione."),
                array('','*',"Il Signore sostiene quelli che vacillano"),
                array('','2',"e rialza chiunque è caduto.")
            ),
            array(
                array('','*',"Gli occhi di tutti sono rivolti a te in attesa"),
                array('','2',"e tu provvedi loro il cibo a suo tempo."),
                array('','*',"Tu apri la tua mano"),
                array('','2',"e sazi la fame di ogni vivente.")
            ),
            array(
                array('','*',"Giusto è il Signore in tutte le sue vie,"),
                array('','2',"santo in tutte le sue opere."),
                array('','*',"Il Signore è vicino a quanti lo invocano,"),
                array('','2',"a quanti lo cercano con cuore sincero.")
            ),
            array(
                array('','*',"Appaga il desiderio di quelli che lo temono,"),
                array('','2',"ascolta il loro grido e li salva."),
                array('','*',"Il Signore protegge quanti lo amano,"),
                array('','2',"ma disperde tutti gli empi.")
            ),
            array(
                array('','+',"Canti la mia bocca la lode del Signore."),
                array('','*',"Ogni vivente benedica il suo nome santo,"),
                array('','2',"in eterno e sempre.")
            )
        )
    );

}
?>