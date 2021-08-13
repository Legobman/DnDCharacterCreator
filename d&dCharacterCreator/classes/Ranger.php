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
    
    <h2>Ranger</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Animal Handling">Animal Handling</option>
        <option value="Athletics">Athletics</option>
        <option value="Insight">Insight</option>
        <option value="Investigation">Investigation</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
    </select>

    <label for="skillc2">Choose a different proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Animal Handling">Animal Handling</option>
        <option value="Athletics">Athletics</option>
        <option value="Insight">Insight</option>
        <option value="Investigation">Investigation</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
    </select>
        
    <label for="skillc3">Choose your third proficiency:</label>
    <select name="skillc3" id="skillc3">
        <option value="Animal Handling">Animal Handling</option>
        <option value="Athletics">Athletics</option>
        <option value="Insight">Insight</option>
        <option value="Investigation">Investigation</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
    </select>
    
<!--The buttons to pick your gear -->
        <p>Select your armor</p>
        <input type="radio" id="ScaleMail" name="armor" value="scale mail(AC + Dex mod(max 2))"><label>scale mail(AC + Dex mod(max 2))</label><br>
        <input type="radio" id="Leather" name="armor" value="Leather Armor(AC 11 + Dex mod), Longbow(20 Arrows)" checked><label>Leather Armor(AC 11 + Dex mod), Longbow(20 Arrows)</label><br>
        
        <p>Select your melee weapon</p>
        <input type="radio" id="TwoShortswords" name="meleeWeapon" value="two shortswords" checked><label>Two Shortswords</label><br>
        <input type="radio" id="TwoSimpleWeapons" name="meleeWeapon" value="Two Simple Melee Weapons"><label>Two Simple Melee Weapons</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Dungeoneer's Pack" name="pack" value="Dungeoneer's Pack" checked><label>Dungeoneer's Pack</label><br>
        <input type="radio" id="Explorer's Pack" name="pack" value="Explorer's Pack"><label>Explorer's Pack</label><br>
        
        <p>You also get a longbow and a quiver of 20 arrows</p>
        
    <input type="submit" value="Submit">
    </form>
    <?php
    // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // diaplay the selected skills and gear
        $skillc1 = $_POST['skillc1'];
        $skillc2 = $_POST['skillc2'];
        $skillc3 = $_POST['skillc3'];
        $armor = $_POST['armor'];
        $melee = $_POST['meleeWeapon'];
        $pack = $_POST['pack'];
        $style = $_POST['style'];
        
        if ($skillc1 == $skillc2 || $skillc1 == $skillc3 || $skillc2 == $skillc3){
            echo "Please select different skills";
        }
        else{
            if($_SESSION['skillb1'] == $skillc1 || $_SESSION['skillb1'] == $skillc2 || $_SESSION['skillb1'] == $skillc3 || $_SESSION['skillb2'] == $skillc1 || $_SESSION['skillb2'] == $skillc2 || $_SESSION['skillb2'] == $skillc3){
                echo "You already have some of these skills from your bakcground";
            }else{
            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");
            // store class abilities in string and output to screen and file.
            $txt = "<h2>Ranger Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d10 per ranger levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 10 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d10(or 6) + your Constitution modifier per ranger level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> Light armor, medium armor, shields<br>\n
                    <b>Weapons:</b> Simple weapons, martial weapons<br>\n
                    <b>Tools:</b> None<br>\n
                    <b>Saving Throws:</b> Strength, Dexterity<br>\n
                    <b>Skills:</b> $skillc1, $skillc2, and $skillc3";
            $txt .= "<h3>Equipment:</h3>\n
                    $armor, $melee, $pack, and a longbow, and a quiver of 20 arrows\n";
            $txt .= "<h3>Favored Enemy:</h3>\n
                    Beginning at 1st level, you have significant experience studying, tracking, hunting, and even talking to a certain type of enemy.<br>\n
                    Choose a type of favored enemy: aberrations, beasts, celestials, constructs, dragons, elementals, fey, fiends, giants, monstrosities, oozes, plants, or undead. Alternatively, you can select two races of humanoid (such as gnolls and orcs) as favored enemies.<br>\n
                    You have advantage on Wisdom (Survival) checks to track your favored enemies, as well as on Intelligence checks to recall information about them.<br>\n
                    When you gain this feature, you also learn one language of your choice that is spoken by your favored enemies, if they speak one at all.<br>\n
                    You choose one additional favored enemy, as well as an associated language, at 6th and 14th level. As you gain levels, your choices should reflect the types of monsters you have encountered on your adventures.<br>\n";
            $txt .= "<h3>Natural Explorer:</h3>\n
                    Also at 1st level, you are particularly familiar with one type of natural environment and are adept at traveling and surviving in such regions. Choose one type of favored terrain: arctic, coast, desert, forest, grassland, mountain, swamp, or the Underdark. When you make an Intelligence or Wisdom check related to your favored terrain, your proficiency bonus is doubled if you are using a skill that you’re proficient in.<br>\n
                    While traveling for an hour or more in your favored terrain, you gain the following benefits:<br>\n
                    <ul>\n
                    <li>1. Difficult terrain doesn’t slow your group’s travel.</li>\n
                    <li>2. Your group can’t become lost except by magical means.</li>\n
                    <li>3. Even when you are engaged in another activity while traveling (such as foraging, navigating, or tracking), you remain alert to danger.</li>\n
                    <li>4. If you are traveling alone, you can move stealthily at a normal pace.</li>\n
                    <li>5. When you forage, you find twice as much food as you normally would.</li>\n
                    <li>6. While tracking other creatures, you also learn their exact number, their sizes, and how long ago they passed through the area.</li>\n
                    </ul>\n
                    You choose additional favored terrain types at 6th and 10th level.";
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