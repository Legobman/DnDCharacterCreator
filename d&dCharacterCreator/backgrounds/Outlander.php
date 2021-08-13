<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/berwickwebsitestyles.css">
	<title></title>
	<meta charset="utf-8">
</head>
<body>
    <h2>Outlander</h2>
    <p>Please select your starting traits.</p>
    <p><b>Skill Proficiencies:</b> Athletics, Survival</p>
    <p><b>Tool Proficiencies:</b> One type of musical instrument</p>
    <form method="post">
    
<!--The form to pick your languages -->
    <label for="language1">Choose your language:</label>
    <select name="language1" id="language1">
        <option value="Dwarish">Dwarish</option>
        <option value="Elvish">Elvish</option>
        <option value="Giant">Giant</option>
        <option value="Gnomish">Gnomish</option>
        <option value="Goblin">Goblin</option>
        <option value="Halfling">Halfling</option>
        <option value="Orc">Orc</option>
    </select>
        <br>
    <?php
    if($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
        ?>
        <label for="languageR">Choose a extra racial lanuage:</label>
        <select name="languageR" id="languageR">
            <option value="Dwarish">Dwarish</option>
            <option value="Elvish">Elvish</option>
            <option value="Giant">Giant</option>
            <option value="Gnomish">Gnomish</option>
            <option value="Goblin">Goblin</option>
            <option value="Halfling">Halfling</option>
            <option value="Orc">Orc</option>
        </select>
        <br>
    <?php
    }
    ?>
        <p>Select your instrument</p>
    <input type="radio" id="Bagpipies" name="instrument" value="Bagpipies" checked><label>Bagpipies</label>
    <input type="radio" id="Drum" name="instrument" value="Drum"><label>Drum</label>
    <input type="radio" id="Dulcimer" name="instrument" value="Dulcimer"><label>Dulcimer</label>
    <input type="radio" id="Flute" name="instrument" value="Flute"><label>Flute</label>
    <input type="radio" id="Lute" name="instrument" value="Lute"><label>Lute</label>
    <input type="radio" id="Lyre" name="instrument" value="Lyre"><label>Lyre</label>
    <input type="radio" id="Horn" name="instrument" value="Horn"><label>Horn</label>
    <input type="radio" id="Pan flute" name="instrument" value="Pan flute"><label>Pan flute</label>
    <input type="radio" id="Shawm" name="instrument" value="Shawm"><label>Shawm</label>
    <input type="radio" id="Viol" name="instrument" value="Viol"><label>Viol</label>
        <br>
        <label for="Origin">Choose your Origin:</label>
    <select name="Origin" id="Origin">
        <option value="o1">Forester.</option>
        <option value="o2">Trapper.</option>
        <option value="o3">Homesteader.</option>
        <option value="o4">Guide.</option>
        <option value="o5">Exile or outcast.</option>
        <option value="o6">Bounty hunter.</option>
        <option value="o7">Pilgrim.</option>
        <option value="o8">Tribal nomad.</option>
        <option value="o9">Hunter-gatherer.</option>
        <option value="o10">Tribal marauder.</option>
    </select>
        
    <p><b>Eqiupment:</b> A staff, a hunting trap, a trophy from an animal you killed, a set of traveler's clothes, and a belt pouch containing 10 gp.</p>
        
        <p><b>Feature: Wanderer</b> You have an excellent memory for maps and geography, and you can always recall the general layout of terrain, settlements, and other features around you. In addition, you can find food and fresh water for yourself and up to five other people each day, provided that the land offers berries, small game, water, and so forth.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I'm driven by a wanderlust that led me away from home.</option>
        <option value="p2">I watch over my friends as if they were a litter of newborn pups.</option>
        <option value="p3">I once ran twenty-five miles without stopping to warn my clan of an approaching orc horde. I'd do it again if I had to.</option>
        <option value="p4">I have a lesson for every situation, drawn from observing nature.</option>
        <option value="p5">I place no stock in wealthy or well-mannered folk. Money and manners won't save you from a hungry owlbear.</option>
        <option value="p6">I'm always picking things up, absently fiddling with them, and sometimes accidentally breaking them.</option>
        <option value="p7">I feel far more comfortable around animals than people.</option>
        <option value="p8">I was, in fact, raised by wolves.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Change. Life is like the seasons, in constant change, and we must change with it. (Chaotic)</option>
        <option value="i2">Greater Good. It is each person's responsibility to make the most happiness for the whole tribe. (Good)</option>
        <option value="i3">Honor. If I dishonor myself, I dishonor my whole clan. (Lawful)</option>
        <option value="i4">Might. The strongest are meant to rule. (Evil)</option>
        <option value="i5">Nature. The natural world is more important than all the constructs of civilization. (Neutral)</option>
        <option value="i6">Glory. I must earn glory in battle, for myself and my clan. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">My family, clan, or tribe is the most important thing in my life, even when they are far from me.</option>
        <option value="b2">An injury to the unspoiled wilderness of my home is an injury to me.</option>
        <option value="b3">I’m still seeking the enlightenment I pursued in my seclusion, and it still eludes me.</option>
        <option value="b4">I entered seclusion because I loved someone I could not have.</option>
        <option value="b5">Should my discovery come to light, it could bring ruin to the world.</option>
        <option value="b6">My isolation gave me great insight into a great evil that only I can destroy.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">Now that I've returned to the world, I enjoy its delights a little too much.</option>
        <option value="f2">I harbor dark, bloodthirsty thoughts that my isolation and meditation failed to quell.</option>
        <option value="f3">I will bring terrible wrath down on the evildoers who destroyed my homeland.</option>
        <option value="f4">I am the last of my tribe, and it is up to me to ensure their names enter legend.</option>
        <option value="f5">I suffer awful visions of a coming disaster and will do anything to prevent it.</option>
        <option value="f6">It is my duty to provide children to sustain my tribe.</option>
    </select>
    
    <input type="submit" value="Submit">
    </form>
