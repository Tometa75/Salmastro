<?php
$this->closure['load']=function() {

    $this->titolo='Salmo 91 Lode al Signore Creatore';

    //lodi sabato
    $this->antifona[0]=array(
        "Annunziate",
        "al mattino il suo amore, la sua fedeltà in ogni tempo."
    );

    if ($this->actual['tempo']=='P') {
        $this->antifona[1]=array(
            "Alleluia,",
            "alleluia, alleluia."
        );
    }
    else {
        $this->antifona[1]=array(
            "Annunziate",
            "al mattino il suo amore, la sua fedeltà in ogni tempo."
        );
    }

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"È bello dar lode al Signore"),
                array('','2',"e cantare al tuo nome, o Altissimo,"),
                array('','*',"annunziare al mattino il tuo amore,"),
                array('','2',"la tua fedeltà lungo la notte,"),
                array('','*',"sull'arpa a dieci corde e sulla lira,"),
                array('','2',"con canti sulla cetra.")
            ),
            array(
                array('','*',"Poiché mi rallegri, Signore, con le tue meraviglie,"),
                array('','2',"esulto per l'opera delle tue mani."),
                array('','*',"Come sono grandi le tue opere, Signore,"),
                array('','2',"quanto profondi i tuoi pensieri!")
            ),
            array(
                array('','*',"L'uomo insensato non intende"),
                array('','2',"e lo stolto non capisce;"),
                array('','*',"se i peccatori germogliano come l'erba"),
                array('','2',"e fioriscono tutti i malfattori,"),
                array('','*',"li attende una rovina eterna:"),
                array('','2',"ma tu sei l'eccelso per sempre, o Signore.")
            ),
            array(
                array('','+',"Ecco, i tuoi nemici, o Signore,"),
                array('','*',"ecco, i tuoi nemici periranno,"),
                array('','2',"saranno dispersi tutti i malfattori."),
                array('','*',"Tu mi doni la forza di un bufalo,"),
                array('','2',"mi cospargi di olio splendente."),
                array('','+',"I miei occhi disprezzeranno i miei nemici,"),
                array('','*',"e contro gli iniqui che mi assalgono"),
                array('','2',"i miei orecchi udranno cose infauste.")
            ),
            array(
                array('','*',"Il giusto fiorirà come palma,"),
                array('','2',"crescerà come cedro del Libano;"),
                array('','*',"piantati nella casa del Signore,"),
                array('','2',"fioriranno negli atri del nostro Dio.")
            ),
            array(
                array('','*',"Nella vecchiaia daranno ancora frutti,"),
                array('','2',"saranno vegeti e rigogliosi,"),
                array('','*',"per annunziare quanto è retto il Signore:"),
                array('','2',"mia roccia, in lui non c'è ingiustizia.")
            )
        )
    );

}
?>