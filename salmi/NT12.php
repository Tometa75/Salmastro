<?php
$this->closure['load']=function() {

    $this->titolo="Cantico NT 12 (Col 1,3.12-20) Cristo fu generato prima di ogni creatura, è il primogenito di coloro che risuscitano dai morti";

    //vespri mercoledì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Generato",
            "prima di ogni creatura, Cristo è il re dell'universo."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ringraziamo con gioia Dio,"),
                array('','2',"Padre del Signore nostro Gesù Cristo,"),
                array('','*',"perché ci ha messi in grado di partecipare"),
                array('','2',"alla sorte dei santi nella luce,")
            ),
            array(
                array('','*',"ci ha liberati dal potere delle tenebre,"),
                array('','2',"ci ha trasferiti nel regno del suo Figlio diletto,"),
                array('','*',"per opera del quale abbiamo la redenzione,"),
                array('','2',"la remissione dei peccati.")
            ),
            array(
                array('','*',"Cristo è immagine del Dio invisibile,"),
                array('','2',"generato prima di ogni creatura;"),
                array('','*',"è prima di tutte le cose"),
                array('','2',"e tutte in lui sussistono.")
            ),
            array(
                array('','*',"Tutte le cose sono state create per mezzo di lui"),
                array('','2',"e in vista di lui:"),
                array('','*',"quelle nei cieli e quelle sulla terra,"),
                array('','2',"quelle visibili e quelle invisibili.")
            ),
            array(
                array('','*',"Egli è il capo del corpo, che è la Chiesa;"),
                array('','2',"è il principio di tutto,"),
                array('','*',"il primogenito di coloro che risuscitano dai morti,"),
                array('','2',"per ottenere il primato su tutte le cose.")
            ),
            array(
                array('','*',"Piacque a Dio di far abitare in lui ogni pienezza,"),
                array('','2',"per mezzo di lui riconciliare a sé tutte le cose,"),
                array('','*',"rappacificare con il sangue della sua croce,"),
                array('','2',"gli esseri della terra e quelli del cielo.")
            )
        )
    );

}
?>