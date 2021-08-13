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
    <h2>Noble</h2>
    <p>Please select your starting traits.</p>
    <p><b>Skill Proficiencies:</b> History, Persuasion</p>
    <p><b>Tool Proficiencies:</b> One type of gaming set</p>
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
        
    <p><b>Eqiupment:</b> A set of fine clothes, a signet ring, a scroll of pedigree, and a purse containing 25 gp.</p>
        
        <label for="Gaming">Choose your game set:</label>
    <select name="Gaming" id="Gaming">
        <option value="Dice set">Dice set.</option>
        <option value="Dragonchess set">Dragonchess set.</option>
        <option value="Playing card set">Playing card set.</option>
        <option value="Three-Dragon Ante set">Three-Dragon Ante set.</option>
    </select>
        
        <p><b>Feature: Position of Privilege</b> Thanks to your noble birth, people are inclined to think the best of you. You are welcome in high society, and people assume you have the right to be wherever you are. The common folk make every effort to accommodate you and avoid your displeasure, and other people of high birth treat you as a member of the same social sphere. You can secure an audience with a local noble if you need to.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">My eloquent flattery makes everyone I talk to feel like the most wonderful and important person in the world.</option>
        <option value="p2">The common folk love me for my kindness and generosity.</option>
        <option value="p3">No one could doubt by looking at my regal bearing that I am a cut above the unwashed masses.</option>
        <option value="p4">I take great pains to always look my best and follow the latest fashions.</option>
        <option value="p5">I don't like to get my hands dirty, and I won't be caught dead in unsuitable accommodations.</option>
        <option value="p6">Despite my noble birth, I do not place myself above other folk. We all have the same blood.</option>
        <option value="p7">My favor, once lost, is lost forever.</option>
        <option value="p8">If you do me an injury, I will crush you, ruin your name, and salt your fields.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Respect. Respect is due to me because of my position, but all people regardless of station deserve to be treated with dignity. (Good)</option>
        <option value="i2">Responsibility. It is my duty to respect the authority of those above me, just as those below me must respect mine. (Lawful)</option>
        <option value="i3">Independence. I must prove that I can handle myself without the coddling of my family. (Chaotic)</option>
        <option value="i4">Power. If I can attain more power, no one will tell me what to do. (Evil)</option>
        <option value="i5">Family. Blood runs thicker than water. (Any)</option>
        <option value="i6">Noble Obligation. It is my duty to protect and care for the people beneath me. (Good)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">I will face any challenge to win the approval of my family.</option>
        <option value="b2">My house's alliance with another noble family must be sustained at all costs.</option>
        <option value="b3">Nothing is more important than the other members of my family.</option>
        <option value="b4">I am in love with the heir of a family that my family despises.</option>
        <option value="b5">My loyalty to my sovereign is unwavering.</option>
        <option value="b6">The common folk must see me as a hero of the people.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I secretly believe that everyone is beneath me.</option>
        <option value="f2">I hide a truly scandalous secret that could ruin my family forever.</option>
        <option value="f3">I too often hear veiled insults and threats in every word addressed to me, and I'm quick to anger.</option>
        <option value="f4">I have an insatiable desire for carnal pleasures.</option>
        <option value="f5">In fact, the world does revolve around me.</option>
        <option value="f6">By my words and actions, I often bring shame to my family.</option>
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
        $gaming = $_POST['Gaming'];
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
            $_SESSION['skillb1'] = "History";
            $_SESSION['skillb2'] = "Persuasion";
            $_SESSION['instrumentb'] = "";
            $_SESSION['language1'] = $language1;
            $_SESSION['language2'] = "";
            $_SESSION['artTools'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Noble\n
                    Skill Proficiencies: History, Persuasion\n
                    Tool Proficiencies: $gaming\n
                    Languages: $language1.\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: A set of fine clothes, a signet ring, a scroll of pedigree, and a purse containing 25 gp.\n";
            $txt .= "Feature: Position of Privilege\n
                     Thanks to your noble birth, people are inclined to think the best of you. You are welcome in high society, and people assume you have the right to be wherever you are. The common folk make every effort to accommodate you and avoid your displeasure, and other people of high birth treat you as a member of the same social sphere. You can secure an audience with a local noble if you need to.\n";
            
            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "My eloquent flattery makes everyone I talk to feel like the most wonderful and important person in the world.\n";
                    break;
                case "p2":
                    $txt .= "The common folk love me for my kindness and generosity.\n";
                    break;
                case "p3":
                    $txt .= "No one could doubt by looking at my regal bearing that I am a cut above the unwashed masses.\n";
                    break;
                case "p4":
                    $txt .= "I take great pains to always look my best and follow the latest fashions.\n";
                    break;
                case "p5":
                    $txt .= "I don't like to get my hands dirty, and I won't be caught dead in unsuitable accommodations.\n";
                    break;
                case "p6":
                    $txt .= "Despite my noble birth, I do not place myself above other folk. We all have the same blood.\n";
                    break;
                case "p7":
                    $txt .= "My favor, once lost, is lost forever.\n";
                    break;
                case "p8":
                    $txt .= "If you do me an injury, I will crush you, ruin your name, and salt your fields.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Respect. Respect is due to me because of my position, but all people regardless of station deserve to be treated with dignity. (Good)\n";
                    break;
                case "i2":
                    $txt .= "Responsibility. It is my duty to respect the authority of those above me, just as those below me must respect mine. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Independence. I must prove that I can handle myself without the coddling of my family. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Power. If I can attain more power, no one will tell me what to do. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "Family. Blood runs thicker than water. (Any)\n";
                    break;
                case "i6":
                    $txt .= "Noble Obligation. It is my duty to protect and care for the people beneath me. (Good)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "I will face any challenge to win the approval of my family,\n";
                    break;
                case "b2":
                    $txt .= "My house's alliance with another noble family must be sustained at all costs.\n";
                    break;
                case "b3":
                    $txt .= "Nothing is more important than the other members of my family.\n";
                    break;
                case "b4":
                    $txt .= "I am in love with the heir of a family that my family despises.\n";
                    break;
                case "b5":
                    $txt .= "My loyalty to my sovereign is unwavering.\n";
                    break;
                case "b6":
                    $txt .= "The common folk must see me as a hero of the people.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "I secretly believe that everyone is beneath me.\n";
                    break;
                case "f2":
                    $txt .= "I hide a truly scandalous secret that could ruin my family forever.\n";
                    break;
                case "f3":
                    $txt .= "I too often hear veiled insults and threats in every word addressed to me, and I'm quick to anger.\n";
                    break;
                case "f4":
                    $txt .= "I have an insatiable desire for carnal pleasures.\n";
                    break;
                case "f5":
                    $txt .= "In fact, the world does revolve around me.\n";
                    break;
                case "f6":
                    $txt .= "By my words and actions, I often bring shame to my family.\n";
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