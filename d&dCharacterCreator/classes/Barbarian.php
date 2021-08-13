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
    
    <h2>Barbarian</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Animal Handling">Animal Handling</option>
        <option value="Athletics">Athletics</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Survival">Survival</option>
    </select>

    <label for="skillc2">Choose a different proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Animal Handling">Animal Handling</option>
        <option value="Athletics">Athletics</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Survival">Survival</option>
    </select>
        
<!--The buttons to pick your gear -->
        <br>
        <p>Select your main weapon</p>
        <input type="radio" id="Greataxe" name="mainWeapon" value="Greataxe" checked><label>Greataxe</label><br>
        <input type="radio" id="OtherMartial" name="mainWeapon" value="Any Martial Melee Weapon"><label>Any Martial Melee Weapon</label><br>
        
        <p>Select your side weapon</p>
        <input type="radio" id="Handaxex2" name="sideWeapon" value="Handaxe x2" checked><label>Handaxe x2</label><br>
        <input type="radio" id="OtherSimple" name="sideWeapon" value="Any Simple Weapon"><label>Any Simple Weapon</label><br>
        
    <input type="submit" value="Submit">
    </form>
    <?php
    // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // diaplay the selected skills and gear
        $skillc1 = $_POST['skillc1'];
        $skillc2 = $_POST['skillc2'];
        $mainW = $_POST['mainWeapon'];
        $sideW = $_POST['sideWeapon'];
        
        if ($skillc1 == $skillc2){
            echo "Please select different skills";
        }
        else{
            if($_SESSION['skillb1'] == $skillc1 || $_SESSION['skillb1'] == $skillc2 || $_SESSION['skillb2'] == $skillc1 || $_SESSION['skillb2'] == $skillc2){
                echo "You already have some of these skills from your bakcground";
            }else{
            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");
            // store class abilities in string and output to screen and file.
            $txt = "<h2>Barbarian Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d12 per barbarian levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 12 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d12(or 7) + your Constitution modifier per barbarian level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> Light armor, medium armor, shields<br>\n
                    <b>Weapons:</b> Simple weapons, martial weapons<br>\n
                    <b>Tools:</b> None<br>\n
                    <b>Saving Throws:</b> Strength, Constitution<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $sideW, an explorer's pack, and four javelins\n";
            $txt .= "<h3>Rage:</h3>\n
                    On your turn, you can enter a rage as a bonus action.\n
                    while raging you gain the following benefits if ou aren't wearing heavy armor:<br>\n
                    <ul>\n
                    <li>1. You have advantage on Strength checks and Strength saving throws.</li>\n
                    <li>2. When you make a melee weapon attack using Strength, you gain a bonus to the damage roll that increases as you gain levels as a barbarian, as shown in the Rage Damage column of the Barbarian table. (+2 at 1st level)</li>\n
                    <li>3. You have resistance to bludgeoning, piercing, and slashing damage.</li>\n
                    </ul>
                    If you are able able to cast spells, you can't cast them or concentrate on them while raging.<br>\n
                    Your rage lasts for 1 minute. It ends early if you are knocked unconscious or if your turn ends and you haven't attacked a hostile creature since your last turn or taken turn as a bonus action<br>\n
                    Once you have raged the number of times shown for your barbarian level in the Rages column of the Barbarian table (2 at 1st level), you must finish a long rest before you can rage again.\n";
            $txt .= "<h3>Unarmored Defense:</h3>\n
                    While you are not wearing any armor, your Armor Class equals 10 + your Dexerity modifier + your Constitution modifier. You can use a shield and still gain this benefit.\n";
            echo "<h3>Your character is done.</h3>";
            echo "<h3>If you wish to save your character, please rename the file or move file to another location.</h3>";
            echo $txt;
            $txt = strip_tags($txt);
            fwrite($characterFile, $txt);

            fclose($characterFile);
            ?> <p><a href="../d_&_d_character_creator_v2.php">Back to start.</a></p>
<?php
        }
        }
    }
    
?> 
</body>
</html>