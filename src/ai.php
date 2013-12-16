<?php
    //The list of AI traits
    //$trait_list = array("jovial", "belligerent", "lazy", "snarky", "motivational", "amorous", "bubbly", "humorous", "optimistic", "pessimistic", "bossy", "artistic", "pedantic", "empathetic", "adventurous", "crude");
    $trait_list = array("jovial", "belligerent", "lazy", "snarky");
    //Initiates the xml file
    $path = "src/personas.xml";
    $xml = simplexml_load_file($path);
    
    $user = $_SESSION['user'];
    
    function generate_traits(){
    //Randomly picks two traits and assigns them to the appropriate session variables
        global $trait_list;
        
        $trait_random = array_rand($trait_list, 3);
        $_SESSION['trait1'] = $trait_list[$trait_random[0]];
        $_SESSION['trait2'] = $trait_list[$trait_random[1]];
        $_SESSION['trait3'] = $trait_list[$trait_random[2]];
        
        echo($_SESSION['trait1']."<br />".$_SESSION['trait2']."<br />".$_SESSION['trait3']."<br />");
        echo("<br /><br /><br />");
    }
    
    function get_quote($action){
        global $xml;
        global $user;
        
        $trait1 = $_SESSION['trait1'];
        $trait2 = $_SESSION['trait2'];
        $trait3 = $_SESSION['trait3'];
        
        $item1 = $xml->xpath("//persona[@name=\"$trait1\"]/$action");
        $item1 = (string)$item1[0];
        $item2 = $xml->xpath("//persona[@name=\"$trait2\"]/$action");
        $item2 = (string)$item2[0];
        $item3 = $xml->xpath("//persona[@name=\"$trait3\"]/$action");
        $item3 = (string)$item3[0];

        
        $_SESSION['quote_array'] = array($item1, $item2, $item3);
        $quote_array = $_SESSION['quote_array'];
        
        print_r($quote_array);
        
        $_SESSION['quote'] = $quote_array[array_rand($quote_array)];
        
        echo "<br /><br />";
        print_r($_SESSION['quote']);
    }
  

?>
    