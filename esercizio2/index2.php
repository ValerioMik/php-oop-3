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
                    return $this->username;
                }
                public function setcodiceUnivoco($codiceUnivoco){
                    if(strlen($codiceUnivoco)!= 6 && !is_numeric($codiceUnivoco)){
                        throw new Exception("non hai inserito un codice univoco");
                    }
                    $this-> codiceUnivoco = $codiceUnivoco;
                }

                public function getmodello(){
                    return $this->username;
                }
                public function setmodello($modello){
                    $this-> modello = $modello;
                }

                public function getprezzo(){
                    return $this->username;
                }
                public function setprezzo($prezzo){
                    $this-> prezzo = $prezzo;
                }

                public function getmarca(){
                    return $this->username;
                }
                public function setmarca($marca){
                    $this-> marca = $marca;
                }    
                
                public function printMe(){
                    echo $this; 
                }

                public function __toString()
                {
                    return $this->marca." /".$this-> modello." : ".$this->prezzo." [".$this->codiceUnivoco."]"; 
                }
            }
            try{
                $computer1= new Computer("2356","2000$");
                $computer1 ->setmodello("a14");
                $computer1 -> setmarca("Haweii");
                $computer1 ->printMe();
            }catch(Exception $e){
                echo $e. "<br><h1>" . $e -> getMessage() . "</h1>";
            }
     ?>