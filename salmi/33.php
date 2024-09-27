<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 33 Il Signore è la salvezza dei giusti';

    //vespri lunedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Guardate al Signore,",
            "la sua luce vi farà splendenti, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Guardate al Signore,",
            "la sua luce vi farà splendenti."
        );
    }

    $this->antifona[1]= $this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Benedirò il Signore in ogni tempo,"),
                array('','2',"sulla mia bocca sempre la sua lode."),
                array('','*',"Io mi glorio nel Signore,"),
                array('','2',"ascoltino gli umili e si rallegrino."),
                array('','*',"Celebrate con me il Signore,"),
                array('','2',"esaltiamo insieme il suo nome.")
            ),
            array(
                array('','*',"Ho cercato il Signore e mi ha risposto"),
                array('','2',"e da ogni timore mi ha liberato."),
                array('','*',"Guardate a lui e sarete raggianti,"),
                array('','2',"non saranno confusi i vostri volti.")
            ),
            array(
                array('','*',"Questo povero grida e il Signore lo ascolta,"),
                array('','2',"lo libera da tutte le sue angosce."),
                array('','*',"L'angelo del Signore si accampa"),
                array('','2',"attorno a quelli che lo temono e li salva.")
            ),
            array(
                array('','*',"Gustate e vedete quanto è buono il Signore;"),
                array('','2',"beato l'uomo che in lui si rifugia."),
                array('','*',"Temete il Signore, suoi santi,"),
                array('','2',"nulla manca a coloro che lo temono."),
                array('','*',"I ricchi impoveriscono e hanno fame,"),
                array('','2',"ma chi cerca il Signore non manca di nulla.")
            ),
            array(
                array('','*',"Venite, figli, ascoltatemi;"),
                array('','2',"v'insegnerò il timore del Signore."),
                array('','*',"C'è qualcuno che desidera la vita"),
                array('','2',"e brama lunghi giorni per gustare il bene?")
            ),
            array(
                array('','*',"Preserva la lingua dal male,"),
                array('','2',"le labbra da parole bugiarde."),
                array('','*',"Sta lontano dal male e fa' il bene,"),
                array('','2',"cerca la pace e perseguila.")
            ),
            array(
                array('','*',"Gli occhi del Signore sui giusti,"),
                array('','2',"i suoi orecchi al loro grido di aiuto."),
                array('','*',"Il volto del Signore contro i malfattori,"),
                array('','2',"per cancellarne dalla terra il ricordo.")
            ),
            array(
                array('','*',"Gridano e il Signore li ascolta,"),
                array('','2',"li salva da tutte le loro angosce."),
                array('','*',"Il Signore è vicino a chi ha il cuore ferito,"),
                array('','2',"egli salva gli spiriti affranti.")
            ),
            array(
                array('','*',"Molte sono le sventure del giusto,"),
                array('','2',"ma lo libera da tutte il Signore."),
                array('','*',"Preserva tutte le sue ossa,"),
                array('','2',"neppure uno sarà spezzato.")
            ),
            array(
                array('','*',"La malizia uccide l'empio"),
                array('','2',"e chi odia il giusto sarà punito."),
                array('','*',"Il Signore riscatta la vita dei suoi servi,"),
                array('','2',"chi in lui si rifugia non sarà condannato.")
            )
        )
    );

}
?>