<?php
class Penitenza {

    protected $litio;
    protected $actual;
    protected $res;

    protected $info=array(
        "parte"=>""
    );

    function __construct($caller) {

        $this->litio=$caller;
        $this->actual=$caller->actual;

        $this->res=new Saltesto();

        $this->info['parte']='SIL';
        $this->res->setParte('SIL');

        $a=array(
            array('','',"(esame di coscienza)")
        );
        
        $this->res->addBlock($a);

        if ($this->litio->config['contesto']=='solo') {
            $a=array(
                array(
                    array('','','Confesso a Dio onnipotente'),
                    array('','','e a voi, fratelli e sorelle,'),
                    array('','','che ho molto peccato'),
                    array('','','in pensieri, parole, opere e omissioni')
                ),
                array(
                    array('','','per mia colpa, mia colpa, mia grandissima colpa.'),
                    array('','','E supplico la beata sempre vergine Maria,'),
                    array('','','gli angeli, i santi e voi, fratelli e sorelle,'),
                    array('','','di pregare per me il Signore Dio nostro.')
                )
            );
        }
        else {
            $a=array(
                array(
                    array('ebd','','Pietà di noi, Signore.'),
                    array('ris','','Contro di te abbiamo peccato.'),
                    array('ebd','','Mostraci, Signore, la tua misericordia.'),
                    array('ris','','E donaci la tua salvezza.')
                )
            );
        }

        foreach ($a as $k=>$b) {
            $this->res->addBlock($b);
        }
    
        $a=array(
            array('','','Dio onnipotente abbia misericordia di noi,'),
            array('','','perdoni i nostri peccati'),
            array('','','e ci conduca alla vita eterna.'),
            array('ris','','Amen.')
        );
        
        $this->res->addBlock($a);
        
    }

    function draw() {

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            echo 'Atto penitenziale';
            if ($this->litio->config['vox']) {
                $this->litio->drawPlayer($this->info['parte'],0);
            }
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            echo $this->res->draw();
        echo '</div>';
    }

}

?>