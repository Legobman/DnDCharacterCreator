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
    <h2>Folk Hero</h2>
    <p>Please select your starting background traits.</p>
    <p><b>Skill Proficiencies:</b> Animal Handling, Survival</p>
    <p><b>Tool Proficiencies:</b> Disguise kit, One Type of Musical Instrument</p>
    <form method="post">
    
<!--The form to pick your languages -->
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
        
    <p><b>Eqiupment:</b> A set of artisan tools (x1 your choice), a shovel, an iron pot, a set of common clothes and also a pouch containing 10 gp.</p>
    <p>Select your background gear</p>
    <label for="bGear">Choose your Artisan's tools:</label>
    <select name="bGear" id="bGear">
        <option value="Alchemist's supplies">Alchemist's supplies.</option>
        <option value="Brewer's supplies">Brewer's supplies.</option>
        <option value="Calligrapher's supplies">Calligrapher's supplies.</option>
        <option value="Carpenter's tools">Carpenter's tools.</option>
        <option value="Cartogrpher's tools">Cartogrpher's tools.</option>
        <option value="Cobbler's tools">Cobbler's tools.</option>
        <option value="Cook's utensils">Cook's utensils.</option>
        <option value="Glassblower's tools">Glassblower's tools.</option>
        <option value="Jeweler's tools">Jeweler's tools.</option>
        <option value="Leatherworker's tools">Leatherworker's tools.</option>
        <option value="Mason's tools">Mason's tools.</option>
        <option value="Painter's supplies">Painter's supplies.</option>
        <option value="Potter's tools">Potter's tools.</option>
        <option value="Smith's tools">Smith's tools.</option>
        <option value="Tinker's tools">Tinker's tools.</option>
        <option value="Weaver's tools">Weaver's tools.</option>
        <option value="Woodcarver's tools">Woodcarver's tools.</option>
    </select>
        <br>
        <label for="DEvent">Choose your Defining Event:</label>
    <select name="DEvent" id="DEvent">
        <option value="e1">I stood up to a tyrant’s agents.</option>
        <option value="e2">I saved people during a natural disaster.</option>
        <option value="e3">I stood alone against a terrible monster.</option>
        <option value="e4">I stole from a corrupt merchant to help the poor.</option>
        <option value="e5">I led a militia to fight off an invading army.</option>
        <option value="e6">I broke into a tyrant’s castle and stole weapons to arm the people.</option>
        <option value="e7">I trained the peasantry to use farm implements as weapons against a tyrant’s soldiers.</option>
        <option value="e8">A lord rescinded an unpopular decree after I led a symbolic act of protest against it.</option>
        <option value="e9">A celestial, fey, or similar creature gave me a blessing or revealed my secret origin.</option>
        <option value="e10">Recruited into a lord’s army, I rose to leadership and was commended for my heroism.</option>
    </select>
        <br>
        
        <p><b>Feature: Rustic Hospitality</b> Since you had been come from the ranks of the common folk and you fit in among them with an ease. You can also able to find a place to hide, rest or else recuperate among the all other commoners, until unless you have shown yourself to be the danger to them. They will be shield you either from the law or from the anyone else those are searching for you, though they would not risk their lives for you.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I do judge people by their actions, not their words.</option>
        <option value="p2">If someone is in trouble, I’m always ready to lend help.</option>
        <option value="p3">When I set my mind to something, I follow through no matter what gets in my way.</option>
        <option value="p4">I do have a strong sense of fair play and always try to find the most equitable solution to arguments.</option>
        <option value="p5">I’m confident in my own abilities and do what I can to instill confidence in others.</option>
        <option value="p6">Thinking is for other people. I prefer action.</option>
        <option value="p7">I misuse long words in an attempt to sound smarter.</option>
        <option value="p8">I get bored easily. When am I going to get on with my destiny?</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Respect: People deserve to be treated with dignity and respect. (Good)</option>
        <option value="i2">	Fairness: No one should get preferential treatment before the law, and no one is above the law. (Lawful)</option>
        <option value="i3">Freedom: Tyrants must not be allowed to oppress the people. (Chaotic)</option>
        <option value="i4">Might: If I become strong, I can take what I want—what I deserve. (Evil)</option>
        <option value="i5">Sincerity: There’s no good in pretending to be something I’m not. (Neutral)</option>
        <option value="i6">Destiny: Nothing and no one can steer me away from my higher calling. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">I have a family, but I have no idea where they are. One day, I hope to see them again.</option>
        <option value="b2">I worked the land, I love the land, and I will protect the land.</option>
        <option value="b3">A proud noble once gave me a horrible beating, and I will take my revenge on any bully I encounter.</option>
        <option value="b4">My tools are symbols of my past life, and I carry them so that I will never forget my roots.</option>
        <option value="b5">I protect those who cannot protect themselves.</option>
        <option value="b6">I wish my childhood sweetheart had come with me to pursue my destiny.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I'll do anything to win fame and renown.</option>
        <option value="f2">I'm a sucker for a pretty face.</option>
        <option value="f3">A scandal prevents me from ever going home again. That kind of trouble seems to follow me around.</option>
        <option value="f4">I once satirized a noble who still wants my head. It was a mistake that I will likely repeat.</option>
        <option value="f5">I have trouble keeping my true feelings hidden. My sharp tongue lands me in trouble.</option>
        <option value="f6">Despite my best efforts, I am unreliable to my friends.</option>
    </select>
        
    <input type="submit" value="Submit">
    </form>
