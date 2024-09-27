<?php


class Preghiera {

    protected $info=array(
        "tipo"=>"inizio",
        "titolo"=>"",
        "parte"=>"",
        "testo"=>false
    );

    protected $litio;

    function __construct($tipo,$caller) {

        //inizio || fine
        $this->info['tipo']=$tipo;
        $this->litio=$caller;

        $this->info['testo']=new Saltesto();

        if ($this->info['tipo']=='inizio') {
            $this->info['parte']='PI';
            $this->info['testo']->setParte('PI');
            $this->setInizio();
        }
        elseif ($this->info['tipo']=='fine') {
            $this->info['parte']='PC';
            $this->info['testo']->setParte('PC');
            $this->setFine();
        }
    }

    function setInizio() {

        $this->info['titolo']='Preghiera Iniziale';

        $b=array(
            array('ebd','','O Dio, vieni a salvarmi.'),
            array('ris','','Signore, vieni presto in mio aiuto.')
        );
        $this->info['testo']->addBlock($b);

        $b=array(
            array('','','Gloria al Padre e al Figlio'),
            array('','2','e allo Spirito Santo.'),
            array('','','Come era nel principio, e ora e sempre,'),
            array('','2','nei secoli dei secoli. Amen.')
        );
        $this->info['testo']->addBlock($b);

        if ($this->litio->map['tempo']['codice']!='Q') {
            $b=array(
                array('','','Alleluia.')
            );
            $this->info['testo']->addBlock($b);
        }
    }

    function setFine() {

        $this->info['titolo']='Preghiera Conclusiva';

        $ora=$this->litio->config['ora'];

        if ($ora=='terza' || $ora=='sesta' || $ora=='nona') {

            $b=array(
                array('ebd','','Benediciamo il Signore.'),
                array('ris','','Rendiamo grazie a Dio.')
            );
            $this->info['testo']->addBlock($b);
        }
        elseif ($ora=='comp' || $ora=='comp1') {

            $b=array(
                array('ebd','','Il Signore ci conceda una notte serena e un riposo tranquillo.'),
                array('ris','','Amen.')
            );
            $this->info['testo']->addBlock($b);
        }
        else {

            if ($this->litio->config['contesto']=='solo') {

                $b=array(
                    array('','','Il Signore ci benedica, ci preservi da ogni male, e ci conduca alla vita eterna, con i nostri fratelli assenti.'),
                    array('','2',"Amen.")
                );
                $this->info['testo']->addBlock($b);
            }
            elseif ($this->litio->config['contesto']=='prete') {

                $b=array(
                    array('sac','','Il Signore sia con voi.'),
                    array('ris','','E con il tuo spirito.')
                );
                $this->info['testo']->addBlock($b);

                $b=array(
                    array('sac','','Vi benedica Dio onnipotente, Padre e Figlio e Spirito Santo.'),
                    array('ris','','Amen.')
                );
                $this->info['testo']->addBlock($b);
            }
            else {

                $b=array(
                    array('sac','','Il Signore sia con voi.'),
                    array('ris','','E con il tuo spirito.')
                );
                $this->info['testo']->addBlock($b);

                //ottava di Pasqua
                if ($this->litio->actual['evCode']=='PAS') {
                    $b=array(
                        array('sac','','Voi, che dopo i giorni della Passione, celebrate con gioia la Pasqua del Signore, possiate giungere alla grande festa della Pasqua eterna.'),
                        array('ris','','Amen.')
                    );
                }
                elseif (substr($this->litio->actual['evCode'],0,3)=='PA1') {
                    $b=array(
                        array('sac','','Benediciamo il Signore, alleluia, alleluia.'),
                        array('ris','','Rendiamo grazie a Dio, alleluia, alleluia.')
                    );
                }
                else {
                    $b=array(
                        array('sac','','Benediciamo il Signore.'),
                        array('ris','','Rendiamo grazie a Dio.')
                    );
                }
                
                $this->info['testo']->addBlock($b);

                $b=array(
                    array('sac','',"L'aiuto del Signore resti sempre con noi."),
                    array('ris','','E con i nostri fratelli assenti. Amen.')
                );
                $this->info['testo']->addBlock($b);

                $flag=false;

                if (substr($ora,0,3)=='ves') {
                    foreach ($this->litio->map['evento'] as $k=>$e) {
                        if (substr($k,0,3)=='PA1') {
                            $flag=true;
                            break;
                        }
                    }
                }

                if ( ($ora=='ves' && array_key_exists('CEN',$this->litio->vig['evento'])) || ($ora=='ves2' && array_key_exists('PEN',$this->litio->map['evento'])) || $flag) {
                    $b=array(
                        array('','','Alleluia. Alleluia.')
                    );
                    $this->info['testo']->addBlock($b);
                }
            }
        }
    }

    function draw() {

        echo '<div class="salResBlockTitle" >';
            echo '<span>'.$this->info['titolo'].'</span>';
            if ($this->litio->config['vox']) {
                $this->litio->drawPlayer($this->info['parte'],0);
            }
        echo '</div>';

        echo '<div class="salResBlockBody" >';
            if ($this->info['testo']) {
                echo $this->info['testo']->draw();
            }
        echo '</div>';


        /*echo '<div>'.json_encode($this->litio->map).'</div>';
        echo '<div>'.json_encode($this->litio->vig).'</div>';
        echo '<div>'.json_encode($this->litio->config).'</div>';*/
        
    }


    
}
?>