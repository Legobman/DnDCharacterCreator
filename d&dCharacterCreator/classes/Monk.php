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
    
    <h2>Monk</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Athletics">Athletics</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Religion">Religion</option>
        <option value="Stealth">Stealth</option>
    </select>

    <label for="skillc2">Choose a different proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Athletics">Athletics</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Religion">Religion</option>
        <option value="Stealth">Stealth</option>
    </select>
        
    <label for="cTool">Choose your Artisan's tools:</label>
    <select name="cTool" id="cTool">
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
        
<!--The buttons to pick your gear -->
        <br>
        <p>Select your main weapon</p>
        <input type="radio" id="Shortsword" name="mainWeapon" value="Shortsword" checked><label>Shortsword</label><br>
        <input type="radio" id="OtherSimple" name="mainWeapon" value="Any Simple Weapon"><label>Any Simple Weapon</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Dungeoneer's Pack" name="pack" value="Dungeoneer's Pack" checked><label>Dungeoneer's Pack</label><br>
        <input type="radio" id="Explorer's Pack" name="pack" value="Explorer's Pack"><label>Explorer's Pack</label><br>
        
    <input type="submit" value="Submit">
    </form>
    <?php
    // when the user pushes the submit button
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // collect value of input field and
        // diaplay the selected skills and gear
        $skillc1 = $_POST['skillc1'];
        $skillc2 = $_POST['skillc2'];
        $cTool = $_POST['cTool'];
        $mainW = $_POST['mainWeapon'];
        $pack = $_POST['pack'];
        
        if ($skillc1 == $skillc2){
            echo "Please select different skills";
        } elseif ($_SESSION['artTools'] == $cTool){
            echo "You know that to you that artisan's Tools from your background.";
        }
        else{
            if($_SESSION['skillb1'] == $skillc1 || $_SESSION['skillb1'] == $skillc2 || $_SESSION['skillb2'] == $skillc1 || $_SESSION['skillb2'] == $skillc2){
                echo "You already have some of these skills from your bakcground";
            }else{
            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");
            // store class abilities in string and output to screen and file.
            $txt = "<h2>Monk Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d8 per monk levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 8 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d8(or 5) + your Constitution modifier per monk level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> None<br>\n
                    <b>Weapons:</b> Simple weapons, shortswords<br>\n
                    <b>Tools:</b> $cTool<br>\n
                    <b>Saving Throws:</b> Strength, Dexterity<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $pack, and 10 darts\n";
            $txt .= "<h3>Unarmored Defense:</h3>\n
                    Beginning at 1st level, while you are wearing no armor and not wielding a shield, your AC equals 10 + your Dexterity modifier + your Wisdom modifier.\n";
            $txt .= "<h3>Martial Arts:</h3>\n
                    At 1st level, your practice of martial arts gives you mastery of combat styles that use unarmed strikes and monk weapons, which are shortswords and any simple melee weapons that don’t have the two-handed or heavy property.<br>\n
                    You gain the following benefits while you are unarmed or wielding only monk weapons and you aren’t wearing armor or wielding a shield:<br>\n
                    <ul>\n
                    <li>1. You can use Dexterity instead of Strength for the attack and damage rolls of your unarmed strikes and monk weapons.</li>\n
                    <li>2. You can roll a d4 in place of the normal damage of your unarmed strike or monk weapon. This die changes as you gain monk levels, as shown in the Martial Arts column of the Monk table.</li>\n
                    <li>3. When you use the Attack action with an unarmed strike or a monk weapon on your turn, you can make one unarmed strike as a bonus action. For example, if you take the Attack action and attack with a quarterstaff, you can also make an unarmed strike as a bonus action, assuming you haven’t already taken a bonus action this turn.</li>\n
                    </ul>
                    Certain monasteries use specialized forms of the monk weapons. For example, you might use a club that is two lengths of wood connected by a short chain (called a nunchaku) or a sickle with a shorter, straighter blade (called a kama). Whatever name you use for a monk weapon, you can use the game statistics provided for the weapon in the Weapons section.\n";
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