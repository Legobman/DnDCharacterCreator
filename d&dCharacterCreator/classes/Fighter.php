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
    
    <h2>Fighter</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Athletics">Athletics</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Perception">Perception</option>
        <option value="Survival">Survival</option>
    </select>

    <label for="skillc2">Choose a different proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Acrobatics">Acrobatics</option>
        <option value="Animal Handling">Animal Handling</option>
        <option value="Athletics">Athletics</option>
        <option value="History">History</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Perception">Perception</option>
        <option value="Survival">Survival</option>
    </select>
        
<!--The buttons to pick your gear -->
        <p>Select your armor</p>
        <input type="radio" id="ChainMail" name="armor" value="chain mail(AC 16)"><label>chain mail(AC 16)</label><br>
        <input type="radio" id="Leather" name="armor" value="Leather Armor(AC 11 + Dex mod), Longbow(20 Arrows)" checked><label>Leather Armor(AC 11 + Dex mod), Longbow(20 Arrows)</label><br>
        
        <p>Select your melee weapon</p>
        <input type="radio" id="WeaponAndShield" name="meleeWeapon" value="A martial weapon and a Shield" checked><label>A martial weapon and a Shield</label><br>
        <input type="radio" id="TwoMartialWeapons" name="meleeWeapon" value="Two Martial Weapons"><label>Two Martial Weapons</label><br>
        
        <p>Select your range weapon</p>
        <input type="radio" id="Light Crossbow" name="rangeWeapon" value="a Light Crossbow(20 Bolts)" checked><label>a Light Crossbow(20 Bolts)</label><br>
        <input type="radio" id="Handaxex2" name="rangeWeapon" value="handaxe x2"><label>handaxex2</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Dungeoneer's Pack" name="pack" value="Dungeoneer's Pack" checked><label>Dungeoneer's Pack</label><br>
        <input type="radio" id="Explorer's Pack" name="pack" value="Explorer's Pack"><label>Explorer's Pack</label><br>
        
        <label for="style">Choose a Fighting Style:</label>
        <select name="style" id="style">
            <option value="Archery">Archery: You gain a +2 bonus to Attack rolls you make with ranged Weapons.</option>
            <option value="Defense">Defense: While you are wearing armor, you gain a +1 bonus to AC.</option>
            <option value="Dueling">Dueling: When you are wielding a melee weapon in one hand and no other Weapons, you gain a +2 bonus to Damage Rolls with that weapon.</option>
            <option value="Great Weapon Fighting">Great Weapon Fighting: When you roll a 1 or 2 on a damage die for an Attack you make with a melee weapon that you are wielding with two hands, you can reroll the die and must use the new roll, even if the new roll is a 1 or a 2. The weapon must have the Two-Handed or Versatile property for you to gain this benefit.</option>
            <option value="Protection">Protection: When a creature you can see attacks a target other than you that is within 5 feet of you, you can use your Reaction to impose disadvantage on the Attack roll. You must be wielding a Shield.</option>
            <option value="Two-Weapon Fighting">Two-Weapon Fighting: When you engage in two-weapon Fighting, you can add your ability modifier to the damage of the second Attack.</option>
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
        $armor = $_POST['armor'];
        $melee = $_POST['meleeWeapon'];
        $range = $_POST['rangeWeapon'];
        $pack = $_POST['pack'];
        $style = $_POST['style'];
        
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
            $txt = "<h2>Fighter Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d10 per fighter levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 10 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d10(or 6) + your Constitution modifier per fighter level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> All armor, shields<br>\n
                    <b>Weapons:</b> Simple weapons, martial weapons<br>\n
                    <b>Tools:</b> None<br>\n
                    <b>Saving Throws:</b> Strength, Constitution<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2";
            $txt .= "<h3>Equipment:</h3>\n
                    $armor, $melee, $range, and $pack\n";
            $txt .= "<h3>Fighting Style:</h3>\n
                    You adopt a particular style of Fighting as your specialty. Choose a Fighting style from the list of optional features. You can't take the same Fighting Style option more than once, even if you get to choose again.\n";
            switch ($domain){
                case "Archery":
                    $txt .= "<h3>Archery:</h3>\n
                    WYou gain a +2 bonus to Attack rolls you make with ranged Weapons.\n";
                    break;
                case "Defense":
                    $txt .= "<h3>Defense:</h3>\n
                    While you are wearing armor, you gain a +1 bonus to AC.\n";
                    break;
                case "Dueling":
                    $txt .= "<h3>Dueling:</h3>\n
                    When you are wielding a melee weapon in one hand and no other Weapons, you gain a +2 bonus to Damage Rolls with that weapon\n";
                    break;
                case "Great Weapon Fighting":
                    $txt .= "<h3>Great Weapon Fighting:</h3>\n
                    When you roll a 1 or 2 on a damage die for an Attack you make with a melee weapon that you are wielding with two hands, you can reroll the die and must use the new roll, even if the new roll is a 1 or a 2. The weapon must have the Two-Handed or Versatile property for you to gain this benefit.\n";
                    break;
                case "Protection":
                    $txt .= "<h3>Protection:</h3>\n
                    When a creature you can see attacks a target other than you that is within 5 feet of you, you can use your Reaction to impose disadvantage on the Attack roll. You must be wielding a Shield.\n";
                    break;
                case "Two-Weapon Fighting":
                    $txt .= "<h3>Two-Weapon Fighting:</h3>\n
                    When you engage in two-weapon Fighting, you can add your ability modifier to the damage of the second Attack.\n";
                    break;
            }
            $txt .= "<h3>Second Wind:</h3>\n
                    You have a limited well of stamina that you can draw on to protect yourself from harm. On Your Turn, you can use a Bonus Action to regain Hit Points equal to 1d10 + your Fighter level.<br>\n
                    Once you use this feature, you must finish a short or Long Rest before you can use it again.\n";
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