<?php
$this->closure['load']=function() {

    $this->titolo="Cantico NT 18 (Cf. 1Pt 2,21-25a) La passione volontaria di Cristo, servo di Dio";

    //vespri2 domenica
    $this->antifona[0]=array(
        "Cristo",
        "ha portato la nostra debolezza, ha conosciuto il nostro dolore."
    );

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Cristo patì per voi, lasciandovi un esempio,"),
                array('','2',"perché ne seguiate le orme:"),
                array('','*',"egli non commise peccato"),
                array('','2',"e non si trovò inganno sulla sua bocca;")
            ),
            array(
                array('','*',"oltraggiato non rispondeva con oltraggi,"),
                array('','2',"e soffrendo non minacciava vendetta,"),
                array('','*',"ma rimetteva la sua causa"),
                array('','2',"a colui che giudica con giustizia")
            ),
            array(
                array('','*',"Egli portò i nostri peccati nel suo corpo"),
                array('','2',"sul legno della croce,"),
                array('','+',"perché, non vivendo più per il peccato,"),
                array('','*',"vivessimo per la giustizia;"),
                array('','2',"dalle sua piaghe siamo stati guariti.")
            )
        )
    );

}
?>