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
    <h2>Criminal</h2>
    <p>Please select your starting background traits.</p>
    <p><b>Skill Proficiencies:</b> Deception, Stealth</p>
    <p><b>Tool Proficiencies:</b> One type of gaming set, thieves' tools</p>
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
        
    <p><b>Eqiupment:</b> A crowbar, a set of dark common clothes including a hood, and a belt pouch containing 15 gp.</p>
        
        <label for="Gaming">Choose your criminal specialty:</label>
    <select name="Gaming" id="Gaming">
        <option value="Dice set">Dice set.</option>
        <option value="Dragonchess set">Dragonchess set.</option>
        <option value="Playing card set">Playing card set.</option>
        <option value="Three-Dragon Ante set">Three-Dragon Ante set.</option>
    </select>
        
        <br>
        
        <label for="Specialty">Choose your criminal specialty:</label>
    <select name="Specialty" id="Specialty">
        <option value="s1">Blackmailer.</option>
        <option value="s2">Burglar.</option>
        <option value="s3">Enforcer.</option>
        <option value="s4">Fence.</option>
        <option value="s5">Highway Robber.</option>
        <option value="s6">Hired Killer.</option>
        <option value="s7">Pickpocket.</option>
        <option value="s8">Smuggler.</option>
    </select>
        
        <p><b>Feature: Criminal Contact</b> You have a reliable and trustworthy contact who acts like liaison of you to any network of criminals, you have trustworthy and reliable contact from them. How to get the messages from your contact and also to your contact is well known to you. Even over great distances too you can get the messages; specially you know the corrupt caravan masters and also the local messengers even the seedy sailors who can able to deliver messages for you.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">I always have a plan for what to do when things go wrong.</option>
        <option value="p2">I am always calm, no matter what the situation. I never raise my voice or let my emotions control me.</option>
        <option value="p3">The first thing I do in a new place is note the locations of everything valuable-or where such things could be hidden.</option>
        <option value="p4">I would rather make a new friend than a new enemy.</option>
        <option value="p5">I am incredibly slow to trust. Those who seem the fairest often have the most to hide.</option>
        <option value="p6">I don't pay attention to the risks in a situation. Never tell me the odds.</option>
        <option value="p7">The best way to get me to do something is to tell me I can't do it.</option>
        <option value="p8">I blow up at the slightest insult.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Honor: I don’t steal from others in the trade. (Lawful)</option>
        <option value="i2">Freedom: Chains are meant to be broken, as are those who would forge them. (Chaotic)</option>
        <option value="i3">Charity: I steal from the wealthy so that I can help people in need. (Good)</option>
        <option value="i4">Greed: I will do whatever it takes to become wealthy. (Evil)</option>
        <option value="i5">People: I’m loyal to my friends, not to any ideals, and everyone else can take a trip down the Styx for all I care. (Neutral)</option>
        <option value="i6">Redemption: There’s a spark of good in everyone. (Good)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">I’m trying to pay off an old debt I owe to a generous benefactor.</option>
        <option value="b2">My ill-gotten gains go to support my family.</option>
        <option value="b3">Something important was taken from me, and I aim to steal it back.</option>
        <option value="b4">I will become the greatest thief that ever lived.</option>
        <option value="b5">I’m guilty of a terrible crime. I hope I can redeem myself for it.</option>
        <option value="b6">Someone I loved died because of a mistake I made. That will never happen again.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">When I see something valuable, I can’t think about anything but how to steal it.</option>
        <option value="f2">When faced with a choice between money and my friends, I usually choose the money.</option>
        <option value="f3">If there’s a plan, I’ll forget it. If I don’t forget it, I’ll ignore it.</option>
        <option value="f4">I have a “tell” that reveals when I'm lying.</option>
        <option value="f5">I turn tail and run when things look bad.</option>
        <option value="f6">An innocent person is in prison for a crime that I committed. I’m okay with that.</option>
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
        $gaming = $_POST['Gaming'];
        $scheme = $_POST['Schemes'];
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
            $_SESSION['skillb2'] = "Stealth";
            $_SESSION['instrumentb'] = "";
            $_SESSION['artTools'] = "";
            $_SESSION['language1'] = "";
            $_SESSION['language2'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Criminal\n
                    Skill Proficiencies: Deception, Stealth\n
                    Tool Proficiencies: $gaming, thieves' tools\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "
                     Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: A crowbar, a set of dark common clothes including a hood, and a belt pouch containing 15 gp.\n";
            $txt .= "Feature: Criminal Contact\n
                     You have a reliable and trustworthy contact who acts like liaison of you to any network of criminals, you have trustworthy and reliable contact from them. How to get the messages from your contact and also to your contact is well known to you. Even over great distances too you can get the messages; specially you know the corrupt caravan masters and also the local messengers even the seedy sailors who can able to deliver messages for you.\n";

            $txt .= "
                     Criminal Specialty: ";
            switch ($scheme) {
                case "s1":
                    $txt .= "Blackmailer.\n";
                    break;
                case "s2":
                    $txt .= "Burglar.\n";
                    break;
                case "s3":
                    $txt .= "Enforcer.\n";
                    break;
                case "s4":
                    $txt .= "Fence.\n";
                    break;
                case "s5":
                    $txt .= "Highway Robber.\n";
                    break;
                case "s6":
                    $txt .= "Hired Killer.\n";
                    break;
                case "s7":
                    $txt .= "Pickpocket.\n";
                    break;
                case "s8":
                    $txt .= "Smuggler.\n";
                    break;
            }

            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "I always have a plan for what to do when things go wrong.\n";
                    break;
                case "p2":
                    $txt .= "I am always calm, no matter what the situation. I never raise my voice or let my emotions control me.\n";
                    break;
                case "p3":
                    $txt .= "The first thing I do in a new place is note the locations of everything valuable-or where such things could be hidden.\n";
                    break;
                case "p4":
                    $txt .= "I would rather make a new friend than a new enemy.\n";
                    break;
                case "p5":
                    $txt .= "I am incredibly slow to trust. Those who seem the fairest often have the most to hide.\n";
                    break;
                case "p6":
                    $txt .= "I don't pay attention to the risks in a situation. Never tell me the odds.\n";
                    break;
                case "p7":
                    $txt .= "The best way to get me to do something is to tell me I can't do it.\n";
                    break;
                case "p8":
                    $txt .= "I blow up at the slightest insult.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Honor: I don’t steal from others in the trade. (Lawful)\n";
                    break;
                case "i2":
                    $txt .= "Fairness. I never target people who can't afford to lose a few coins. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Charity: I steal from the wealthy so that I can help people in need. (Good)\n";
                    break;
                case "i4":
                    $txt .= "Greed: I will do whatever it takes to become wealthy. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "People: I’m loyal to my friends, not to any ideals, and everyone else can take a trip down the Styx for all I care. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Redemption: There’s a spark of good in everyone. (Good)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "I’m trying to pay off an old debt I owe to a generous benefactor.\n";
                    break;
                case "b2":
                    $txt .= "My ill-gotten gains go to support my family.\n";
                    break;
                case "b3":
                    $txt .= "Something important was taken from me, and I aim to steal it back.\n";
                    break;
                case "b4":
                    $txt .= "I will become the greatest thief that ever lived.\n";
                    break;
                case "b5":
                    $txt .= "I’m guilty of a terrible crime. I hope I can redeem myself for it.\n";
                    break;
                case "b6":
                    $txt .= "Someone I loved died because of a mistake I made. That will never happen again.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "When I see something valuable, I can’t think about anything but how to steal it.\n";
                    break;
                case "f2":
                    $txt .= "When faced with a choice between money and my friends, I usually choose the money.\n";
                    break;
                case "f3":
                    $txt .= "If there’s a plan, I’ll forget it. If I don’t forget it, I’ll ignore it.\n";
                    break;
                case "f4":
                    $txt .= "I have a “tell” that reveals when I'm lying.\n";
                    break;
                case "f5":
                    $txt .= "I turn tail and run when things look bad.\n";
                    break;
                case "f6":
                    $txt .= "An innocent person is in prison for a crime that I committed. I’m okay with that.\n";
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