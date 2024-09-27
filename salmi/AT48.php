<?php
$this->closure['load']=function() {

    $this->titolo='Cantico AT 48 (Dn 3,57-88a. 56) Ogni creatura lodi il Signore';

    //lodi domenica
    if ($this->actual['tempo']=='P') {
        $this->antifona[0]=array(
            "È risorto",
            "Cristo dal sepolcro, lui che liberò i tre fanciulli dalla fornace ardente, alleluia."
        );
    }
    else {
        $this->antifona[0]=array(
            "Nel fuoco,",
            "con voce unanime, i tre giovani cantavano: Benedetto Dio, alleluia."
        );
    }

    $this->antifona[1]=$this->antifona[0];

    ///////////////////////////////////////////////////////////////

    $this->testoBase=array(
        'all'=>array(
            array(
                array('','*',"Benedite, opere tutte del Signore, il Signore,"),
                array('','2',"lodatelo ed esaltatelo nei secoli."),
                array('','*',"Benedite, angeli del Signore, il Signore,"),
                array('','2',"benedite, cieli, il Signore.")
            ),
            array(
                array('','*',"Benedite, acque tutte, che siete sopra i cieli, il Signore,"),
                array('','2',"benedite, potenze tutte del Signore, il Signore."),
                array('','*',"Benedite, sole e luna, il Signore,"),
                array('','2',"benedite, stelle del cielo, il Signore.") 
            ),
            array(
                array('','*',"Benedite, piogge e rugiade, il Signore,"),
                array('','2',"benedite, o venti tutti, il Signore."),
                array('','*',"Benedite, fuoco e calore, il Signore,"),
                array('','2',"benedite, freddo e caldo, il Signore.") 
            ),
            array(
                array('','*',"Benedite, rugiada e brina, il Signore,"),
                array('','2',"benedite, gelo e freddo, il Signore."),
                array('','*',"Benedite, ghiacci e nevi, il Signore,"),
                array('','2',"benedite, notti e giorni, il Signore."),
                array('','*',"Benedite, luce e tenebre, il Signore,"),
                array('','2',"benedite, folgori e nubi, il Signore.")
            ),
            array(
                array('','*',"Benedica la terra il Signore,"),
                array('','2',"lo lodi e lo esalti nei secoli."),
                array('','*',"Benedite, monti e colline, il Signore,"),
                array('','2',"benedite, creature tutte che germinate sulla terra, il Signore."),
                array('','*',"Benedite, sorgenti, il Signore,"),
                array('','2',"benedite, mari e fiumi, il Signore.")
            ),
            array(
                array('','*',"Benedite, mostri marini e quanto si muove nell'acqua, il Signore,"),
                array('','2',"benedite, uccelli tutti dell'aria, il Signore."),
                array('','*',"Benedite, animali tutti, selvaggi e domestici, il Signore,"),
                array('','2',"benedite, figli dell'uomo, il Signore.")
            ),
            array(
                array('','*',"Benedica Israele il Signore,"),
                array('','2',"lo lodi e lo esalti nei secoli."),
                array('','*',"Benedite, sacerdoti del Signore, il Signore,"),
                array('','2',"benedite, o servi del Signore, il Signore.")
            ),
            array(
                array('','*',"Benedite, spiriti e anime dei giusti, il Signore,"),
                array('','2',"benedite, pii e umili di cuore, il Signore."),
                array('','*',"Benedite, Anania, Azaria e Misaele, il Signore,"),
                array('','2',"lodatelo ed esaltatelo nei secoli.")
            ),
            array(
                array('','*',"Benediciamo il Padre e il Figlio con lo Spirito Santo,"),
                array('','2',"lodiamolo ed esaltiamolo nei secoli."),
                array('','*',"Benedetto sei tu, Signore, nel firmamento del cielo,"),
                array('','2',"degno di lode e di gloria nei secoli.")
            )
        )
    );

}
?>