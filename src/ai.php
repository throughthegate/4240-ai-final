<?php
    include('includes/firstLine.php');
    
    //The list of AI traits
    $trait_list = array("jovial", "belligerent", "lazy", "snarky", "motivational", "amorous", "bubbly", "humorous", "optimistic", "pessimistic", "bossy", "artistic", "pedantic", "empathetic", "adventurous", "crude");

    //Initiates the xml file
    $path = "personas.xml";
    $xml = simplexml_load_file($path);
    
    $user = $_SESSION['name'];
    
    function generate_traits(){
    //Randomly picks two traits and assigns them to the appropriate session variables
        global $trait_list;
        
        $trait_random = array_rand($trait_list, 3);
        $_SESSION['trait1'] = $trait_list[$trait_random[0]];
        $_SESSION['trait2'] = $trait_list[$trait_random[1]];
        $_SESSION['trait3'] = $trait_list[$trait_random[2]];
    
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
    }
  

?>
    