<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 30 Supplica fiduciosa nell'afflizione";

    //compieta venerdì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Nascondimi",
            "al riparo del tuo volto: nelle tue mani sono i miei giorni, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Nascondimi",
            "al riparo del tuo volto: nelle tue mani sono i miei giorni."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"In te, Signore, mi sono rifugiato,"),
                array('','*',"mai sarò deluso;"),
                array('','2',"per la tua giustizia salvami."),
                array('','*',"Porgi a me l'orecchio,"),
                array('','2',"vieni presto a liberarmi."),
                array('','*',"Sii per me la rupe che mi accoglie,"),
                array('','2',"la cinta di riparo che mi salva.")
            ),
            array(
                array('','*',"Tu sei la mia roccia e il mio baluardo,"),
                array('','2',"per il tuo nome dirigi i miei passi."),
                array('','*',"Scioglimi dal laccio che mi hanno teso,"),
                array('','2',"perché sei tu la mia difesa.")
            ),
            array(
                array('','*',"Mi affido alle tue mani;"),
                array('','2',"tu mi riscatti, Signore, Dio fedele."),
                array('','*',"Tu detesti chi serve idoli falsi,"),
                array('','2',"ma io ho fede nel Signore.")
            ),
            array(
                array('','+',"Esulterò di gioia per la tua grazia,"),
                array('','*',"perché hai guardato alla mia miseria,"),
                array('','2',"hai conosciuto le mie angosce;"),
                array('','*',"non mi hai consegnato nelle mani del nemico,"),
                array('','2',"hai guidato al largo i miei passi.")
            ),
            array(
                array('','+',"Abbi pietà di me, Signore, sono nell'affanno;"),
                array('','*',"per il pianto si struggono i miei occhi,"),
                array('','2',"la mia anima e le mie viscere."),
                array('','*',"Si consuma nel dolore la mia vita,"),
                array('','2',"i miei anni passano nel gemito;"),
                array('','*',"inaridisce per la pena il mio vigore,"),
                array('','2',"si dissolvono tutte le mie ossa.")
            ),
            array(
                array('','+',"Sono l'obbrobrio dei miei nemici, il disgusto dei miei vicini,"),
                array('','*',"l'orrore dei miei conoscenti;"),
                array('','2',"chi mi vede per strada mi sfugge."),
                array('','*',"Sono caduto in oblio come un morto,"),
                array('','2',"sono divenuto un rifiuto.")
            ),
            array(
                array('','*',"Se odo la calunnia di molti,"),
                array('','2',"il terrore mi circonda:"),
                array('','*',"quando insieme contro di me congiurano,"),
                array('','2',"tramano di togliermi la vita.")
            ),
            array(
                array('','+',"Ma io confido in te, Signore;"),
                array('','*',"dico: « Tu sei il mio Dio,"),
                array('','2',"nelle tue mani sono i miei giorni »."),
                array('','*',"Liberami dalla mano dei miei nemici,"),
                array('','2',"dalla stretta dei miei persecutori:"),
                array('','*',"fa' splendere il tuo volto sul tuo servo,"),
                array('','2',"salvami per la tua misericordia.")
            ),
            array(
                array('','*',"Signore, ch'io non resti confuso, perché ti ho invocato;"),
                array('','2',"siano confusi gli empi, tacciano negli inferi."),
                array('','+',"Fa' tacere le labbra di menzogna,"),
                array('','*',"che dicono insolenze contro il giusto"),
                array('','2',"con orgoglio e disprezzo.")
            ),
            array(
                array('','*',"Quanto è grande la tua bontà, Signore!"),
                array('','2',"La riservi per coloro che ti temono,"),
                array('','*',"ne ricolmi chi in te si rifugia"),
                array('','2',"davanti agli occhi di tutti.")
            ),
            array(
                array('','*',"Tu li nascondi al riparo del tuo volto,"),
                array('','2',"lontano dagli intrighi degli uomini;"),
                array('','*',"li metti al sicuro nella tua tenda,"),
                array('','2',"lontano dalla rissa delle lingue.")
            ),
            array(
                array('','+',"Benedetto il Signore,"),
                array('','*',"che ha fatto per me meraviglie di grazia"),
                array('','2',"in una fortezza inaccessibile."),
                array('','*',"Io dicevo nel mio sgomento:"),
                array('','2',"« Sono escluso dalla tua presenza »."),
                array('','*',"Tu invece hai ascoltato la voce della mia preghiera"),
                array('','2',"quando a te gridavo aiuto.")
            ),
            array(
                array('','+',"Amate il Signore, voi tutti suoi santi;"),
                array('','*',"il Signore protegge i suoi fedeli"),
                array('','2',"e ripaga oltre misura l'orgoglioso."),
                array('','*',"Siate forti, riprendete coraggio,"),
                array('','2',"o voi tutti che sperate nel Signore.")
            )
        )
    );

}
?>