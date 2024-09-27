<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 7 (Gdt 16,1-2a. 13-15) Il Signore, creatore del mondo, protegge il suo popolo";

    //lodi mercioledì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Grande",
            "sei tu, Signore, meraviglioso nella forza, invincibile! Alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Grande",
            "sei tu, Signore, meraviglioso nella forza, invincibile!"
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Lodate il mio Dio con i timpani,"),
                array('','2',"cantate al Signore con cembali,"),
                array('','*',"elevate a lui l'accordo del salmo e della lode;"),
                array('','2',"esaltate e invocate il suo nome."),
                array('','*',"Poiché il Signore è il Dio"),
                array('','2',"che stronca le guerre.")
            ),
            array(
                array('','+',"Innalzerò al mio Dio un canto nuovo:"),
                array('','*',"Signore, grande sei tu e glorioso,"),
                array('','2',"mirabile nella tua potenza e invincibile."),
                array('','*',"Ti sia sottomessa ogni tua creatura:"),
                array('','2',"perché tu dicesti e tutte le cose furon fatte;"),
                array('','*',"mandasti il tuo Spirito e furono costruite"),
                array('','2',"e nessuno può resistere alla tua voce.")
            ),
            array(
                array('','*',"I monti sulle loro basi"),
                array('','2',"insieme con le acque sussulteranno,"),
                array('','*',"davanti a te le rocce si struggeranno come cera;"),
                array('','2',"ma a coloro che hanno il tuo timore tu sarai sempre propizio.")
            )
        )
    );

}
?>