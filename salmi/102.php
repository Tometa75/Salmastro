<?php
$this->closure['load']=function() {

    $this->titolo="Salmo 102 Inno alla misericordia di Dio";

    //vespri mercoledì 
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Benedici il Signore,",
            "anima mia, non dimenticare tanti suoi benefici."
        );
    }

    $this->antifona[1]=array(
        "Benedici il Signore,",
        "anima mia, non dimenticare tanti suoi benefici."
    );

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Benedici il Signore, anima mia,"),
                array('','2',"quanto è in me benedica il suo santo nome."),
                array('','*',"Benedici il Signore, anima mia,"),
                array('','2',"non dimenticare tanti suoi benefici.")
            ),
            array(
                array('','*',"Egli perdona tutte la tue colpe,"),
                array('','2',"guarisce tutte le tue malattie;"),
                array('','*',"salva dalla fossa la tua vita,"),
                array('','2',"ti corona di grazia e di misericordia;"),
                array('','*',"egli sazia di beni i tuoi giorni"),
                array('','2',"e tu rinnovi come aquila la tua giovinezza.")
            ),
            array(
                array('','*',"Il Signore agisce con giustizia"),
                array('','2',"e con diritto verso tutti gli oppressi."),
                array('','*',"Ha rivelato a Mosè le sue vie,"),
                array('','2',"ai figli d'Israele le sue opere.")
            ),
            array(
                array('','*',"Buono e pietoso è il Signore,"),
                array('','2',"lento all'ira e grande nell'amore."),
                array('','*',"Egli non continua a contestare"),
                array('','2',"e non conserva per sempre il suo sdegno."),
                array('','*',"Non ci tratta secondo i nostri peccati,"),
                array('','2',"non ci ripaga secondo le nostre colpe.")
            ),
            array(
                array('','*',"Come il cielo è alto sulla terra,"),
                array('','2',"così è grande la sua misericordia su quanti lo temono;"),
                array('','*',"come dista l'oriente dall'occidente,"),
                array('','2',"così allontana da noi le nostre colpe.")
            ),
            array(
                array('','*',"Come un padre ha pietà dei suoi figli,"),
                array('','2',"così il Signore ha pietà di quanti lo temono."),
                array('','*',"Perché egli sa di che siamo plasmati,"),
                array('','2',"ricorda che noi siamo polvere.")
            ),
            array(
                array('','*',"Come l'erba sono i giorni dell'uomo,"),
                array('','2',"come il fiore del campo, così egli fiorisce."),
                array('','*',"Lo investe il vento e più non esiste"),
                array('','2',"e il suo posto non lo riconosce.")
            ),
            array(
                array('','*',"La grazia del Signore è da sempre,"),
                array('','2',"dura in eterno per quanti lo temono;"),
                array('','+',"la sua giustizia per i figli dei figli,"), 
                array('','*',"per quanti custodiscono la sua alleanza"),
                array('','2',"e ricordano di osservare i suoi precetti."),
                array('','*',"Il Signore ha stabilito nel cielo il suo trono"),
                array('','2',"e il suo regno abbraccia l'universo.")
            ),
            array(
                array('','+',"Benedite il Signore, voi tutti suoi angeli,"),
                array('','*',"potenti esecutori dei suoi comandi,"),
                array('','2',"pronti alla voce della sua parola."),
                array('','*',"Benedite il Signore, voi tutte sue schiere,"),
                array('','2',"suoi ministri, che fate il suo volere."),
                array('','+',"Benedite il Signore, voi tutte opere sue,"),
                array('','*',"in ogni luogo del suo dominio."),
                array('','2',"Benedici il Signore, anima mia.")
            )
        )
    );

}
?>