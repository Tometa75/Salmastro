<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 47 Azione di grazie per la salvezza del popolo';

    //vespri lunedì
    $this->antifona[0]=array(
        "Grande sei, Dio,",
        "nella città santa: l'hai fondata per sempre."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Grande sei, Dio,",
            "nella città santa: l'hai fondata per sempre."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Grande è il Signore e degno di ogni lode"),
                array('','2',"nella città del nostro Dio."),
                array('','*',"Il suo monte santo, altura stupenda,"),
                array('','2',"è la gioia di tutta la terra.")
            ),
            array(
                array('','*',"Il monte Sion, dimora divina,"),
                array('','2',"è la città del grande Sovrano."),
                array('','*',"Dio nei suoi baluardi"),
                array('','2',"è apparso fortezza inespugnabile.")
            ),
            array(
                array('','*',"Ecco, i re si sono alleati,"),
                array('','2',"sono avanzati insieme."),
                array('','*',"Essi hanno visto:"),
                array('','2',"attoniti e presi dal panico, sono fuggiti.")
            ),
            array(
                array('','*',"Là sgomento li ha colti,"),
                array('','2',"doglie come di partoriente,"),
                array('','*',"simile al vento orientale"),
                array('','2',"che squarcia le navi di Tarsis.")
            ),
            array(
                array('','+',"Come avevamo udito, così abbiamo visto nella città del Signore degli eserciti,"),
                array('','*',"nella città del nostro Dio;"),
                array('','2',"Dio l'ha fondata per sempre.")
            ),
            array(
                array('','*',"Ricordiamo, Dio, la tua misericordia"),
                array('','2',"dentro il tuo tempio."),
                array('','+',"Come il tuo nome, o Dio,"),
                array('','*',"così la tua lode si estende sino ai confini della terra;"),
                array('','2',"è piena di giustizia la tua destra.")
            ),
            array(
                array('','+',"Gioisca il monte di Sion,"),
                array('','*',"esultino le città di Giuda"),
                array('','2',"a motivo dei tuoi giudizi."),
                array('','*',"Circondate Sion, giratele intorno,"),
                array('','2',"contate le sue torri."),
                array('','+',"Osservate i suoi baluardi,"),
                array('','*',"passate in rassegna le sue fortezze,"),
                array('','2',"per narrare alla generazione futura:")
            ),
            array(
                array('','+',"Questo è il Signore, nostro Dio"),
                array('','*',"in eterno, sempre:"),
                array('','2',"egli è colui che ci guida.")
            )
        )
    );

}
?>