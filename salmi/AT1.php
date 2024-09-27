<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 1 (Es 15,1-18) Inno di vittoria per il passaggio del mar Rosso";

    //lodi sabato
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Mia forza",
            "e mio canto è il Signore, egli mi ha salvato, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Mia forza",
            "e mio canto è il Signore, egli mi ha salvato."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','+',"Voglio cantare in onore del Signore:"),
                array('','*',"perché ha mirabilmente trionfato,"),
                array('','2',"ha gettato in mare cavallo e cavaliere."),
                array('','*',"Mia forza e mio canto è il Signore,"),
                array('','2',"egli mi ha salvato."),
                array('','*',"È il mio Dio e lo voglio lodare,"),
                array('','2',"è il Dio di mio padre e lo voglio esaltare!")
            ),
            array(
                array('','*',"Dio è prode in guerra,"),
                array('','2',"si chiama Signore."),
                array('','*',"I carri del faraone e il suo esercito li ha gettati nel mare."),
                array('','2',"e i suoi combattenti scelti furono sommersi nel mare Rosso.")
            ),
            array(
                array('','*',"Gli abissi li ricoprirono,"),
                array('','2',"sprofondarono come pietra."),
                array('','*',"La tua destra, Signore, terribile per la potenza,"),
                array('','2',"la tua destra, Signore, annienta il nemico."),
                array('','*',"Con sublime grandezza abbatti i tuoi avversari,"),
                array('','2',"scateni il tuo furore che li divora come paglia.")
            ),
            array(
                array('','+',"Al soffio della tua ira si accumularono le acque,"),
                array('','*',"si alzarono le onde come un argine,"),
                array('','2',"si rappresero gli abissi in fondo al mare."),
                array('','*',"Il nemico aveva detto:"),
                array('','2',"Inseguirò, raggiungerò, spartirò il bottino,"),
                array('','*',"se ne sazierà la mia brama,"),
                array('','2',"sfodererò la spada, li conquisterà la mia mano!")
            ),
            array(
                array('','*',"Soffiasti con il tuo alito: li coprì il mare,"),
                array('','2',"sprofondarono come piombo in acque profonde."),
                array('','*',"Chi è come te fra gli dei,"),
                array('','2',"chi è come te, maestoso in santità, Signore?"),
                array('','*',"Chi è come te tremendo nelle imprese,"),
                array('','2',"operatore di prodigi?")
            ),
            array(
                array('','*',"Stendesti la destra:"),
                array('','2',"li inghiottì la terra."),
                array('','*',"Guidasti con il tuo favore questo popolo che hai riscattato,"),
                array('','2',"lo conducesti con forza alla tua santa dimora.")
            ),
            array(
                array('','*',"Hanno udito i popoli e tremano;"),
                array('','2',"dolore incolse gli abitanti della Filistea."),
                array('','+',"Già si spaventano i capi di Edom,"),
                array('','*',"i potenti di Moab li prende il timore;"),
                array('','2',"tremano tutti gli abitanti di Canaan.")
            ),
            array(
                array('','*',"Piombano sopra di loro la paura e il terrore;"),
                array('','2',"per la potenza del tuo braccio restano immobili come pietra,"),
                array('','*',"finché sia passato il tuo popolo, Signore,"),
                array('','2',"finché sia passato questo tuo popolo che ti se acquistato.")
            ),
            array(
                array('','*',"Lo fai entrare e lo pianti sul monte della tua promessa,"),
                array('','2',"luogo che per tua sede, Signore, hai preparato,"),
                array('','*',"santuario che le tue mani, Signore, hanno fondato."),
                array('','2',"Il Signore regna in eterno e per sempre!")
            )
        )
    );

}
?>