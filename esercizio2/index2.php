<!-- /**
     *      
     *      Definire classe Computer:
     *          ATTRIBUTI:
     *          - codice univoco
     *          - modello
     *          - prezzo
     *          - marca
     * 
     *          METODI:
     *          - costruttore che accetta codice univoco e prezzo
     *          - proprieta' getter/setter per tutte le variabili d'istanza
     *          - printMe: che stampa se stesso (come quella vista a lezione)
     *          - toString: "marca modello: prezzo [codice univoco]"
     * 
     *          ECCEZIONI:
     *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
     *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
     *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
     * 
     *      Testare la classe appena definita con tutte le casistiche interessanti per verificare
     *      il corretto funzionamento dell'algoritmo
     *  -->
     

     <?php

            class Computer{
              private  $codiceUnivoco;
              private  $modello;
              private  $prezzo;
              private  $marca;

                public function __construct($codiceUnivoco,$prezzo){
                    $this->setcodiceUnivoco($codiceUnivoco);
                    $this->setprezzo($prezzo);
                }

                public function getcodiceUnivoco(){
                    return $this->codiceUnivoco;
                }
                public function setcodiceUnivoco($codiceUnivoco){
                    if(strlen($codiceUnivoco)!= 6 || !is_numeric($codiceUnivoco)){
                        throw new Exception("il codice univoco deve contenere solo 6 cifre");
                    }
                    $this-> codiceUnivoco = $codiceUnivoco;
                }

                public function getmodello(){
                    return $this->modello;
                }
                public function setmodello($modello){
                    if(strlen($modello)<3){
                        throw new Exception("Il modello non e corretto perchè il campo inserito è troppo corta");
                    }elseif(strlen($modello)>6){
                        throw new Exception("Il modello non e corretto perchè il campo inserito è troppo lunga");
                    }else
                    $this-> modello = $modello;
                }

                public function getprezzo(){
                    return $this->prezzo;
                }
                public function setprezzo($prezzo){
                    if(is_int($prezzo)||$prezzo<0 || $prezzo>2000){
                        throw new Exception("lo stipendio inserito deve eseere in un campo tra 0 a 2000€");
                    }
                    $this-> prezzo = $prezzo;
                }

                public function getmarca(){
                    return $this->marca;
                }
                public function setmarca($marca){
                    if(strlen($marca)<3){
                        throw new Exception("La marca non e corretta perche troppo corta");
                    }elseif(strlen($marca)>6){
                        throw new Exception("La marca non e corretta perche troppo lunga");
                    }else
                    $this-> marca = $marca;
                }    
                
                public function printMe(){
                    echo $this; 
                }

                public function __toString()
                {
                    return "La marca è: ".$this->marca."<br>"."IL modello è: ".$this-> modello." <br> "." Il prezzo e di: ".$this->prezzo."€"."<br>"."IL codice univoco è: "." [".$this->codiceUnivoco."]"; 
                }
            }
            try{
                $computer1= new Computer("989678","2000");
                $computer1 ->setmodello("2022");
                $computer1 -> setmarca("Mac");
                $computer1 ->printMe();
            }catch(Exception $e){
                echo $e. "<br><h1>" . $e -> getMessage() . "</h1>";
            }
     ?>