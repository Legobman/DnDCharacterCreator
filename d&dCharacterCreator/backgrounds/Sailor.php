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
    <h2>Sailor</h2>
    <p>Please select your starting background traits.</p>
    <p><b>Skill Proficiencies:</b> Athletics, Perception</p>
    <p><b>Tool Proficiencies:</b> Navigator's tools, vehicles (water)</p>
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
        
    <p><b>Eqiupment:</b> A belaying pin (club), 50 feet of silk rope, a lucky charm such as a rabbit foot or a small stone with a hole in the center, a set of common clothes, and a belt pouch containing 10 gp.</p>
        
        <p><b>Feature: Ship's Passage</b> When you need to, you can secure free passage on a sailing ship for yourself and your adventuring companions. You might sail on the ship you served on, or another ship you have good relations with (perhaps one captained by a former crewmate). Because you're calling in a favor, you can't be certain of a schedule or route that will meet your every need. Your DM will determine how long it takes to get where you need to go. In return for your free passage, you and your companions are expected to assist the crew during the voyage.</p>
        
        <label for="Personality">Choose your personality:</label>
    <select name="Personality" id="Personality">
        <option value="p1">My friends know they can rely on me, no matter what.</option>
        <option value="p2">I work hard so that I can play hard when the work is done.</option>
        <option value="p3">I enjoy sailing into new ports and making new friends over a flagon of ale.</option>
        <option value="p4">I stretch the truth for the sake of a good story.</option>
        <option value="p5">To me, a tavern brawl is a nice way to get to know a new city.</option>
        <option value="p6">I never pass up a friendly wager.</option>
        <option value="p7">My language is as foul as an otyugh nest.</option>
        <option value="p8">I like a job well done, especially if I can convince someone else to do it.</option>
    </select>
        <br>
        <label for="Ideal">Choose your ideal:</label>
    <select name="Ideal" id="Ideal">
        <option value="i1">Respect. The thing that keeps a ship together is mutual respect between captain and crew. (Good)</option>
        <option value="i2">Fairness. We all do the work, so we all share in the rewards. (Lawful)</option>
        <option value="i3">Freedom. The sea is freedom-the freedom to go anywhere and do anything. (Chaotic)</option>
        <option value="i4">Mastery. I'm a predator, and the other ships on the sea are my prey. (Evil)</option>
        <option value="i5">People. I'm committed to my crewmates, not to ideals. (Neutral)</option>
        <option value="i6">Aspiration. Someday I'll own my own ship and chart my own destiny. (Any)</option>
    </select>
        <br>
        <label for="Bond">Choose your bond:</label>
    <select name="Bond" id="Bond">
        <option value="b1">I'm loyal to my captain first, everything else second.</option>
        <option value="b2">The ship is most important – crewmates and captains come and go.</option>
        <option value="b3">I'll always remember my first ship.</option>
        <option value="b4">In a harbor town, I have a paramour whose eyes nearly stole me from the sea.</option>
        <option value="b5">I was cheated out of my fair share of the profits, and I want to get my due.</option>
        <option value="b6">Ruthless pirates murdered my captain and crewmates, plundered our ship, and left me to die. Vengeance will be mine.</option>
    </select>
        <br>
        <label for="Flaw">Choose your flaw:</label>
    <select name="Flaw" id="Flaw">
        <option value="f1">I follow orders, even if I think they're wrong.</option>
        <option value="f2">I'll say anything to avoid having to do extra work.</option>
        <option value="f3">Once someone questions my courage, I never back down no matter how dangerous the situation.</option>
        <option value="f4">Once I start drinking, it's hard for me to stop.</option>
        <option value="f5">I can't help but pocket loose coins and other trinkets I come across.</option>
        <option value="f6">My pride will probably lead to my destruction.</option>
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
            $_SESSION['skillb1'] = "Athletics";
            $_SESSION['skillb2'] = "Perception";
            $_SESSION['instrumentb'] = "";
            $_SESSION['artTools'] = "";
            $_SESSION['language1'] = "";
            $_SESSION['language2'] = "";
            if($_POST['languageR'] != ""){
                $_SESSION['languageR'] = $languageR;

            }
            $txt = "\nBackground bonuses - Sailor\n
                    Skill Proficiencies: Athletics, Perception\n
                    Tool Proficiencies: Navigator's tools, vehicles (water)\n";
            if ($_SESSION['race'] == "Human" or $_SESSION['race'] == "Human Variant" or $_SESSION['race'] == "Half-Elf"){
                $txt .= "
                     Racial bonus language: $languageR\n";
            } 
            $txt .= "
                     Equipment: A belaying pin (club), 50 feet of silk rope, a lucky charm such as a rabbit foot or a small stone with a hole in the center, a set of common clothes, and a belt pouch containing 10 gp.\n";
            $txt .= "Feature: Ship's Passage\n
                     When you need to, you can secure free passage on a sailing ship for yourself and your adventuring companions. You might sail on the ship you served on, or another ship you have good relations with (perhaps one captained by a former crewmate). Because you're calling in a favor, you can't be certain of a schedule or route that will meet your every need. Your DM will determine how long it takes to get where you need to go. In return for your free passage, you and your companions are expected to assist the crew during the voyage.\n";


            // switch statements to output character personality traits
            $txt .= "
                     Personality: ";
            switch ($personality) {
                case "p1":
                    $txt .= "My friends know they can rely on me, no matter what.\n";
                    break;
                case "p2":
                    $txt .= "I work hard so that I can play hard when the work is done.\n";
                    break;
                case "p3":
                    $txt .= "I enjoy sailing into new ports and making new friends over a flagon of ale.\n";
                    break;
                case "p4":
                    $txt .= "I stretch the truth for the sake of a good story.\n";
                    break;
                case "p5":
                    $txt .= "To me, a tavern brawl is a nice way to get to know a new city.\n";
                    break;
                case "p6":
                    $txt .= "I never pass up a friendly wager.\n";
                    break;
                case "p7":
                    $txt .= "My language is as foul as an otyugh nest.\n";
                    break;
                case "p8":
                    $txt .= "I like a job well done, especially if I can convince someone else to do it.\n";
                    break;
            }

            $txt .= "
                     ideal: ";
            switch ($ideal) {
                case "i1":
                    $txt .= "Respect. The thing that keeps a ship together is mutual respect between captain and crew. (Good)\n";
                    break;
                case "i2":
                    $txt .= "Fairness. We all do the work, so we all share in the rewards. (Lawful)\n";
                    break;
                case "i3":
                    $txt .= "Freedom. The sea is freedom-the freedom to go anywhere and do anything. (Chaotic)\n";
                    break;
                case "i4":
                    $txt .= "Mastery. I'm a predator, and the other ships on the sea are my prey. (Evil)\n";
                    break;
                case "i5":
                    $txt .= "People. I'm committed to my crewmates, not to ideals. (Neutral)\n";
                    break;
                case "i6":
                    $txt .= "Aspiration. Someday I'll own my own ship and chart my own destiny. (Any)\n";
                    break;
            }

            $txt .= "
                     Bond: ";
            switch ($bond) {
                case "b1":
                    $txt .= "I'm loyal to my captain first, everything else second.\n";
                    break;
                case "b2":
                    $txt .= "The ship is most important – crewmates and captains come and go.\n";
                    break;
                case "b3":
                    $txt .= "I'll always remember my first ship.\n";
                    break;
                case "b4":
                    $txt .= "In a harbor town, I have a paramour whose eyes nearly stole me from the sea.\n";
                    break;
                case "b5":
                    $txt .= "I was cheated out of my fair share of the profits, and I want to get my due.\n";
                    break;
                case "b6":
                    $txt .= "Ruthless pirates murdered my captain and crewmates, plundered our ship, and left me to die. Vengeance will be mine.\n";
                    break;
            }

            $txt .= "
                     Flaw: ";
            switch ($flaw) {
                case "f1":
                    $txt .= "I follow orders, even if I think they're wrong.\n";
                    break;
                case "f2":
                    $txt .= "I'll say anything to avoid having to do extra work.\n";
                    break;
                case "f3":
                    $txt .= "Once someone questions my courage, I never back down no matter how dangerous the situation.\n";
                    break;
                case "f4":
                    $txt .= "Once I start drinking, it's hard for me to stop.\n";
                    break;
                case "f5":
                    $txt .= "I can't help but pocket loose coins and other trinkets I come across.\n";
                    break;
                case "f6":
                    $txt .= "My pride will probably lead to my destruction.\n";
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