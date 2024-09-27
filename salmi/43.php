<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 43 Il popolo di Dio nella sventura';

    //sesta mercoledì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    elseif ($this->actual['tempo']=='A') {
        $this->antifona[0]=array(
            "L'angelo Gabriele",
            "disse a Maria: Ave, piena di grazia, il signore è con te; tu sei benedetta fra le donne."
        );
    }
    elseif ($this->actual['tempo']=='N') {
        $this->antifona[0]=array(
            "Maria",
            "meditava nel suo cuore gli eventi meravigliosi del suo Figlio."
        );
    }
    elseif ($this->actual['tempo']=='Q') {
        $this->antifona[0]=array(
            "Io sono il Vivente,",
            "dice il Signore: non voglio la morte del peccatore, ma che si converta e viva."
        );
    }
    else {
        $this->antifona[0]=array(
            "Destati,",
            "Signore, non ci respingere per sempre."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Dio, con i nostri orecchi abbiamo udito,"),
                array('','*',"i nostri padri ci hanno raccontato l'opera che hai compiuto ai loro giorni,"),
                array('','2',"nei tempi antichi. Tu per piantarli,"),
                array('','*',"con la tua mano hai sradicato le genti,"),
                array('','2',"per far loro posto, hai distrutto i popoli.")
            ),
            array(
                array('','*',"Poiché non con la spada conquistarono la terra,"),
                array('','2',"né fu il loro braccio a salvarli;"),
                array('','*',"ma il tuo braccio e la tua destra e la luce del tuo volto,"),
                array('','2',"perché tu li amavi.")
            ),
            array(
                array('','*',"Sei tu il mio re, Dio mio,"),
                array('','2',"che decidi vittorie per Giacobbe."),
                array('','*',"Per te abbiamo respinto i nostri avversari"),
                array('','2',"nel tuo nome abbiamo annientato i nostri aggressori.")
            ),
            array(
                array('','*',"Infatti nel mio arco non ho confidato"),
                array('','2',"e non la mia spada mi ha salvato,"),
                array('','*',"ma tu ci hai salvati dai nostri avversari,"),
                array('','2',"hai confuso i nostri nemici."),
                array('','*',"In Dio ci gloriamo ogni giorno,"),
                array('','2',"celebrando senza fine il tuo nome.")
            ),
            array(
                array('','*',"Ma ora ci hai respinti e coperti di vergogna,"),
                array('','2',"e più non esci con le nostre schiere."),
                array('','*',"Ci hai fatti fuggire di fronte agli avversari"),
                array('','2',"e i nostri nemici ci hanno spogliati.")
            ),
            array(
                array('','*',"Ci hai consegnato come pecore da macello,"),
                array('','2',"ci hai dispersi in mezzo alle nazioni."),
                array('','*',"Hai venduto il tuo popolo per niente,"),
                array('','2',"sul loro prezzo non hai guadagnato.")
            ),
            array(
                array('','*',"Ci hai resi ludibrio dei nostri vicini,"),
                array('','2',"scherno e obbrobrio a chi ci sta intorno."),
                array('','*',"Ci hai resi la favola dei popoli,"),
                array('','2',"su di noi le nazioni scuotono il capo.")
            ),
            array(
                array('','*',"L'infamia mi sta sempre davanti"),
                array('','2',"e la vergogna copre il mio volto"),
                array('','*',"per la voce di chi insulta e bestemmia,"),
                array('','2',"davanti al nemico che brama vendetta.")
            ),
            array(
                array('','+',"Tutto questo ci è accaduto"),
                array('','*',"e non ti avevamo dimenticato,"),
                array('','2',"non avevamo tradito la tua alleanza."),
                array('','*',"Non si era volto indietro il nostro cuore,"),
                array('','2',"i nostri passi non avevano lasciato il tuo sentiero;"),
                array('','*',"ma tu ci hai abbattuti in un luogo di sciacalli"),
                array('','2',"e ci hai avvolti di ombre tenebrose.")
            ),
            array(
                array('','*',"Se avessimo dimenticato il nome del nostro Dio"),
                array('','2',"e teso le mani verso un dio straniero,"),
                array('','*',"forse che Dio non lo avrebbe scoperto,"),
                array('','2',"lui che conosce i segreti del cuore?"),
                array('','*',"Per te ogni giorno siamo messia a morte,"),
                array('','2',"stimati come pecore da macello.")
            ),
            array(
                array('','*',"Svegliati, perché dormi, Signore?"),
                array('','2',"Destati, non ci respingere per sempre."),
                array('','*',"Perché nascondi il tuo volto,"),
                array('','2',"dimentichi la nostra miseria e oppressione?")
            ),
            array(
                array('','*',"Poiché siamo prostrati nella polvere,"),
                array('','2',"il nostro corpo è steso a terra."),
                array('','*',"Sorgi, vieni in nostro aiuto;"),
                array('','2',"salvaci per la tua misericordia.")
            )
        )
    );

}
?>