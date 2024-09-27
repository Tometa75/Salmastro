<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 2 (Dt 32,1-12) I benefici di Dio in favore del popolo";

    //lodi sabato
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Io grido",
            "il nome del Signore: date gloria al nostro Dio, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Io grido",
            "il nome del Signore: date gloria al nostro Dio."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Ascoltate, o cieli; io voglio parlare:"),
                array('','2',"oda la terra le parole della mia bocca!"),
                array('','*',"Stilli come pioggia la mia dottrina,"),
                array('','2',"scenda come rugiada il mio dire;"),
                array('','*',"come scroscio sull'erba del prato,"),
                array('','2',"come spruzzo sugli steli di grano.")
            ),
            array(
                array('','*',"Voglio proclamare il nome del Signore:"),
                array('','2',"date gloria al nostro Dio!"),
                array('','*',"Egli è la Roccia; perfetta è l'opera sua;"),
                array('','2',"tutte le sue vie sono giustizia;"),
                array('','*',"è un Dio verace e senza malizia;"),
                array('','2',"egli è giusto e retto.")
            ),
            array(
                array('','*',"Peccarono contro di lui i figli degeneri,"),
                array('','2',"generazione tortuosa e perversa."),
                array('','*',"Così ripaghi il Signore,"),
                array('','2',"o popolo stolto e insipiente?"),
                array('','*',"Non è lui il padre che ti ha creato,"),
                array('','2',"che ti ha fatto e ti ha costituito?")
            ),
            array(
                array('','*',"Ricorda i giorni del tempo antico,"),
                array('','2',"medita gli anni lontani."),
                array('','*',"Interroga tuo padre e te lo farà sapere,"),
                array('','2',"i tuoi vecchi e te lo diranno.")
            ),
            array(
                array('','*',"Quando l'Altissimo divideva i popoli,"),
                array('','2',"quando disperdeva i figli dell'uomo,"),
                array('','*',"egli stabilì i confini delle genti"),
                array('','2',"secondo il numero degli israeliti."),
                array('','*',"Porzione del Signore è il suo popolo,"),
                array('','2',"sua eredità è Giacobbe.")
            ),
            array(
                array('','*',"Egli lo trovò in terra deserta,"),
                array('','2',"in una landa di ululati solitari."),
                array('','*',"Lo educò, ne ebbe cura,"),
                array('','2',"lo custodì come pupilla del suo occhio.")
            ),
            array(
                array('','*',"Come aquila che veglia la sua nidiata,"),
                array('','2',"che vola sopra i suoi nati,"),
                array('','*',"egli spiegò le ali e lo prese,"),
                array('','2',"lo sollevò sulle sue ali."),
                array('','*',"Il Signore lo guidò da solo,"),
                array('','2',"non c'era con lui alcun dio straniero.")
            )
        )
    );

}
?>