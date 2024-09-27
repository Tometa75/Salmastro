<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 5 Preghiera del mattino';

    //lodi giovedì
    $this->antifona[0]=array(
        "Ascolta",
        "la mia voce, Signore; al mattino t'invoco e sto in attesa."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Ascolta",
            "la mia voce, Signore; al mattino t'invoco e sto in attesa."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Porgi l'orecchio, Signore, alle mie parole:"),
                array('','2',"intendi il mio lamento."),
                array('','+',"Ascolta la voce del mio grido,"),
                array('','*',"o mio re e mio Dio,"),
                array('','2',"perché ti prego, Signore.")
            ),
            array(
                array('','*',"Al mattino ascolta la mia voce;"),
                array('','2',"fin dal mattino t'invoco e sto in attesa."),
                array('','+',"Tu non sei un Dio che si compiace del male;"),
                array('','*',"presso di te il malvagio non trova dimora;"),
                array('','2',"gli stolti non sostengono i tuo sguardo."),
                array('','+',"Tu detesti chi fa il male,"),
                array('','*',"fai perire i bugiardi."),
                array('','2',"Il Signore detesta sanguinari e ingannatori.")
            ),
            array(
                array('','+',"Ma io per la tua grande misericordia"),
                array('','*',"entrerò nella tua casa;"),
                array('','2',"mi prostrerò con timore nel tuo santo tempio."),
                array('','*',"Signore, guidami con giustizia di fronte ai miei nemici;"),
                array('','2',"spianami davanti il tuo cammino.")
            ),
            array(
                array('','*',"Non c'è sincerità sulla loro bocca,"),
                array('','2',"è pieno di perfidia il loro cuore;"),
                array('','*',"la loro gola è un sepolcro aperto,"),
                array('','2',"la loro lingua è tutta adulazione."),
                array('','+',"Condannali, o Dio, soccombano alle loro trame,"),
                array('','*',"per tanti loro delitti disperdili,"),
                array('','2',"perché a te si sono ribellati.")
            ),
            array(
                array('','*',"Gioiscano quanti in te si rifugiano,"),
                array('','2',"esultino senza fine."),
                array('','*',"Tu li proteggi e in te si allieteranno"),
                array('','2',"quanti amano il tuo nome."),
                array('','*',"Signore, tu benedici il giusto:"),
                array('','2',"come scudo lo copre la tua benevolenza.")
            )
        )
    );

}
?>