<?php
     // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // save selection to character file and session
        $txt = "";
        if($_POST['languageR'] != ""){
            $languageR = $_POST['languageR'];
        }
        $dEvent = $_POST['DEvent'];
        $bGear = $_POST['bGear'];
        $personality = $_POST['Personality'];
        $ideal = $_POST['Ideal'];
        $bond = $_POST['Bond'];
        $flaw = $_POST['Flaw'];
        
        if ($_SESSION['raceLanguage'] == $languageR){
            echo "you already know one of the languages you picked.";
        } else{

            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");

            // save the variables to the session
            $_SESSION['skillb1'] = "Animal Handling";
            $_SESSION['skillb2'] = "Survival";
            $_SESSION['instrumentb'] = "";
            $_SESSION['artTools'] = $bGear;
            $_SESSION['language1'] = "";
            $_SESSION['language2'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Folk Hero\n
                    Skill Proficiencies: Animal Handling, Survival\n
                    Tool Proficiencies: $bGear, vehicles (Land)\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "
                     Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: $bGear, a shovel, an iron pot, a set of common clothes and also a pouch containing 10 gp.\n";
            $txt .= "Feature: Rustic Hospitality\n
                     Since you had been come from the ranks of the common folk and you fit in among them with an ease. You can also able to find a place to hide, rest or else recuperate among the all other commoners, until unless you have shown yourself to be the danger to them. They will be shield you either from the law or from the anyone else those are searching for you, though they would not risk their lives for you.\n";
            
            $txt .= "
                     Defining Events: ";
            switch ($routines) {
                case "r1":
                    $txt .= "I stood up to a tyrant’s agents.\n";
                    break;
                case "r2":
                    $txt .= "I saved people during a natural disaster.\n";
                    break;
                case "r3":
                    $txt .= "I stood alone against a terrible monster.\n";
                    break;
                case "r4":
                    $txt .= "I stole from a corrupt merchant to help the poor.\n";
                    break;
                case "r5":
                    $txt .= "I led a militia to fight off an invading army.\n";
                    break;
                case "r6":
                    $txt .= "I broke into a tyrant’s castle and stole weapons to arm the people.\n";
                    break;
                case "r7":
                    $txt .= "I trained the peasantry to use farm implements as weapons against a tyrant’s soldiers.\n";
                    break;
                case "r8":
                    $txt .= "A lord rescinded an unpopular decree after I led a symbolic act of protest against it.\n";
                    break;
                case "r9":
                    $txt .= "A celestial, fey, or similar creature gave me a blessing or revealed my secret origin.\n";
                    break;
                case "r10":
                    $txt .= "Recruited into a lord’s army, I rose to leadership and was commended for my heroism.\n";
                    break;
            }

            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I do judge people by their actions, not their words.\n";
                    break;
                case "p2":
                    $txt .= "If someone is in trouble, I’m always ready to lend help.\n";
                    break;
                case "p3":
                    $txt .= "When I set my mind to something, I follow through no matter what gets in my way.\n";
                    break;
                case "p4":
                    $txt .= "	I do have a strong sense of fair play and always try to find the most equitable solution to arguments.\n";
                    break;
                case "p5":
                    $txt .= "I’m confident in my own abilities and do what I can to instill confidence in others.\n";
                    break;
                case "p6":
                    $txt .= "Thinking is for other people. I prefer action.\n";
                    break;
                case "p7":
                    $txt .= "I misuse long words in an attempt to sound smarter.\n";
                    break;
                case "p8":
                    $txt .= "I get bored easily. When am I going to get on with my destiny?\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Respect: People deserve to be treated with dignity and respect. (Good)\n";
                    break;
                case "i2":
                    $txt .= "Fairness: No one should get preferential treatment before the law, and no one is above the law. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Freedom: Tyrants must not be allowed to oppress the people. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Might: If I become strong, I can take what I want—what I deserve. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "Sincerity: There’s no good in pretending to be something I’m not. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Destiny: Nothing and no one can steer me away from my higher calling. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "I have a family, but I have no idea where they are. One day, I hope to see them again.\n";
                    break;
                case "b2":
                    $txt .= "I worked the land, I love the land, and I will protect the land.\n";
                    break;
                case "b3":
                    $txt .= "	A proud noble once gave me a horrible beating, and I will take my revenge on any bully I encounter.\n";
                    break;
                case "b4":
                    $txt .= "My tools are symbols of my past life, and I carry them so that I will never forget my roots.\n";
                    break;
                case "b5":
                    $txt .= "I protect those who cannot protect themselves.\n";
                    break;
                case "b6":
                    $txt .= "I wish my childhood sweetheart had come with me to pursue my destiny.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "The tyrant who rules my land will stop at nothing to see me killed.\n";
                    break;
                case "f2":
                    $txt .= "I’m convinced of the significance of my destiny, and blind to my shortcomings and the risk of failure.\n";
                    break;
                case "f3":
                    $txt .= "The people who knew me when I was young know my shameful secret, so I can never go home again.\n";
                    break;
                case "f4":
                    $txt .= "I have a weakness for the vices of the city, especially hard drink.\n";
                    break;
                case "f5":
                    $txt .= "Secretly, I believe that things would be better if I were a tyrant lording over the land.\n";
                    break;
                case "f6":
                    $txt .= "I have trouble trusting in my allies.\n";
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