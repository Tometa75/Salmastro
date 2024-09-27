<?php
require_once('calendario.php');
require_once('litio.php');
require_once(SITE_ROOT.'/core/calendario/calnav.php');

class Salmastro {

    protected $info=array(
        "today"=>"",
        "config"=>array()
    );

    protected $map=array();
    protected $vig=array();

    protected $giornoSett=array('Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato');

    protected $cal=false;
    protected $calnav=false;
    protected $litio=false;

    function __construct($param) {

        foreach ($this->info as $k=>$i) {
            if (array_key_exists($k,$param)) $this->info[$k]=$param[$k];
        }

        if (!isset($this->info['today']) || $this->info['today']=="") {
            $this->info['today']=date('Ymd');
        }

        //####################################################
        //per il momento è sempre vera
        $this->info['config']['vox']=true;
        //####################################################

        $this->cal=new Calendario($this->info['today']);
        $this->map=$this->cal->getMap();

        $temp=new Calendario(date('Ymd',strtotime('+1 day',mainFunc::gab_tots($this->info['today']))));
        $this->vig=$temp->getMap();
        unset($temp);

        $config=array(
            "index"=>"salmastro",
            "range_i"=>"19990101",
            "range_f"=>"21001231",
            "tag"=>"d m Y",
            "m1"=>array("giorno","1"),
            "p1"=>array("giorno","1"),
            "now"=>true,
            "disabled"=>false
        );
        $css=array(
            "background-color"=>"#f1d6ab",
            "font-size"=>"1.4em"
        );
    
        $this->calnav=new calnav('D',$this->info['today'],$config,$css,$this->cal);
        
    }

    function build() {

        $this->litio=new Litio($this->map,$this->vig,$this->info['config']);

    }

    function load() {
        $this->litio->build();
        $this->litio->draw();
    }

    function draw() {

        $this->drawHead();

        echo '<div class="salBottom" style="height:82%;">';

            echo '<img style="position:absolute;left:0px;top:0px;width:100%;height:100%;opacity:0.7;" src="'.SITE_URL.'/img/backTesto.jpg" />';

            if ($this->litio) {
                $this->litio->drawHead();
            }
        echo '</div>';

        echo '<script type="text/javascript" >';
            echo 'window._salmastro=new Salmastro();';
        echo '</script>';
    }

    function drawHead() {

        echo '<div style="position:relative;width:100%;height:18%;">';

            echo '<div class="salHeadLine" style="">';
                //echo '<img style="position:relative;width:60px;height:25px;margin-left:10px;cursor:pointer;" src="'.SITE_URL.'/img/medaglia.png" onclick="window._salmastro.refresh();" />';
                echo '<span style="margin-left:10px;" >Liturgia delle ore benedettina (v0.9.3 - 2024)</span>';
            echo '</div>';

            echo '<div class="salHeadBlock" style="background-image:url(\''.SITE_URL.'/img/sfondoHead.png\')">';
                
                echo '<img style="position:absolute;width:60px;height:25px;right:3px;top:3px;cursor:pointer;z-index:10;" src="'.SITE_URL.'/img/medaglia.png" onclick="window._salmastro.refresh();" />';

                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:35%;" >';

                    echo '<div style="position:relative;">';
                        $this->calnav->draw();
                    echo '</div>';

                    echo '<div style="position:relative;text-align:center;">';

                        echo '<div class="tempodiv" style="';
                            if ($this->map['rocho']) {
                                echo 'background-color:#f85050;';
                            }
                            else {
                                echo 'background-color:'.$this->map['tempo']['colore'].';';
                            }
                        echo '" >';
                            if (array_key_exists('PEN',$this->map['evento'])) echo 'Pentecoste';
                            else {
                                echo $this->map['tempo']['nome'];
                                //if ($this->map['tempo']['codice']=='O' || $this->map['tempo']['codice']=='A' || $this->map['tempo']['codice']=='Q') {
                                if ($this->map['settimana']!="") {
                                    echo ' ( Settimana: '.$this->map['settimana'].' )';
                                }
                            }
                        echo '</div>';

                    echo '</div>';

                echo '</div>';

                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:10%;font-weight:bold;font-size: 1.2em;padding: 3px;padding-left: 10px;box-sizing:border-box;" >';
                    echo '<div>Anno: '.$this->map['anno'].'</div>';

                    echo '<div>'.$this->giornoSett[$this->map['weekDay']].'</div>';

                    echo '<div style="min-height:15px;">';
                        switch ($this->map['quarto']) {
                            case 1: echo 'I';break;
                            case 2: echo 'II';break;
                            case 3: echo 'III';break;
                            case 4: echo 'IV';break;
                        }
                    echo '</div>';

                    echo '<div style="text-align:center;">';
                        echo '<img style="position:relative;width:40px;height:35px;margin-top:-10px;cursor:pointer;" src="'.SITE_URL.'/img/calendar2.png" onclick="window._salmastro.litcal();"/>';
                    echo '</div>';

                echo '</div>';

                echo '<div style="position:relative;display:inline-block;vertical-align:top;width:54%;font-weight:bold;font-size: 1.2em;padding: 3px;padding-left: 10px;box-sizing:border-box;" >';
                    
                    $this->writeRicorrenza('E',$this->map['evento'],'map');
                    $this->writeRicorrenza('F',$this->map['festa'],'map');
					$this->writeRicorrenza('E',$this->vig['evento'],'vig');
                    
                echo '</div>';

            echo '</div>';

        echo '</div>';
    }

    function writeRicorrenza($flag,$a,$tipo) {

        foreach ($a as $k=>$r) {
			
			if ($tipo=='vig' && ($r['tipo']!='F' && $r['tipo']!='S') ) continue;
			
            $color='black';

            switch ($r['tipo']) {
                case 'X': $color='#787575';break;
                case 'F': $color='red';break;
                case 'S': $color='red';break;
				case 'E': $color='red';break;
                case 'M': $color='blue';break;
                case 'R': $color='#7889cd';break;
            }

            if ($flag=='F' && $color=='red') $color='blue';
            if ($flag=='F' && $color=='blue' && count($this->map['evento'])>0) $color='#7889cd';
			
			if ($tipo=='map') {
            	echo '<div style="color:'.$color.';">';
                	echo ($color!='red'?"(".$r['tipo'].') ':'').$r['titolo'];
				echo '</div>';
			}
			if ($tipo=='vig') {
				echo '<div style="color:black;">';
                	echo 'vig. '.$r['titolo'];
				echo '</div>';
			}
        }
    }

}

?>