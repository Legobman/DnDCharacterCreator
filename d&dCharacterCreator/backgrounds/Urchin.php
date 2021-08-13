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
    <h2>Urchin</h2>
    <p>Please select your starting background traits.</p>
    <p><b>Skill Proficiencies:</b> Sleight of Hand, Stealth</p>
    <p><b>Tool Proficiencies:</b> Disguise kit, thieves' tools</p>
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
        
    <p><b>Eqiupment:</b> A small knife, a map of the city you grew up in, a pet mouse, a token to remember your parents by, a set of common clothes, and a belt pouch containing 10 gp.</p>
        
        <p><b>Feature: City Secrets</b> You know the secret patterns and flow to cities and can find passages through the urban sprawl that others would miss. When you are not in combat, you (and companions you lead) can travel between any two locations in the city twice as fast as your speed would normally allow.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I hide scraps of food and trinkets away in my pockets.</option>
        <option value="p2">I ask a lot of questions.</option>
        <option value="p3">I like to squeeze into small places where no one else can get to me.</option>
        <option value="p4">I sleep with my back to a wall or tree, with everything I own wrapped in a bundle in my arms.</option>
        <option value="p5">I eat like a pig and have bad manners.</option>
        <option value="p6">I think anyone who's nice to me is hiding evil intent.</option>
        <option value="p7">I don't like to bathe.</option>
        <option value="p8">I bluntly say what other people are hinting at or hiding.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Respect. All people, rich or poor, deserve respect. (Good)</option>
        <option value="i2">Community. We have to take care of each other, because no one else is going to do it. (Lawful)</option>
        <option value="i3">Change. The low are lifted up, and the high and mighty are brought down. Change is the nature of things. (Chaotic)</option>
        <option value="i4">Retribution. The rich need to be shown what life and death are like in the gutters. (Evil)</option>
        <option value="i5">People. I help the people who help me-that's what keeps us alive. (Neutral)</option>
        <option value="i6">Aspiration. I'm going to prove that I'm worthy of a better life. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">My town or city is my home, and I'll fight to defend it.</option>
        <option value="b2">I sponsor an orphanage to keep others from enduring what I was forced to endure.</option>
        <option value="b3">I owe my survival to another urchin who taught me to live on the streets.</option>
        <option value="b4">I owe a debt I can never repay to the person who took pity on me.</option>
        <option value="b5">I escaped my life of poverty by robbing an important person, and I'm wanted for it.</option>
        <option value="b6">No one else should have to endure the hardships I've been through.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">If I'm outnumbered, I will run away from a fight.</option>
        <option value="f2">Gold seems like a lot of money to me, and I'll do just about anything for more of it.</option>
        <option value="f3">I will never fully trust anyone other than myself.</option>
        <option value="f4">I'd rather kill someone in their sleep then fight fair.</option>
        <option value="f5">It's not stealing if I need it more than someone else.</option>
        <option value="f6">People who can't take care of themselves get what they deserve.</option>
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
        $_SESSION['instrumentb'] = "";
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
            $_SESSION['skillb1'] = "Sleight of Hand";
            $_SESSION['skillb2'] = "Stealth";
            $_SESSION['artTools'] = "";
            $_SESSION['language1'] = "";
            $_SESSION['language2'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Urchin\n
                    Skill Proficiencies: Athletics, Perception\n
                    Tool Proficiencies: Disguise kit, thieves' tools\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "
                     Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: A small knife, a map of the city you grew up in, a pet mouse, a token to remember your parents by, a set of common clothes, and a belt pouch containing 10 gp.\n";
            $txt .= "Feature: City Secret\n
                     You know the secret patterns and flow to cities and can find passages through the urban sprawl that others would miss. When you are not in combat, you (and companions you lead) can travel between any two locations in the city twice as fast as your speed would normally allow.\n";


            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I hide scraps of food and trinkets away in my pockets.\n";
                    break;
                case "p2":
                    $txt .= "I ask a lot of questions.\n";
                    break;
                case "p3":
                    $txt .= "I like to squeeze into small places where no one else can get to me.\n";
                    break;
                case "p4":
                    $txt .= "I sleep with my back to a wall or tree, with everything I own wrapped in a bundle in my arms.\n";
                    break;
                case "p5":
                    $txt .= "I eat like a pig and have bad manners.\n";
                    break;
                case "p6":
                    $txt .= "I think anyone who's nice to me is hiding evil intent.\n";
                    break;
                case "p7":
                    $txt .= "I don't like to bathe.\n";
                    break;
                case "p8":
                    $txt .= "I bluntly say what other people are hinting at or hiding.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Respect. All people, rich or poor, deserve respect. (Good)\n";
                    break;
                case "i2":
                    $txt .= "Community. We have to take care of each other, because no one else is going to do it. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Change. The low are lifted up, and the high and mighty are brought down. Change is the nature of things. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Retribution. The rich need to be shown what life and death are like in the gutters. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "People. I help the people who help me-that's what keeps us alive. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Aspiration. I'm going to prove that I'm worthy of a better life. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "My town or city is my home, and I'll fight to defend it.\n";
                    break;
                case "b2":
                    $txt .= "I sponsor an orphanage to keep others from enduring what I was forced to endure.\n";
                    break;
                case "b3":
                    $txt .= "I owe my survival to another urchin who taught me to live on the streets.\n";
                    break;
                case "b4":
                    $txt .= "I owe a debt I can never repay to the person who took pity on me.\n";
                    break;
                case "b5":
                    $txt .= "I escaped my life of poverty by robbing an important person, and I'm wanted for it.\n";
                    break;
                case "b6":
                    $txt .= "No one else should have to endure the hardships I've been through.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "If I'm outnumbered, I will run away from a fight.\n";
                    break;
                case "f2":
                    $txt .= "Gold seems like a lot of money to me, and I'll do just about anything for more of it.\n";
                    break;
                case "f3":
                    $txt .= "I will never fully trust anyone other than myself.\n";
                    break;
                case "f4":
                    $txt .= "I'd rather kill someone in their sleep then fight fair.\n";
                    break;
                case "f5":
                    $txt .= "It's not stealing if I need it more than someone else.\n";
                    break;
                case "f6":
                    $txt .= "People who can't take care of themselves get what they deserve.\n";
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