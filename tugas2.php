<!-- nama : Cut Annisa Putri
nim : G.231.21.0193 -->

<?php
interface Hewan {
    
    function berjalan();
    function makan();
    function bersuara();
}

interface Monyet extends Hewan {
    function berkendara();
}

class Dilatih implements Monyet {
    
    public function __construct() {
    }
    
    function berjalan(){
        echo "Berjalan";
    }
    function makan() {
        echo "Makan";
    }
    function bersuara() {
        echo "Bersuara";
    }
    function berkendara() {
        echo "Berkendara";
    }
}

$latih = new Dilatih();
$latih-> berjalan()

?>