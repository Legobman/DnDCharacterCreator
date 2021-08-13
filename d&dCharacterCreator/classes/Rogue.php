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
    
    <h2>Rogue</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
    </select>

    <label for="skillc2">Choose a different proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
    </select>
    
    <label for="skillc3">Choose your third proficiency:</label>
    <select name="skillc3" id="skillc3">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
    </select>
        
    <label for="skillc4">Choose your third proficiency:</label>
    <select name="skillc4" id="skillc4">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
    </select>
<!--The buttons to pick your gear -->
        <br>
        <p>Select your melee weapon</p>
        <input type="radio" id="Rapier" name="meleeWeapon" value="Rapier" checked><label>Rapier</label><br>
        <input type="radio" id="Shortsword" name="meleeWeapon" value="Shortsword"><label>Shortsword</label><br>
        
        <p>Select your range weapon</p>
        <input type="radio" id="Shortbow" name="sideWeapon" value="a Shortbow(20 arrows)" checked><label>a Shortbow(20 Bolts)</label><br>
        <input type="radio" id="handaxex2" name="sideWeapon" value="handaxe x2"><label>handaxex2</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Burglar's Pack" name="pack" value="Burglar's Pack" checked><label>Burglar's Pack</label><br>
        <input type="radio" id="Dungeoneer's Pack" name="pack" value="Dungeoneer's Pack" checked><label>Dungeoneer's Pack</label><br>
        <input type="radio" id="Explorer's Pack" name="pack" value="Explorer's Pack"><label>Explorer's Pack</label><br>
        
        <p>You also get leather armor(AC 11 + Dex mod), two daggers, and thieves’ tools</p>
        
        <p>Choose your expertise (These need to be the same skills you have proficiencies)</p>
        
        <label for="skille1">Choose your first Expertise:</label>
    <select name="skille1" id="skille1">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
        <option value="Thieves’ tools">Thieves’ tools</option>
    </select>
        
        <label for="skille2">Choose your second Expertise:</label>
    <select name="skille2" id="skille2">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Arcana">Arcana</option>
        <option value="Athletics">Athletics</option>
        <option value="Deception">Deception</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Investigation">Investigation</option>
        <option value="Medicine">Medicine</option>
        <option value="Nature">Nature</option>
        <option value="Perception">Perception</option>
        <option value="Performance">Performance</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
        <option value="Sleight of Hand">Sleight of Hand</option>
        <option value="Stealth">Stealth</option>
        <option value="Survival">Survival</option>
        <option value="Thieves’ tools">Thieves’ tools</option>
    </select>
        
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
        $skillc4 = $_POST['skillc4'];
        $skille1 = $_POST['skille1'];
        $skille2 = $_POST['skille2'];
        $meleeW = $_POST['meleeWeapon'];
        $sideW = $_POST['sideWeapon'];
        $pack = $_POST['pack'];
        
        if ($skillc1 == $skillc2 || $skillc1 == $skillc3 || $skillc1 == $skillc4 || $skillc2 == $skillc3 || $skillc2 == $skillc4 || $skillc3 == $skillc4){
            echo "Please select different skills";
        } elseif($skille1 == $skille2){
            echo "Please select different Expertises";
        } elseif(!($skille1 == $skillc1 || $skille1 == $skillc2 || $skille1 == $skillc3 || $skille1 == $skillc4 || $skille1 == $_SESSION['skillb1'] || $skille1 == $_SESSION['skillb2'] || $skille1 == "Thieves’ tools") || !($skille2 == $skillc1 || $skille2 == $skillc2 || $skille2 == $skillc3 || $skille2 == $skillc4 || $skille2 == $_SESSION['skillb1'] || $skille2 == $_SESSION['skillb2'] || $skille2 == "Thieves’ tools")){
            echo "You need to pick skills you have proficiency in.";
        }
        else{
            if($_SESSION['skillb1'] == $skillc1 || $_SESSION['skillb1'] == $skillc2 || $_SESSION['skillb1'] == $skillc3 || $_SESSION['skillb1'] == $skillc4 || $_SESSION['skillb2'] == $skillc1 || $_SESSION['skillb2'] == $skillc2 || $_SESSION['skillb2'] == $skillc3 || $_SESSION['skillb2'] == $skillc4){
                echo "You already have some of these skills from your bakcground";
            }else{
            // open a file for the character 
            $characterFile = fopen("../character.txt", "a") or die("Unable to open file!");
            // store class abilities in string and output to screen and file.
            $txt = "<h2>Rogue Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d8 per rogue levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 8 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d8(or 5) + your Constitution modifier per rogue level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> Light armor<br>\n
                    <b>Weapons:</b> Simple weapons, hand crossbows, longswords, rapiers, shortswords<br>\n
                    <b>Tools:</b> Thieves’ tools<br>\n
                    <b>Saving Throws:</b> Dexterity, Intelligence<br>\n
                    <b>Skills:</b> $skillc1, $skillc2, $skillc3, and $skillc4";
            $txt .= "<h3>Equipment:</h3>\n
                    $meleeW, $sideW, $pack, and leather armor, two daggers, and thieves’ tools\n";
            $txt .= "<h3>Expertise:</h3>\n
                    At 1st level, choose two of your skill proficiencies, or one of your skill proficiencies and your proficiency with thieves’ tools. Your proficiency bonus is doubled for any ability check you make that uses either of the chosen proficiencies.\n
                    At 6th level, you can choose two more of your proficiencies (in skills or with thieves’ tools) to gain this benefit.\n";
            $txt .= "<h3>Sneak Attack:</h3>\n
                    Beginning at 1st level, you know how to strike subtly and exploit a foe’s distraction. Once per turn, you can deal an extra 1d6 damage to one creature you hit with an attack if you have advantage on the attack roll. The attack must use a finesse or a ranged weapon.\n
                    You don’t need advantage on the attack roll if another enemy of the target is within 5 feet of it, that enemy isn’t incapacitated, and you don’t have disadvantage on the attack roll.\n
                    <The amount of the extra damage increases as you gain levels in this class, as shown in the Sneak Attack column of the Rogue table. (1d6 at 1st level)\n";
            $txt .= "<h3>Thieves’ Cant:</h3>\n
                    During your rogue training you learned thieves’ cant, a secret mix of dialect, jargon, and code that allows you to hide messages in seemingly normal conversation. Only another creature that knows thieves’ cant understands such messages. It takes four times longer to convey such a message than it does to speak the same idea plainly.<br>\n
                    In addition, you understand a set of secret signs and symbols used to convey short, simple messages, such as whether an area is dangerous or the territory of a thieves’ guild, whether loot is nearby, or whether the people in an area are easy marks or will provide a safe house for thieves on the run.\n";
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