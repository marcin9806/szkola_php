  <?php  class Samochod{
        public $marka, $model, $ilosc_kol, $produkcja;
        function __construct($panstwo){
            $this->ilosc_kol = 4;
            $this->produkcja = $panstwo;
        }
        public function ustaw_marke($wartosc){
            $this->marka=$wartosc;
        }
        public function pobierz_marke(){
            return $this->marka;
        }
        public function ustaw_model($wartosc){
            $this->model=$wartosc;
        }
        public function pobierz_model(){
            return $this->model;
        }
        public function wyswietl(){
            return "Marka: ".$this->marka.", model: ".$this->model;
        }
    }
?>
