<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 84 La nostra salvezza è vicina";

    //vespri mercoledì 
    $this->antifona[0]=array(
        "Sei stato buono",
        "con noi, Signore, hai perdonato l'iniquità del tuo popolo."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Signore, sei stato buono con la tua terra,"),
                array('','2',"hai ricondotto i deportati di Giacobbe."),
                array('','*',"Hai perdonato l'iniquità del tuo popolo,"),
                array('','2',"hai cancellato tutti i suoi peccati."),
                array('','*',"Hai deposto tutto il tuo sdegno"),
                array('','2',"e messo fine alla tua grande ira.")
            ),
            array(
                array('','*',"Rialzaci, Dio, nostra salvezza,"),
                array('','2',"e placa il tuo sdegno verso di noi."),
                array('','*',"Forse per sempre sarai adirato con noi,"),
                array('','2',"di età in età estenderai il tuo sdegno?")
            ),
            array(
                array('','*',"Non tornerai tu forse a darci vita,"),
                array('','2',"perché in te gioisca il tuo popolo?"),
                array('','*',"Mostraci, Signore, la tua misericordia"),
                array('','2',"e donaci la tua salvezza.")
            ),
            array(
                array('','+',"Ascolterò che cosa dice Dio, il Signore:"),
                array('','*',"egli annunzia la pace per il suo popolo, per i suoi fedeli,"),
                array('','2',"per chi ritorna a lui con tutto il cuore."),
                array('','*',"la sua salvezza è vicina a chi lo teme"),
                array('','2',"e la sua gloria abiterà la nostra terra.")
            ),
            array(
                array('','*',"Misericordia e verità s'incontreranno,"),
                array('','2',"giustizia e pace si baceranno."),
                array('','*',"La verità germoglierà dalla terra"),
                array('','2',"e la giustizia si affaccerà dal cielo.")
            ),
            array(
                array('','*',"Quando il Signore elargirà il suo bene,"),
                array('','2',"la nostra terra darà il suo frutto."),
                array('','*',"Davanti a lui camminerà la giustizia"),
                array('','2',"e sulla via dei suoi passi la salvezza.")
            )
        )
    );

}
?>