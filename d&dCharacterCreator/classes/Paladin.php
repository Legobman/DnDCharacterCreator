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
    
    <h2>Paladin</h2>
    <p>Please select your starting proficiencies and gear.</p>
    <form method="post">
    
<!--The form to pick your proficiencies -->
    <label for="skillc1">Choose your first proficiency:</label>
    <select name="skillc1" id="skillc1">
        <option value="Athletics">Athletics</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Medicine">Medicine</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
    </select>

    <label for="skillc2">Choose a different proficiency:</label>
    <select name="skillc2" id="skillc2">
        <option value="Athletics">Athletics</option>
        <option value="Insight">Insight</option>
        <option value="Intimidation">Intimidation</option>
        <option value="Medicine">Medicine</option>
        <option value="Persuasion">Persuasion</option>
        <option value="Religion">Religion</option>
    </select>
        
<!--The buttons to pick your gear -->
        <br>
        
        <p>Select your melee weapon</p>
        <input type="radio" id="WeaponAndShield" name="meleeWeapon" value="A martial weapon and a Shield" checked><label>A martial weapon and a Shield</label><br>
        <input type="radio" id="TwoMartialWeapons" name="meleeWeapon" value="Two Martial Weapons"><label>Two Martial Weapons</label><br>
        
        <p>Select your side weapon</p>
        <input type="radio" id="Javelinsx5" name="sideWeapon" value="Javelins x5" checked><label>Javelins x5</label><br>
        <input type="radio" id="OtherSimple" name="sideWeapon" value="Any Simple Melee Weapon"><label>Any Simple Melee Weapon</label><br>
        
        <p>Select your pack</p>
        <input type="radio" id="Priest's Pack" name="pack" value="Priest's Pack" checked><label>Priest's Pack</label><br>
        <input type="radio" id="Explorer's Pack" name="pack" value="Explorer's Pack"><label>Explorer's Pack</label><br>
        
        <p>Chain mail(AC 16) and a holy symbol</p>
        
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
        $pack = $_POST['pack'];
        
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
            $txt = "<h2>Paladin Class Features:</h2>\n
                    <h3>Hit Points:</h3>\n
                    <b>Hit Dice:</b> 1d10 per paladin levevl<br>\n
                    <b>Hit Points at 1st Level:</b> 10 + your Constitution modifier<br>\n
                    <b>Hit Points ar Higher Levels:</b> 1d10(or 6) + your Constitution modifier per paladin level after 1st\n";
            $txt .= "<h3>Proficiencies:</h3>\n
                    <b>Armor:</b> All armor, shields<br>\n
                    <b>Weapons:</b> Simple weapons, martial weapons<br>\n
                    <b>Tools:</b> None<br>\n
                    <b>Saving Throws:</b> Wisdom, Charisma<br>\n
                    <b>Skills:</b> $skillc1 and $skillc2";
            $txt .= "<h3>Equipment:</h3>\n
                    $mainW, $sideW, $pack, Chain mail, and a holy symbol\n";
            $txt .= "<h3>Divine Sense:</h3>\n
                    The presence of strong evil registers on your senses like a noxious odor, and powerful good rings like heavenly music in your ears. As an action, you can open your awareness to detect such forces. Until the end of your next turn, you know the location of any celestial, fiend, or undead within 60 feet of you that is not behind total cover. You know the type (celestial, fiend, or undead) of any being whose presence you sense, but not its identity (the vampire Count Strahd von Zarovich, for instance). Within the same radius, you also detect the presence of any place or object that has been consecrated or desecrated, as with the Hallow spell.<br>\n
                    You can use this feature a number of times equal to 1 + your Charisma modifier. When you finish a long rest, you regain all expended uses.\n";
            $txt .= "<h3>Lay on Hands:</h3>\n
                    Your blessed touch can heal wounds. You have a pool of healing power that replenishes when you take a long rest. With that pool, you can restore a total number of hit points equal to your paladin level x 5.<br>\n
                    As an action, you can touch a creature and draw power from the pool to restore a number of hit points to that creature, up to the maximum amount remaining in your pool.<br>\n
                    Alternatively, you can expend 5 hit points from your pool of healing to cure the target of one disease or neutralize one poison affecting it. You can cure multiple diseases and neutralize multiple poisons with a single use of Lay on Hands, expending hit points separately for each one.<br>\n
                    This feature has no effect on undead and constructs.<br>\n";
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