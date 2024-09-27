<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 34 Il Signore salva nella persecuzione";

    //sesta sabato
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
            "Sorgi",
            "in mio aiuto, Signore, dimmi: Sono io la tua salvezza."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, giudica chi mi accusa,"),
                array('','2',"combatti chi mi combatte."),
                array('','*',"Afferra i tuoi scudi"),
                array('','2',"e sorgi in mio aiuto.")
            ),
            array(
                array('','*',"Vibra la lancia e la scure,"),
                array('','2',"contro chi mi insegue."),
                array('','*',"Dì all'anima mia:"),
                array('','2',"« Sono io la tua salvezza ».")
            ),
            array(
                array('','*',"Siano confusi e coperti di ignominia"),
                array('','2',"quelli che attentano alla mia vita;"),
                array('','*',"retrocedano e siano umiliati"),
                array('','2',"quelli che tramano la mia sventura.")
            ),
            array(
                array('','*',"Siano come pula al vento"),
                array('','2',"e l'angelo del Signore li incalzi;"),
                array('','*',"la loro strada sia buia e scivolosa"),
                array('','2',"quando li insegue l'angelo del Signore.")
            ),
            array(
                array('','*',"Poiché senza motivo mi hanno teso una rete,"),
                array('','2',"senza motivo mi hanno scavato una fossa."),
                array('','+',"Li colga la bufera improvvisa,"),
                array('','*',"li catturi la rete che hanno tesa,"),
                array('','2',"siano travolti dalla tempesta.")
            ),
            array(
                array('','*',"Io invece esulterò nel Signore,"),
                array('','2',"per la gioia della sua salvezza."),
                array('','+',"Tutte le mie ossa dicano: « Chi è come te, Signore,"),
                array('','*',"che liberi il debole dal più forte,"),
                array('','2',"il misero e il povero dal predatore? ».")
            ),
            array(
                array('','*',"Sorgevano testimoni violenti,"),
                array('','2',"mi interrogavano su ciò che ignoravo,"),
                array('','*',"mi rendevano male per bene:"),
                array('','2',"una desolazione per la mia vita.")
            ),
            array(
                array('','+',"Io, quand'erano malati, vestivo di sacco,"),
                array('','*',"mi affliggevo col digiuno,"),
                array('','2',"riecheggiava nel mio petto la mia preghiera."),
                array('','*',"Mi angustiavo come per l'amico, per il fratello,"),
                array('','2',"come in lutto per la madre mi prostravo nel dolore.")
            ),
            array(
                array('','*',"Ma essi godono della mia caduta, si radunano,"),
                array('','2',"si radunano contro di me per colpirmi all'improvviso."),
                array('','+',"Mi dilaniano senza posa,"),
                array('','*',"mi mettono alla prova, scherno su scherno,"),
                array('','2',"contro di me digrignano i denti.")
            ),
            array(
                array('','+',"Fino a quando, Signore, starai a guardare?"),
                array('','*',"Libera la mia vita dalla loro violenza,"),
                array('','2',"dalle zanne dei leoni l'unico mio bene."),
                array('','*',"Ti loderò nella grande assemblea,"),
                array('','2',"ti celebrerò in mezzo a un popolo numeroso.")
            ),
            array(
                array('','*',"Non esultino su di me i nemici bugiardi,"),
                array('','2',"non strizzi l'occhio chi mi odia senza motivo."),
                array('','*',"Poiché essi non parlano di pace,"),
                array('','2',"contro gli umili della terra tramano inganni."),
                array('','*',"Spalancano contro di me la loro bocca;"),
                array('','2',"dicono con scherno: « Abbiamo visto con i nostri occhi! ».")
            ),
            array(
                array('','*',"Signore, tu hai visto, non tacere;"),
                array('','2',"Dio, da me non stare lontano."),
                array('','*',"Dèstati, svegliati per il mio giudizio,"),
                array('','2',"per la mia causa, Signore mio Dio.")
            ),
            array(
                array('','*',"Giudicami secondo la tua giustizia, Signore mio Dio,"),
                array('','2',"e di me non abbiano a gioire."),
                array('','*',"Non pensino in cuor loro: « Siamo soddisfatti! »."),
                array('','2',"Non dicano: « Lo abbiamo divorato ».")
            ),
            array(
                array('','+',"Sia confuso e svergognato,"),
                array('','*',"chi gode della mia sventura,"),
                array('','2',"sia coperto di vergogna e di ignominia chi mi insulta.")
            ),
            array(
                array('','+',"Esulti e gioisca chi ama il mio diritto,"),
                array('','*',"dica sempre: « Grande è il Signore"),
                array('','2',"che vuole la pace del suo servo »."),
                array('','*',"La mia lingua celebrerà la tua giustizia,"),
                array('','2',"canterà la tua lode per sempre.")
            )
        )
    );

}
?>