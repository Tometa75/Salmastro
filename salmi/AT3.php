<?php
$this->closure['load']=function() {

    $this->titolo="Cantico AT 3 (1 Sam 2,1-10) La gioia e la speranza degli umili è in Dio";

    //lodi mercoledì
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "Il mio cuore",
            "esulta nel Signore: è lui che umilia e innalza, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Il mio cuore",
            "esulta nel Signore: è lui che umilia e innalza."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Il mio cuore esulta nel Signore,"),
                array('','2',"la mia fronte s'innalza, grazie al mio Dio."),
                array('','*',"Si apre la mia bocca contro i miei nemici,"),
                array('','2',"perché io godo del beneficio che mi hai concesso."),
                array('','*',"Non c'è santo come il Signore,"),
                array('','2',"non c'è rocca come il nostro Dio.")
            ),
            array(
                array('','+',"Non moltiplicate i discorsi superbi,"),
                array('','*',"dalla vostra bocca non esca arroganza;"),
                array('','2',"perché il Signore è il Dio che sa tutto e le sue opere sono rette.")
            ),
            array(
                array('','*',"L'arco dei forti s'è spezzato,"),
                array('','2',"ma i deboli sono rivestiti di vigore."),
                array('','*',"I sazi sono andati a giornata per un pane,"),
                array('','2',"mentre gli affamati han cessato di faticare."),
                array('','*',"La sterile ha partorito sette volte"),
                array('','2',"e la ricca di figli è sfiorita.")
            ),
            array(
                array('','*',"Il Signore fa morire e fa vivere,"),
                array('','2',"scendere agli inferi e risalire."),
                array('','*',"Il Signore rende povero e arricchisce,"),
                array('','2',"abbassa ed esalta.")
            ),
            array(
                array('','*',"Solleva dalla polvere il misero,"),
                array('','2',"innalza il povero dalle immondizie,"),
                array('','*',"per farli sedere con i capi del popolo,"),
                array('','2',"e assegnare loro un seggio di gloria.")
            ),
            array(
                array('','*',"Perché al Signore appartengono i cardini della terra"),
                array('','2',"e su di essi fa poggiare il mondo."),
                array('','+',"Sui passi dei giusti egli veglia,"),
                array('','*',"ma gli empi svaniscono nelle tenebre."),
                array('','2',"Certo non prevarrà l'uomo malgrado la sua forza.")
            ),
            array(
                array('','*',"Dal Signore saranno abbattuti i suoi avversari!"),
                array('','2',"L'Altissimo tuonerà dal cielo."),
                array('','+',"Il Signore giudicherà gli estremi confini della terra;"),
                array('','*',"al suo re darà la forza"),
                array('','2',"ed eleverà la potenza del suo Messia.")
            )
        )
    );

}
?>