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
    <h2>Charlatan</h2>
    <p>Please select your starting background traits.</p>
    <p><b>Skill Proficiencies:</b> Deception, Sleight of Hand</p>
    <p><b>Tool Proficiencies:</b> Disguise kit, Forgery kit</p>
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
        
    <p><b>Eqiupment:</b> A set of fine clothes, a disguise kit, tools of the con of your choice (ten stoppered bottles filled with colored liquid, a set of weighted dice, a deck of marked cards, or a signet ring of an imaginary duke), and also a belt pouch which is containing 15 gp.</p>
    <p>Select your background gear</p>
    <input type="radio" id="Ten Stoppered Bottles" name="bGear" value="Ten Stoppered Bottles" checked><label>ten stoppered bottles filled with colored liquid</label>
    <input type="radio" id="Weight Dice" name="bGear" value="Weight Dice"><label>set of weighted dice</label>
    <input type="radio" id="Marked Cards" name="bGear" value="Marked Cards"><label>deck of marked cards</label><input type="radio" id="Fake Ring" name="bGear" value="Fake Ring"><label>signet ring of an imaginary duke</label><br>
        
        <label for="Schemes">Choose your favorite scheme:</label>
    <select name="Schemes" id="Schemes">
        <option value="s1">I cheat at games of chance.</option>
        <option value="s2">I shave coins or forge documents.</option>
        <option value="s3">I insinuate myself into people's lives to prey on their weakness and secure their fortunes.</option>
        <option value="s4">I put on new identities like clothes.</option>
        <option value="s5">I run sleight-of-hand cons on street corners.</option>
        <option value="s6">I convince people that worthless junk is worth their hard-earned money.</option>
    </select>
        
        <p><b>Feature: False Identity</b> You have created a second identity which does include documentation, established acquaintance and also disguises which is allow you to assume that persona. Moreover, you can forge documents additionally, including the official papers and also personal letters, as long as you have seen an instance of the kind of document or the handwriting which is you are trying to copy.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I fall in and out of love easily, and am always pursuing someone.</option>
        <option value="p2">I have a joke for every occasion, especially occasions where humor is inappropriate.</option>
        <option value="p3">Flattery is my preferred trick for getting what I want.</option>
        <option value="p4">I'm a born gambler who can't resist taking a risk for a potential payoff.</option>
        <option value="p5">I lie about almost everything, even when there's no good reason to.</option>
        <option value="p6">Sarcasm and insults are my weapons of choice.</option>
        <option value="p7">I keep multiple holy symbols on me and invoke whatever deity might come in useful at any given moment.</option>
        <option value="p8">I pocket anything I see that might have some value.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Independence. I am a free spirit – no one tells me what to do. (Chaotic)</option>
        <option value="i2">Fairness. I never target people who can't afford to lose a few coins. (Lawful)</option>
        <option value="i3">Charity. I distribute the money I acquire to the people who really need it. (Good)</option>
        <option value="i4">Creativity. I never run the same con twice. (Chaotic)</option>
        <option value="i5">Friendship. Material goods come and go. Bonds of friendship last forever. (Good)</option>
        <option value="i6">Aspiration. I'm determined to make something of myself. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">I fleeced the wrong person and must work to ensure that this individual never crosses paths with me or those I care about.</option>
        <option value="b2">I owe everything to my mentor – a horrible person who's probably rotting in jail somewhere.</option>
        <option value="b3">Somewhere out there, I have a child who doesn't know me. I'm making the world better for him or her.</option>
        <option value="b4">I come from a noble family, and one day I'll reclaim my lands and title from those who stole them from me.</option>
        <option value="b5">A powerful person killed someone I love. Some day soon, I'll have my revenge.</option>
        <option value="b6">I swindled and ruined a person who didn't deserve it. I seek to atone for my misdeeds but might never be able to forgive myself.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I can't resist a pretty face.</option>
        <option value="f2">I'm always in debt. I spend my ill-gotten gains on decadent luxuries faster than I bring them in.</option>
        <option value="f3">I'm convinced that no one could ever fool me the way I fool others.</option>
        <option value="f4">I'm too greedy for my own good. I can't resist taking a risk if there's money involved.</option>
        <option value="f5">I can't resist swindling people who are more powerful than me.</option>
        <option value="f6">I hate to admit it and will hate myself for it, but I'll run and preserve my own hide if the going gets tough.</option>
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
        $scheme = $_POST['Schemes'];
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
            $_SESSION['skillb1'] = "Deception";
            $_SESSION['skillb2'] = "Sleight of Hand";
            $_SESSION['instrumentb'] = "";
            $_SESSION['artTools'] = "";
            $_SESSION['language1'] = "";
            $_SESSION['language2'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Charlatan\n
                    Skill Proficiencies: Deception, Sleight of Hand\n
                    Tool Proficiencies: Disguise kit, Forgery kit\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "
                     Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: A set of fine clothes, a disguise kit, $bGear, and also a belt pouch which is containing 15 gp.\n";
            $txt .= "Feature: False Identity\n
                     You have created a second identity which does include documentation, established acquaintance and also disguises which is allow you to assume that persona. Moreover, you can forge documents additionally, including the official papers and also personal letters, as long as you have seen an instance of the kind of document or the handwriting which is you are trying to copy.\n";

            $txt .= "
                     Favorite Scheme: ";
            switch ($scheme) {
                case "s1":
                    $txt .= "I cheat at games of chance.\n";
                    break;
                case "s2":
                    $txt .= "I shave coins or forge documents.\n";
                    break;
                case "s3":
                    $txt .= "I insinuate myself into people's lives to prey on their weakness and secure their fortunes.\n";
                    break;
                case "s4":
                    $txt .= "I put on new identities like clothes.\n";
                    break;
                case "s5":
                    $txt .= "I run sleight-of-hand cons on street corners.\n";
                    break;
                case "s6":
                    $txt .= "I convince people that worthless junk is worth their hard-earned money.\n";
                    break;
            }

            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I fall in and out of love easily, and am always pursuing someone.\n";
                    break;
                case "p2":
                    $txt .= "I have a joke for every occasion, especially occasions where humor is inappropriate.\n";
                    break;
                case "p3":
                    $txt .= "Flattery is my preferred trick for getting what I want.\n";
                    break;
                case "p4":
                    $txt .= "I'm a born gambler who can't resist taking a risk for a potential payoff.\n";
                    break;
                case "p5":
                    $txt .= "I lie about almost everything, even when there's no good reason to.\n";
                    break;
                case "p6":
                    $txt .= "Sarcasm and insults are my weapons of choice.\n";
                    break;
                case "p7":
                    $txt .= "I keep multiple holy symbols on me and invoke whatever deity might come in useful at any given moment.\n";
                    break;
                case "p8":
                    $txt .= "I pocket anything I see that might have some value.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Independence. I am a free spirit – no one tells me what to do. (Chaotic)\n";
                    break;
                case "i2":
                    $txt .= "Fairness. I never target people who can't afford to lose a few coins. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Charity. I distribute the money I acquire to the people who really need it. (Good)\n";
                    break;
                case "i4":
                    $txt .= "Creativity. I never run the same con twice. (Chaotic)\n";
                    break;
                case "i5":
                    $txt .= "Friendship. Material goods come and go. Bonds of friendship last forever. (Good)\n";
                    break;
                case "i6":
                    $txt .= "Aspiration. I'm determined to make something of myself. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "I fleeced the wrong person and must work to ensure that this individual never crosses paths with me or those I care about.\n";
                    break;
                case "b2":
                    $txt .= "I owe everything to my mentor – a horrible person who's probably rotting in jail somewhere.\n";
                    break;
                case "b3":
                    $txt .= "Somewhere out there, I have a child who doesn't know me. I'm making the world better for him or her.\n";
                    break;
                case "b4":
                    $txt .= "I come from a noble family, and one day I'll reclaim my lands and title from those who stole them from me.\n";
                    break;
                case "b5":
                    $txt .= "A powerful person killed someone I love. Some day soon, I'll have my revenge.\n";
                    break;
                case "b6":
                    $txt .= "I swindled and ruined a person who didn't deserve it. I seek to atone for my misdeeds but might never be able to forgive myself.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "I can't resist a pretty face.\n";
                    break;
                case "f2":
                    $txt .= "I'm always in debt. I spend my ill-gotten gains on decadent luxuries faster than I bring them in.\n";
                    break;
                case "f3":
                    $txt .= "I'm convinced that no one could ever fool me the way I fool others.\n";
                    break;
                case "f4":
                    $txt .= "I'm too greedy for my own good. I can't resist taking a risk if there's money involved.\n";
                    break;
                case "f5":
                    $txt .= "I can't resist swindling people who are more powerful than me.\n";
                    break;
                case "f6":
                    $txt .= "I hate to admit it and will hate myself for it, but I'll run and preserve my own hide if the going gets tough.\n";
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