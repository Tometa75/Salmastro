<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 138 Dio vede tutto";

    //compieta martedì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "O Dio",
            "tu mi scruti e mi conosci: poni su di me la tua mano, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "O Dio",
            "tu mi scruti e mi conosci: poni su di me la tua mano."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, tu mi scruti e mi conosci,"),
                array('','2',"tu sai quando seggo e quando mi alzo."),
                array('','*',"Penetri da lontano i miei pensieri,"),
                array('','2',"mi scruti quando cammino e quando riposo.")
            ),
            array(
                array('','+',"Ti sono note tutte le mie vie;"),
                array('','*',"la mia parola non è ancora sulla lingua"),
                array('','2',"e tu, Signore, già la conosci tutta."),
                array('','*',"Alle spalle e di fronte mi circondi"),
                array('','2',"e poni su di me la tua mano."),
                array('','*',"Stupenda per me la tua saggezza,"),
                array('','2',"troppo alta, e io non la comprendo.")
            ),
            array(
                array('','*',"Dove andare lontano dal tuo spirito,"),
                array('','2',"dove fuggire dalla tua presenza?"),
                array('','*',"Se salgo in cielo, là tu sei,"),
                array('','2',"se scendo negli inferi, eccoti.")
            ),
            array(
                array('','*',"Se prendo le ali dell'aurora"),
                array('','2',"per abitare all'estremità del mare,"),
                array('','*',"anche là mi guida la tua mano"),
                array('','2',"e mi afferra la tua destra.")
            ),
            array(
                array('','*',"Se dico: « Almeno l'oscurità mi copra"),
                array('','2',"e intorno a me sia la notte »;"),
                array('','+',"nemmeno le tenebre per te sono oscure,"),
                array('','*',"e la notte è chiara come il giorno;"),
                array('','2',"per te le tenebre sono come luce.")
            ),
            array(
                array('','*',"Sei tu che hai creato le mie viscere"),
                array('','2',"e mi hai tessuto nel seno di mia madre."),
                array('','+',"Ti lodo, perché mi hai fatto come un prodigio;"),
                array('','*',"sono stupende le tue opere,"),
                array('','2',"tu mi conosci fino in fondo.")
            ),
            array(
                array('','+',"Non ti erano nascoste le mie ossa"),
                array('','*',"quando venivo formato nel segreto,"),
                array('','2',"intessuto nelle profondità della terra."),
                array('','*',"Ancora informe mi hanno visto i tuoi occhi"),
                array('','2',"e tutto era scritto nel tuo libro;"),
                array('','*',"i miei giorni erano fissati,"),
                array('','2',"quando ancora non ne esisteva uno.")
            ),
            array(
                array('','*',"Quanto profondi per me i tuoi pensieri,"),
                array('','2',"quanto grande il loro numero, o Dio;"),
                array('','*',"se li conto sono più della sabbia,"),
                array('','2',"se li credo finiti, con te sono ancora.")
            ),
            array(
                array('','*',"Se Dio sopprimesse i peccatori!"),
                array('','2',"Allontanatevi da me, uomini sanguinari."),
                array('','*',"Essi parlano contro di te con inganno:"),
                array('','2',"contro di te insorgono con frode.")
            ),
            array(
                array('','*',"Non odio, forse, Signore, quelli che ti odiano"),
                array('','2',"e non detesto i tuoi nemici?"),
                array('','*',"Li detesto con odio implacabile"),
                array('','2',"come se fossero miei nemici.")
            ),
            array(
                array('','*',"Scrutami, Dio, e conosci il mio cuore,"),
                array('','2',"provami e conosci i miei pensieri:"),
                array('','*',"vedi se percorro una via di menzogna"),
                array('','2',"e guidami sulla via della vita.")
            )
        )
    );

}
?>