<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 117 Canto di gioia e di vittoria';

    //sesta domenica
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
            "Mia forza",
            "e mio canto è il Signore: annunzierò tutte le sue opere."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Celebrate il Signore, perché è buono;"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Dica Israele che egli è buono:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lo dica la casa di Aronne:"),
                array('','2',"eterna è la sua misericordia."),
                array('','*',"Lo dica chi teme Dio:"),
                array('','2',"eterna è la sua misericordia.")
            ),
            array(
                array('','*',"Nell'angoscia ho gridato al Signore,"),
                array('','2',"mi ha risposto, il Signore, e mi ha tratto in salvo."),
                array('','*',"Il Signore è con me, non ho timore;"),
                array('','2',"che cosa può farmi l'uomo?"),
                array('','*',"Il Signore è con me, è mio aiuto,"),
                array('','2',"sfiderò i miei nemici.")
            ),
            array(
                array('','*',"È meglio rifugiarsi nel Signore"),
                array('','2',"che confidare nell'uomo."),
                array('','*',"È meglio rifugiarsi nel Signore"),
                array('','2',"che confidare nei potenti.")
            ),
            array(
                array('','*',"Tutti i popoli mi hanno circondato,"),
                array('','2',"ma nel nome del Signore li ho sconfitti."),
                array('','*',"Mi hanno circondato, mi hanno accerchiato,"),
                array('','2',"ma nel nome del Signore li ho sconfitti."),
                array('','+',"Mi hanno circondato come api,"),
                array('','*',"come fuoco che divampa tra le spine,"),
                array('','2',"ma nel nome del Signore li ho sconfitti.")
            ),
            array(
                array('','*',"Mi avevano spinto con forza per farmi cadere,"),
                array('','2',"ma il Signore è stato mio aiuto."),
                array('','*',"Mia forza e mio canto è il Signore,"),
                array('','2',"egli è stato la mia salvezza.")
            ),
            array(
                array('','*',"Grida di giubilo e di vittoria,"),
                array('','2',"nelle tende dei giusti:"),
                array('','+',"la destra del Signore ha fatto meraviglie,"),
                array('','*',"la destra del Signore si è alzata,"),
                array('','2',"la destra del Signore ha fatto meraviglie.")
            ),
            array(
                array('','*',"Non morirò, resterò in vita"),
                array('','2',"e annunzierò le opere del Signore."),
                array('','*',"Il Signore mi ha provato duramente,"),
                array('','2',"ma non mi ha consegnato alla morte.")
            ),
            array(
                array('','*',"Apritemi le porte della giustizia:"),
                array('','2',"entrerò a rendere grazie al Signore."),
                array('','*',"È questa la porta del Signore,"),
                array('','2',"per essa entrano i giusti."),
                array('','*',"Ti rendo grazie, perché mi hai esaudito,"),
                array('','2',"perché sei stato la mia salvezza.")
            ),
            array(
                array('','*',"La pietra scartata dai costruttori"),
                array('','2',"è divenuta testata d'angolo;"),
                array('','*',"ecco l'opera del Signore:"),
                array('','2',"una meraviglia ai nostri occhi."),
                array('','*',"Questo è il giorno fatto dal Signore:"),
                array('','2',"rallegriamoci ed esultiamo in esso.")
            ),
            array(
                array('','*',"Dona, Signore, la tua salvezza,"),
                array('','2',"dona, Signore, la tua vittoria!"),
                array('','*',"Benedetto colui che viene nel nome del Signore."),
                array('','2',"Vi benediciamo dalla casa del Signore;"),
                array('','+',"Dio, il Signore è nostra luce."),
                array('','*',"Ordinate il corteo con rami frondosi"),
                array('','2',"fino ai lati dell'altare.")
            ),
            array(
                array('','*',"Sei tu il mio Dio e ti rendo grazie,"),
                array('','2',"sei il mio Dio e ti esalto."),
                array('','*',"Celebrate il Signore, perché è buono:"),
                array('','2',"eterna è la sua misericordia.")
            )
        )
    );

}
?>