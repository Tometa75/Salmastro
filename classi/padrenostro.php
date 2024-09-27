<?php
class PadreNostro {

    protected $litio;
    protected $res;
    protected $testo="";

    protected $info=array(
        "parte"=>""
    );

    function __construct($caller) {

        $this->litio=$caller;

        $this->res=new Saltesto();
        $this->info['parte']='PN';
        $this->res->setParte('PN');

        $this->testo=array(
            array(
                array('','',"Padre nostro che sei nei cieli,"),
                array('','',"sia santificato il tuo nome,"),
                array('','',"venga il tuo regno,"),
                array('','',"sia fatta la tua volontà"),
                array('','',"come in cielo così in terra.")
            ),
            array(
                array('','',"Dacci oggi il nostro pane quotidiano,"),
                array('','',"e rimetti a noi i nostri debiti"),
                array('','',"come anche noi li rimettiamo ai nostri debitori,"),
                array('','',"e non abbandonarci alla tentazione,"),
                array('','',"ma liberaci dal male."),
                array('','',"Amen.")
            )
        );
            
        foreach ($this->testo as $k=>$b) {
            $this->res->addBlock($b);
        }
    }

    function draw() {

        echo '<div class="salResBlockTitle" style="margin-top:30px;">';
            echo 'Padre Nostro';
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