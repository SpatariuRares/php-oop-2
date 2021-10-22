<?php 
    class Articolo{
        public $name;
        public $price;
        public $URL;
        public $description;
        public $category;
        public $sconto;

        function __construct($_name, $_price,$_URL,$_description,$_category,$_sconto){
            $this->name = $_name;
            $this->price = $_price;
            $this->URL = $_URL;
            $this->description = $_description;
            $this->category = $_category;
            $this->sconto = $_sconto;
        }
        public function setName($_name){
            $this->name =$_name;
        }
        public function getName(){
            return $this->name;
        }
        public function setprice($_price){
            $this->price =$_price;
        }
        public function getprice(){
            return $this->price;
        }
        public function setURL($_URL){
            $this->URL =$_URL;
        }
        public function getURL(){
            return $this->URL;
        }
        public function setdescription($_description){
            $this->description =$_description;
        }
        public function getdescription(){
            return $this->description;
        }
        public function setcategory($_category){
            $this->category =explode(",", $_category);
        }
        public function getcategory(){
            return $this->category;
        }
        public function setsconto($_sconto){
            $this->sconto = $_sconto;
        }
        public function getsconto(){
            return $this->sconto;
        }
    }

    class Users{
        public $name;
        public $surname;
        public $address;
        public $email;
        public $card;

        function __construct($_name, $_surname,$_address,$_email){
            $this->name = $_name;
            $this->surname = $_surname;
            $this->address = $_address;
            $this->email = $_email;
        }
        public function setName($_name){
            $this->name =$_name;
        }
        public function getName(){
            return $this->name;
        }
        public function setsurname($_surname){
            $this->surname =$_surname;
        }
        public function getsurname(){
            return $this->surname;
        }
        public function setcard($_card){
            $this->card =$_card;
        }
        public function getcard(){
            return $this->card;
        }
        public function setaddress($_address){
            $this->address =$_address;
        }
        public function getaddress(){
            return $this->address;
        }
        public function setemail($_email){
            $this->email =$_email;
        }
        public function getemail(){
            return $this->email;
        }
    }

    class Card {
        public $numeber;
        public $date;
        public $CVC;
        function __construct($_numeber,$_date,$_CVC){
            $this->numeber = $_numeber;
            $this->setdate($_date);
            $this->CVC = $_CVC;
        }
        public function setnumeber($_numeber){
            $this->numeber =$_numeber;
        }
        public function getnumeber(){
            return $this->numeber;
        }
        public function setdate($_date){
            $_date=strtotime($_date);
            $date=strtotime(date("d-m-Y"));
            if($_date>$date){
                echo "true";
                $this->date = $_date;
            }
            else{
                throw new Exception("carta scaduta");    
            }
        }
        public function getdate(){
            return $this->date;
        }
        public function setCVC($_CVC){
            $this->CVC =$_CVC;
        }
        public function getCVC(){
            return $this->CVC;
        }
    }
    
    try{
        $cartaDiCredito=new Card(123456789,"18-05-2020",959);
        $occhiali=new Articolo("occhiali",190,"#","lorem","wear,glass",10);
        $rares=new Users("rares","spatariu","ciao","mail");
        $rares->setcard($cartaDiCredito);
        var_dump($rares);
    }
    catch(Exception $err){
        echo "si è verificato un errore ".$err->getMessage();
    }
    
?>