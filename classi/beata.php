<?php
class Beata {

    protected $ant=array();
    protected $tag=array(
        "1"=>"Santa Madre del Redentore",
        "2"=>"Ave regina dei cieli",
        "3"=>"Regina cieli",
        "4"=>"Salve Regina",
        "5"=>"Ave Maria",
        "6"=>"Sotto la tua protezione",
        "7"=>"Piissima Vergine Maria"
    );

    protected $info=array(
        "parte"=>""
    );

    protected $litio;
    protected $actual;

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;

        $this->info['parte']='BVM';

        if ($this->actual['tempo']=='P') {
            $this->ant["3"]=array(
                array(
                    array('','',"Regina dei cieli, rallegrati, alleluia:"),
                    array('','',"Cristo, che hai portato nel grembo, alleluia,"),
                    array('','',"è risorto, come aveva promesso, alleluia."),
                    array('','',"Prega il Signore per noi, alleluia.")
                )
            );
        }

        else {
            $this->ant["1"]=array(
                array(
                    array('','',"O santa Madre del Redentore,"),
                    array('','',"porta dei cieli, stella del mare,"),
                    array('','',"soccorri il tuo popolo,"),
                    array('','',"che anela a risorgere."),
                    array('','',"Tu che accogliendo il saluto dell'angelo,"),
                    array('','',"nello stupore di tutto il creato,"),
                    array('','',"hai generato il tuo Creatore,"),
                    array('','',"Madre sempre vergine,"),
                    array('','',"pietà di noi peccatori.")
                )
            );

            $this->ant["2"]=array(
                array(
                    array('','',"Ave, Regina dei cieli,"),
                    array('','',"ave, Signora degli angeli;"),
                    array('','',"porta e radice di salvezza,"),
                    array('','',"rechi nel mondo la luce."),
                    array('','',"Godi, Vergine gloriosa,"),
                    array('','',"bella fra tutte le donne;"),
                    array('','',"salve, o tutta santa,"),
                    array('','',"prega per noi Cristo Signore.")
                )
            );

            $this->ant["4"]=array(
                array(
                    array('','',"Salve, Regina, Madre di misericordia,"),
                    array('','',"vita, dolcezza e speranza nostra, salve."),
                    array('','',"A te ricorriamo, esuli figli di Eva;"),
                    array('','',"a te sospiriamo, gementi e piangenti"),
                    array('','',"in questa valle di lacrime."),
                    array('','',"Orsù dunque, avvocata nostra,"),
                    array('','',"rivolgi a noi gli occhi tuoi misericordiosi."),
                    array('','',"E mostraci, dopo questo esilio, Gesù,"),
                    array('','',"il frutto benedetto del tuo seno."),
                    array('','',"O clemente, o pia, o dolce Vergine Maria.")
                )
            );

            $this->ant["5"]=array(
                array(
                    array('','',"Ave, o Maria, piena di grazia,"),
                    array('','',"il Signore è con te."),
                    array('','',"Tu sei benedetta fra le donne"),
                    array('','',"e benedetto è il frutto del tuo seno, Gesù."),
                    array('','',"Santa Maria, Madre di Dio,"),
                    array('','',"prega per noi peccatori,"),
                    array('','',"adesso e nell'ora della nostra morte."),
                    array('','',"Amen.")
                )
            );

            $this->ant["6"]=array(
                array(
                    array('','',"Sotto la tua protezione troviamo rifugio,"),
                    array('','',"santa Madre di Dio:"),
                    array('','',"non disprezzare le suppliche"),
                    array('','',"di noi che siamo nella prova,"),
                    array('','',"e liberaci da ogni pericolo,"),
                    array('','',"o Vergine gloriosa e benedetta.")
                )
            );

            $this->ant["7"]=array(
                array(
                    array('','',"Ricordati, piissima Vergine Maria,"),
                    array('','',"che non si è mai inteso al mondo"),
                    array('','',"che qualcuno abbia fatto ricorso a te"),
                    array('','',"per implorare il tuo aiuto,"),
                    array('','',"e sia stato abbandonato."),
                    array('','',"Anch'io, animato da tale confidenza,"),
                    array('','',"a te ricorro, Vergine Madre purissima,"),
                    array('','',"e vengo a mettermi davanti a te,"),
                    array('','',"peccatore avvilito ed affranto."),
                    array('','',"Tu che sei la Madre del verbo,"),
                    array('','',"non respingere la mia povera voce,"),
                    array('','',"ma ascoltala benevola, ed esaudiscimi."),
                    array('','',"Amen.")
                )
            );
        }
    }

    function draw() {

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            echo 'Antifone della Beata Vergine Maria';
            /*if ($this->litio->config['vox']) {
                $this->litio->drawPlayer($this->info['parte'],0);
            }*/
        echo '</div>';

        echo '<div style="position:relative;margin-top:10px;font-size:9pt;font-weight:bold;">';
            foreach ($this->ant as $k=>$a) {
                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:170px;border:1px solid black;padding:3px;box-sizing:border-box;text-align:center;margin-left:5px;margin-right:5px;cursor:pointer;" onclick="window._salmastro.bvm(\''.$k.'\');">';
                    echo substr($this->tag[$k],0,25);
                echo '</div>';
            }
        echo '</div>';

        $sel=true;
        
        foreach ($this->ant as $k=>$a) {
            echo '<div id="salmastro_bvm_'.$k.'" style="position:relative;margin-top:20px;margin-bottom:30px;width:100%;';
                if (!$sel) echo 'display:none;';
            echo '">';

                $temp=new Saltesto();
                $temp->setParte('BVM');

                foreach ($a as $kb=>$b) {
                    $temp->addBlock($b);
                }

                echo '<div class="salResBlockBody" >';
                    echo $temp->draw();
                echo '</div>';

            echo '</div>';

            $sel=false;
        }
        
    }

}

?>