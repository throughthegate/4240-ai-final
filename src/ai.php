<?php
    include('includes/firstLine.php');
    
 

    //Initiates the xml file
    $path = "personas.xml";
    $xml = simplexml_load_file($path);
    
    $user = $_SESSION['name'];
    
    function generate_traits(){
    //Randomly picks two positive traits and assigns them to the appropriate session variables
      //The list of AI traits
    $trait_positive = array("jovial", "motivational", "amorous", "bubbly", "humorous", "optimistic", "artistic", "empathetic", "adventurous");
    $trait_negative = array("belligerent", "lazy", "snarky", "pessimistic", "bossy", "pedantic", "crude");
        
        $trait_randompos = array_rand($trait_positive, 2);
        $_SESSION['trait1'] = $trait_positive[$trait_randompos[0]];
        $_SESSION['trait2'] = $trait_positive[$trait_randompos[1]];
    
    //Randomly picks one negative trait and assigns it to the appropriate session variable
        
        $trait_randomneg = array_rand($trait_negative, 1);
        $_SESSION['trait3'] = $trait_negative[$trait_randomneg];
        
    }
    
    function get_quote($action){
        global $xml;
        global $user;
        
        $trait1 = $_SESSION['trait1'];
        $trait2 = $_SESSION['trait2'];
        $trait3 = $_SESSION['trait3'];
        
        $item1 = $xml->xpath("//persona[@name=\"$trait1\"]/$action");
        $item1 = str_replace('$user', $user, (string)$item1[0]);
        $item2 = $xml->xpath("//persona[@name=\"$trait2\"]/$action");
        $item2 = str_replace('$user', $user, (string)$item2[0]);
        $item3 = $xml->xpath("//persona[@name=\"$trait3\"]/$action");
        $item3 = str_replace('$user', $user, (string)$item3[0]);

        
        $_SESSION['quote_array'] = array($item1, $item2, $item3);
        $quote_array = $_SESSION['quote_array'];
        
        $_SESSION['quote'] = $quote_array[array_rand($quote_array)];
        $quote = str_replace("'", "&#39", $_SESSION['quote']);
        
        return $quote;
    }
  

?>
    