<?php
     // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // save selection to character file and session
        $txt = "";
        $language1 = $_POST['language1'];
        if($_POST['languageR'] != ""){
            $languageR = $_POST['languageR'];
        }
        $instrument = $_POST['instrument'];
        $origin = $_POST['Origin'];
        $personality = $_POST['Personality'];
        $ideal = $_POST['Ideal'];
        $bond = $_POST['Bond'];
        $flaw = $_POST['Flaw'];
        if ($_SESSION['raceLanguage'] == $language1 or $_SESSION['raceLanguage'] == $languageR){
            echo "you already know one of the languages you picked.";
        } else{

            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");

            // save the variables to the session
            $_SESSION['skillb1'] = "Athletics";
            $_SESSION['skillb2'] = "Survival";
            $_SESSION['instrumentb'] = $instrument;
            $_SESSION['language1'] = $language1;
            $_SESSION['language2'] = "";
            $_SESSION['artTools'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Outlander\n
                    Skill Proficiencies: Athletics, Survival\n
                    Tool Proficiencies: $instrument\n
                    Languages: $language1.\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: A scroll case stuffed full of notes from your studies or prayers, a winter blanket, a set of common clothes, an herbalism kit, and 5 gp.\n";
            $txt .= "Feature: Wanderer\n
                     You have an excellent memory for maps and geography, and you can always recall the general layout of terrain, settlements, and other features around you. In addition, you can find food and fresh water for yourself and up to five other people each day, provided that the land offers berries, small game, water, and so forth.\n";

            $txt .= "
                     Origin: ";
            switch ($scheme) {
                case "o1":
                    $txt .= "Forester.\n";
                    break;
                case "o2":
                    $txt .= "Trapper.\n";
                    break;
                case "o3":
                    $txt .= "Homesteader.\n";
                    break;
                case "o4":
                    $txt .= "Guide.\n";
                    break;
                case "o5":
                    $txt .= "Exile or outcast.\n";
                    break;
                case "o6":
                    $txt .= "Bounty hunter.\n";
                    break;
                case "o7":
                    $txt .= "Pilgrim.\n";
                    break;
                case "o8":
                    $txt .= "Tribal nomad.\n";
                    break;
                case "o9":
                    $txt .= "Hunter-gatherer.\n";
                    break;
                case "o10":
                    $txt .= "Tribal marauder.\n";
                    break;
            }
            
            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I'm driven by a wanderlust that led me away from home.\n";
                    break;
                case "p2":
                    $txt .= "I watch over my friends as if they were a litter of newborn pups.\n";
                    break;
                case "p3":
                    $txt .= "I once ran twenty-five miles without stopping to warn my clan of an approaching orc horde. I'd do it again if I had to.\n";
                    break;
                case "p4":
                    $txt .= "I have a lesson for every situation, drawn from observing nature.\n";
                    break;
                case "p5":
                    $txt .= "I place no stock in wealthy or well-mannered folk. Money and manners won't save you from a hungry owlbear.\n";
                    break;
                case "p6":
                    $txt .= "I'm always picking things up, absently fiddling with them, and sometimes accidentally breaking them.\n";
                    break;
                case "p7":
                    $txt .= "I feel far more comfortable around animals than people.\n";
                    break;
                case "p8":
                    $txt .= "I was, in fact, raised by wolves.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Change. Life is like the seasons, in constant change, and we must change with it. (Chaotic)\n";
                    break;
                case "i2":
                    $txt .= "Greater Good. It is each person's responsibility to make the most happiness for the whole tribe. (Good)\n";
                    break;
                case "i3":
                    $txt .= "Honor. If I dishonor myself, I dishonor my whole clan. (Lawful)\n";
                    break;
                case "i4":
                    $txt .= "Might. The strongest are meant to rule. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "Nature. The natural world is more important than all the constructs of civilization. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Glory. I must earn glory in battle, for myself and my clan. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "My family, clan, or tribe is the most important thing in my life, even when they are far from me.\n";
                    break;
                case "b2":
                    $txt .= "An injury to the unspoiled wilderness of my home is an injury to me.\n";
                    break;
                case "b3":
                    $txt .= "I will bring terrible wrath down on the evildoers who destroyed my homeland.\n";
                    break;
                case "b4":
                    $txt .= "I am the last of my tribe, and it is up to me to ensure their names enter legend.\n";
                    break;
                case "b5":
                    $txt .= "I suffer awful visions of a coming disaster and will do anything to prevent it.\n";
                    break;
                case "b6":
                    $txt .= "It is my duty to provide children to sustain my tribe.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "I am too enamored of ale, wine, and other intoxicants.\n";
                    break;
                case "f2":
                    $txt .= "There's no room for caution in a life lived to the fullest.\n";
                    break;
                case "f3":
                    $txt .= "I remember every insult I've received and nurse a silent resentment toward anyone who's ever wronged me.\n";
                    break;
                case "f4":
                    $txt .= "I am slow to trust members of other races, tribes, and societies.\n";
                    break;
                case "f5":
                    $txt .= "Violence is my answer to almost any challenge.\n";
                    break;
                case "f6":
                    $txt .= "Don't expect me to save those who can't save themselves. It is nature's way that the strong thrive and the weak perish.\n";
                    break;
            }

            fwrite($characterFile, $txt);
            fclose($characterFile);
            ?> <p><a href="../classes/<?php echo $_SESSION['class'] ?>.php">Continue to the next step.</a></p>
<?php
        }
    
    }
?> 
</body>
</html>