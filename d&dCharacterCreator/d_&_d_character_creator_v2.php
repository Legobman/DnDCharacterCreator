<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/berwickwebsitestyles.css">
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<h1>DnD Character Creator</h1>
<?php 
// define variables and define them
$race = "";
$class = "";
$str = 0;
$dex = 0;
$con = 0;
$int = 0;
$wis = 0;
$cha = 0;
$hp = 0;
?>
<form method="post">

<!--The form to pick your race -->
<label for="race">Choose your race:</label>
<select name="race" id="race">
    <option value="Hill Dwarf">Hill Dwarf</option>
    <option value="Mountain Dwarf">Mountain Dwarf</option>
    <option value="High Elf">High Elf</option>
    <option value="Wood Elf">Wood Elf</option>
    <option value="Dark Elf">Drow</option>
    <option value="Lightfoot">Lightfoot</option>
    <option value="Stout">Stout</option>
    <option value="Human">Human</option>
    <option value="Human Variant">Human Variant</option>
    <option value="Dragonborn">Dragonborn</option>
    <option value="Forest Gnome">Forest Gnome</option>
    <option value="Rock Gnome">Rock Gnome</option>
    <option value="Half-Elf">Half-Elf</option>
    <option value="Half-Orc">Half-Orc</option>
    <option value="Tiefling">Tiefling</option>
</select>

<!--The form to pick your class -->
<label for="class">Choose your class:</label>
<select name="class" id="class">
    <option value="Barbarian">Barbarian</option>
    <option value="Bard">Bard</option>
    <option value="Cleric">Cleric</option>
    <option value="Druid">Druid</option>
    <option value="Fighter">Fighter</option>
    <option value="Monk">Monk</option>
    <option value="Paladin">Paladin</option>
    <option value="Ranger">Ranger</option>
    <option value="Rogue">Rogue</option>
    <option value="Sorcerer">Sorcerer</option>
    <option value="Warlock">Warlock</option>
    <option value="Wizard">Wizard</option>
</select>
    
<!--The form to pick your background -->
<label for="background">Choose your background:</label>
<select name="background" id="background">
    <option value="Acolyte">Acolyte</option>
    <option value="Charlatan">Charlatan</option>
    <option value="Criminal">Criminal</option>
    <option value="Entertainer">Entertainer</option>
    <option value="Folk Hero">Folk Hero</option>
    <option value="Guild Artisan">Guild Artisan</option>
    <option value="Hermit">Hermit</option>
    <option value="Noble">Noble</option>
    <option value="Outlander">Outlander</option>
    <option value="Sage">Sage</option>
    <option value="Sailor">Sailor</option>
    <option value="Soldier">Soldier</option>
    <option value="Urchin">Urchin</option>
</select>
<input type="submit" value="Submit">
</form>
<?php

// when the user pushes the submit button
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field and
    // diaplay the selected race and class
    $race = $_POST['race'];
    $class = $_POST['class'];
    $background = $_POST['background'];
    $_SESSION['background'] = $background;
    $_SESSION['race'] = $race;
    $_SESSION['class'] = $class;
    $_SESSION['raceLanguage'] = "";
    echo "<br>";
    if (empty($race) or empty($race) or empty($background)) {
        echo "race, class, and/or background is empty";
    } else {
        echo "<h2>$race - $class - $background</h2>";
    }
    
    // function to simulate a 4 6-sided die, drop the lowest, roll
    function statroll() {
        $rawNum = rand(1, 1296);
        $realStat = 0;
        switch ($rawNum) {
            case $rawNum == 1:
                $realStat = 3;
                break;
            case $rawNum <= 5:
                $realStat = 4;        
                break;
            case $rawNum <= 15:
                $realStat = 5;
                break;
            case $rawNum <= 36;
                $realStat = 6;
                break;
            case $rawNum <= 74:
                $realStat = 7;
                break;
            case $rawNum <= 136:
                $realStat = 8;
                break;
            case $rawNum <= 227;
                $realStat = 9;
                break;
            case $rawNum <= 349:
                $realStat = 10;
                break;
            case $rawNum <= 497:
                $realStat = 11;
                break;
            case $rawNum <= 664;
                $realStat = 12;
                break;
            case $rawNum <= 836:
                $realStat = 13;
                break;
            case $rawNum <= 996:
                $realStat = 14;
                break;
            case $rawNum <= 1127;
                $realStat = 15;
                break;
            case $rawNum <= 1221:
                $realStat = 16;
                break;
            case $rawNum <= 1275:
                $realStat = 17;
                break;
            case $rawNum <= 1296;
                $realStat = 18;
                break;
      default:
        echo "Something Broke";
    }
        return $realStat;
    }
    
    
    
    // functions to increase stats based on race, normal == comparison does not work
    function strongthBonus($baseStat, $race) {
        if (strcmp($race,"Mountain Dwarf") == 0 || strcmp($race,"Dragonborn") == 0 || strcmp($race,"Half-Orc") == 0){
            $baseStat += 2;
        } elseif (strcmp($race,"Human") == 0){
            $baseStat += 1;
        } 
        return $baseStat;
    }
    
    function dexterityBonus($baseStat, $race) {
        if (strcmp($race,"High Elf") == 0 || strcmp($race,"Wood Elf") == 0 || strcmp($race,"Dark Elf") == 0 || strcmp($race,"Lightfoot") == 0 || strcmp($race,"Stout") == 0){
            $baseStat += 2;
        } elseif (strcmp($race,"Human") == 0 || strcmp($race,"Forest Gnome") == 0){
            $baseStat += 1;
        } 
        return $baseStat;
    }
    
    function constitutionBonus($baseStat, $race) {
        if (strcmp($race,"Mountain Dwarf") == 0 || strcmp($race,"Hill Dwarf") == 0){
            $baseStat += 2;
        } elseif (strcmp($race,"Human") == 0 || strcmp($race,"Stout") == 0 || strcmp($race,"Rock Gnome") == 0 || strcmp($race,"Half-Orc") == 0){
            $baseStat += 1;
        } 
        return $baseStat;
    }
    
    function intelligenceBonus($baseStat, $race) {
        if (strcmp($race,"Forest Gnome") == 0 || strcmp($race,"Rock Gnome") == 0){
            $baseStat += 2;
        } elseif (strcmp($race,"Human") == 0 || strcmp($race,"High Elf") == 0 || strcmp($race,"Tiefling") == 0){
            $baseStat += 1;
        } 
        return $baseStat;
    }
    
    function wisdomBonus($baseStat, $race) {
        if (strcmp($race,"Human") == 0 || strcmp($race,"Hill Dwarf") == 0 || strcmp($race,"Wood Elf") == 0){
            $baseStat += 1;
        } 
        return $baseStat;
    }
    
    function charismaBonus($baseStat, $race) {
        if (strcmp($race,"Tiefling") == 0 || strcmp($race,"Half-Elf") == 0){
            $baseStat += 2;
        } elseif (strcmp($race,"Human") == 0 || strcmp($race,"Dragonborn") == 0 || strcmp($race,"Dark Elf") == 0 || strcmp($race,"Lightfoot") == 0){
            $baseStat += 1;
        } 
        return $baseStat;
    }
    
    // function to determine starting Hit Points
    function baseHitPoints($con, $class, $race){
        $hp = 0;
        $conBonus = statbonus($con);
        if (strcmp($race,"Hill Dwarf") == 0){
            $conBonus += 1;
        }
        switch ($class) {
            case "Barbarian":
                $hp = 12 + $conBonus;
                return $hp;
                break;
            case "Fighter":
            case "Ranger":
            case "Paladin";
                $hp = 10 + $conBonus;
                return $hp;
                break;
            case "Bard":
            case "Cleric":
            case "Druid";
            case "Monk":
            case "Rogue":
            case "Warlock";
                $hp = 8 + $conBonus;
                return $hp;
                break;
            case "Sorcerer":
            case "Wizard":
                $hp = 6 + $conBonus;
                return $hp;
                break;
      default:
        echo "Something Broke";
        }
    }
    
    // function to calculate stat bonus/penalty
    function statbonus($stat){
        $Bonus = 0;
        if ($stat > 11){
            $Bonus = round(($stat - 10) / 2, 0, PHP_ROUND_HALF_DOWN);
        } elseif($stat < 10){
            $Bonus = round(($stat - 10) / 2, 0, PHP_ROUND_HALF_UP);
        }
        return $Bonus;
    }
    
    // function to display the character's racial traits
    function racialAbilities($race, $characterFile){
        $txt = "";
        $txt .= "<br>\n";
        switch ($race) {
            case "Mountain Dwarf":
            case "Hill Dwarf":
                $_SESSION['raceLanguage'] = "Dwarish";
                $txt .= "<h2>General Dwarf Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Constitution score has been increased by 2.\n
                         <br><b>Age.</b> Dwarves are adult at the age of 50 and on average live to 350.\n
                         <br><b>Alignment.</b> Most dwarves are lawful good.\n
                         <br><b>Size.</b> Dwarves are between 4 and 5 feet tall and have a weight of around 150 pounds. Your size is medium.\n
                         <br><b>Speed.</b> Your base speed is 25 feet and is not reduced by heavy armor.\n
                         <br><b>Darkvision.</b> You can 60 of darkvision and while using it you see in shades of gray.\n
                         <br><b>Dwarven Resilience.</b> You have advantage on saving throws against poiso and you have resistance against poison damage.\n
                         <br><b>Dwarven Combat Training.</b> You have proficiency with the battlexe, handaxe, throwing hammer, and warhammer.\n
                         <br><b>Tool Proficiency.</b> You have proficiency in one of the following: smith's tools, brewer's supplies, or mason's tools.\n
                         <br><b>Stonecunning.</b> Whenever  you make an History check related to the origin of stonework, you are consideered proficient in the History skill and add double your proficiency bonus to the check.\n
                         <br><b>Languages.</b> You can speak, read, and write Common and Dwarvish.\n
                         <br><b>Subrace.</b> The two main subraces of dwarves are hill dwarves and mountain dwarves.\n";
                if ($race == "Hill Dwarf"){
                    $txt .= "<h2>Hill Dwarf Traits</h2>
                         <b>Ability Score Increase.</b> Your Wisdom score has been increased by 1.\n
                         <br><b>Dwarven Toughness.</b> Your maximum hit points have been increased by 1 and it increases by 1 every time you gain a level.\n";
                } else{
                    $txt .= "<h2>Mountain Dwarf Traits<h2>\n
                         <b>Ability Score Increase.</b> Your Strength score has been increased by 2.\n
                         <br><b>Dwarven Armor Training.</b> You have proficiency with light and medium armor.\n";
                }
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
                
            case "High Elf":
            case "Wood Elf":
            case "Dark Elf":
                $_SESSION['raceLanguage'] = "Elvish";
                $txt .= "<h2>General Elf Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Dexterity score has been increased by 2.\n
                         <br><b>Age.</b> Elves are adult once they reach the age of 100 and on average live to 750.\n
                         <br><b>Alignment.</b> Most elves are chaotic good, except dark elves tend to be chaotic evil.\n
                         <br><b>Size.</b> Dwarves are between 5 and 6 feet tall with a slender build. Your size is medium.\n
                         <br><b>Speed.</b> Your base speed is 30 feet.\n
                         <br><b>Darkvision.</b> You can 60 of darkvision and while using it you see in shades of gray.\n
                         <br><b>Keen Senses.</b> You have proficiency in the Perception skill.\n
                         <br><b>Fey Ancestry.</b> You have advanage  on saving throws against being charmed and magic can't put you to sleep.\n
                         <br><b>Trance.</b> Elves don't need to sleep. Instead, they meditate deeply, remaining semiconscious, for 4 hours a day.\n
                         <br><b>Languages.</b> You can speak, read, and write Common and Elvish.\n
                         <br><b>Subrace.</b> The three main subraces of elves are high elves, wood elves, and dark elves.\n";
                if ($race == "High Elf"){
                    $txt .= "<h2>High Elf Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Intelligence score has been increased by 1.\n
                         <br><b>Elf Weapon Training.</b> You have proficiency with longsword, shortsword, shortbow, and longbow.\n
                         <br><b>Cantrip.</b> You know one cantrip of your choice from the wizard spell list. Intelligence is your spelling ability for it.\n
                         <br><b>Extra Language.</b> You can speak, read, and write one extra language of your choice.\n";
                } elseif ($race == "Wood Elf"){
                    $txt .= "<h2>Wood Elf Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Wisdom score has been increased by 1.\n
                         <br><b>Elf Weapon Training.</b> You have proficiency with longsword, shortsword, shortbow, and longbow.\n
                         <br><b>Fleet of Foot.</b> Your basewalking speed increases to 35 feet.\n
                         <br><b>Mask of the Wild.</b> You can attemptto hide even when you are only lightly obscured by foliage, heavy rain, falling snow, mist, and other natural phenomena.\n";
                } else{
                    $txt .= "<<h2>Dark Elf Traits</h2>
                         <b>Ability Score Increase.</b> Your Charisma score has been increased by 1.\n
                         <br><b>Superior Darkvision.</b> Your darkvision has a radius of 120 feet.\n
                         <br><b>Sunlight Sensitivity.</b> You have disadvantage on attack and on Perception checks that relp on sight when you, the target of yout attack, or whatever you are trying to perceive is in direct sunlight.\n
                         <br><b>Drow Magic.</b> You know the <i>dancing lights</i> cantrip. When you reach 3rd level, you can cast the <i>faerie fire</i> spell once per day. Charisma is your spellcasting ability for these spells.\n
                         <br><b>Drow Weapon Training.</b> You have proficiency with rapiers, shortswords, and hand crossbows.\n";
                }   
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
                
            case "Lightfoot":
            case "Stout":
                $_SESSION['raceLanguage'] = "Halfling";
                $txt .= "<h2>General Halfling Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Dexterity score has been increased by 2.\n
                         <br><b>Age.</b> Halflings are adult once they reach the age of 20 and on average live to 150.\n
                         <br><b>Alignment.</b> Most halfings are lawful good.\n
                         <br><b>Size.</b> Halfling are about 3 feet tall and weigh around 40 pounds. Your size is small.\n
                         <br><b>Speed.</b> Your base speed is 25 feet.\n
                         <br><b>Lucky.</b> When you roll a 1 on an attack roll, ability check,or saving throw, you can reroll the die and must use the new roll.\n
                         <br><b>Brave.</b> You have advantage on savings throws against being frightened.
                         <br><b>Halfing Nimbleness.</b> You can move through the space of any creature that is of a size larger than yours.\n
                         <br><b>Languages.</b> You can speak, read, and write Common and Halfling.\n
                         <br><b>Subrace.</b> The two main subraces of halflings are Lightfoot and Stout.\n";
                if ($race == "Lightfoot"){
                    $txt .= "<h2>Lightfoot Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Charisma score has been increased by 1.\n
                         <br><b>Naturally Steathy.</b> You can attempt to hide even when you are obscured only by a creature that is at least one size larger than you.\n";
                } else{
                    $txt .= "<h2>Stout Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Constitution score has been increased by 1.\n
                         <br><b>Stout Resilience.</b> You have advantage on saving throwagainst poison and you have resistance against poison damage.\n";
                }
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
                
            case "Human":
            case "Human Variant":
                $_SESSION['raceLanguage'] = "";
                $txt .= "<h2>Human Traits</h2>\n";
                if ($race == "Human"){
                    $txt .= "
                         <b>Ability Score Increase.</b> Each of your ability scores have been increased by 1.\n";
                } else{
                    $txt .= "
                         <b>Ability Score Increase.</b> Two different ability scores of you choice increase by 1.\n";
                }
                $txt .= "
                         <br><b>Age.</b> Human are adult in their late teens and on average live to less than century.\n
                         <br><b>Alignment.</b> Humans tend toward no particular alignment.\n
                         <br><b>Size.</b> Humans are 5 to 6 feet tall. Your size is medium.\n
                         <br><b>Speed.</b> Your base speed is 30 feet.\n";
                if ($race == "Human Variant"){
                    $txt .= "
                         <br><b>Skills.</b> You gain proficiency in one skill of your choice.\n";
                    $txt .= "
                         <br><b>Feat.</b> You gain one feat of your choice.\n";
                }
                $txt .= "
                         <br><b>Languages.</b> You can speak, read, and write Common and one extra language of your choice.\n";
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;    
                
            case "Dragonborn":
                $txt .= "<h2>Dragonborn Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Strength score has been increased by 2 and your Charisma score has been increased by 1.\n
                         <br><b>Age.</b> Dragonborns are adult once they reach the age of 15 and on average live to 80.\n
                         <br><b>Alignment.</b> Most Dragon tend to be an extreme alignment.\n
                         <br><b>Size.</b> Dragonborn are usually over 6 feet tall and weigh around 250 pounds. Your size is medium.\n
                         <br><b>Speed.</b> Your base speed is 30 feet.\n
                         <br><b>Draconic Ancestry.</b> You have draconicancestry. Choose one type of dragon from the Draconic  Ancestry table. Your breath weapon and damage resistance are determined by the dragon type, as shown in the table.\n";
                $txt .= "<h2>Draconic Ancestry</h2>
                        <table style='width:50%'>
                          <tr>
                            <th>Dragon</th>
                            <th>Damage Type</th> 
                            <th>Breath Weapon</th>
                          </tr>
                          <tr>
                            <td>Black</td>
                            <td>Acid</td>
                            <td>5 by 30 ft. line (Dex. save)</td>
                          </tr>
                          <tr>
                            <td>Blue</td>
                            <td>Lightning</td>
                            <td>5 by 30 ft. line (Dex. save)</td>
                          </tr>
                          <tr>
                            <td>Brass</td>
                            <td>Fire</td>
                            <td>5 by 30 ft. line (Dex. save)</td>
                          </tr>
                          <tr>
                            <td>Bronze</td>
                            <td>Lightning</td>
                            <td>5 by 30 ft. line (Dex. save)</td>
                          </tr>
                          <tr>
                            <td>Copper</td>
                            <td>Acid</td>
                            <td>5 by 30 ft. line (Dex. save)</td>
                          </tr>
                          <tr>
                            <td>Gold</td>
                            <td>Fire</td>
                            <td>15 ft. cone (Dex. save)</td>
                          </tr>
                          <tr>
                            <td>Green</td>
                            <td>Poison</td>
                            <td>15 ft. cone (Con. save)</td>
                          </tr>
                          <tr>
                            <td>Red</td>
                            <td>Fire</td>
                            <td>15 ft. cone (Dex. save)</td>
                          </tr>
                          <tr>
                            <td>Silver</td>
                            <td>Cold</td>
                            <td>15 ft. cone (Con. save)</td>
                          </tr>
                          <tr>
                            <td>White</td>
                            <td>Cold</td>
                            <td>15 ft. cone (Con. save)</td>
                          </tr>
                        </table>\n";
                $txt .= "
                         <br><b>Breath Weapon.</b> You can use your action to exhale destructive eneergy. Your draconic ancestry determines the size, shape and damage type of the exhalation.\n
                         <br>When you use your breath weapon, each creature in the area of the exhalation must make a saving throw, the type of which is determined by your draconic ancestry. The DC for this saving throw equals 8 + your Constitution modifier + your profiviency bonus. A creature takes 2d6 damage on a failed save, and half as much damage on a successful one. The damage increases to 3d6 at 6th level, 4d6 at 11th level, and 5d6 at 16th level.\n
                         <br>After you use your breath weapon, you can't use it again until you complete a short or long.\n
                         <br><b>Damage resistance.</b> You have resistance to the damage type associated with your draconic ancestry.\n
                         <br><b>Languages.</b> You can speak, read, and write Common and Draconic.\n";
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
                
            case "Forest Gnome":
            case "Rock Gnome":
                $_SESSION['raceLanguage'] = "Gnomish";
                $txt .= "<h2>General Gnome Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Intelligence score has been increased by 2.\n
                         <br><b>Age.</b> Gnomes are adult once they reach the age of 40 and on average live to 400.\n
                         <br><b>Alignment.</b> Most Dragon tend to be chaotic or lawful good.\n
                         <br><b>Size.</b> Gnome are between 3 to 4 feet tall and weigh around 40 pounds. Your size is small.\n
                         <br><b>Speed.</b> Your base speed is 25 feet.\n
                         <br><b>Darkvision.</b> You can 60 of darkvision and while using it you see in shades of gray.\n
                         <br><b>Gnome Cunning.</b> You have advantage on all Intelligence, Widom, and Charisma saving throws against magic.\n
                         <br><b>Languages.</b> You can speak, read, and write Common and Gnomish.\n
                         <br><b>Subrace.</b> The two main subraces of halfling are forest gnomes and rock gnomes.\n";
                if ($race == "Forest Gnome"){
                    $txt .= "<h2>Forest Gnome Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Dexterity score has been increased by 1.\n
                         <br><b>Natual Illusionist.</b> You know the <i>minor illusion</i> cantrop. Intelligence is yout spellcasting ability for it.\n
                         <br><b>Speak with Small Beasts.</b> Through Sounds and gestures, you can communicate simple ideas with Small or smaller beasts. Forest gnomes loev animals and often keep squirrels, badger, rabbits, moles, woodpeckers, and other creatures as beloved pets.\n";
                } else{
                    $txt .= "<h2>Rock Gnome Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Constitution score has been increased by 1.\n
                         <br><b>Artificer's Lore.</b> Whenever you make an History check related to magic items, alchemical objects, or technological devices, you can add twice your proficiency.\n
                         <br><b>Tinker.</b> You have proficiency with tinker's tools. Using those tools, you can spend 1 hour and 10 gp worth of materials to construct a Tiny clockwork device (AC 5, hp 1). The device ceases to function after 24 hours (unless you spend 1 hour repairing it to keep the device functioning), or when you use your action to dismantle it; at the time, you can reclaim the materials used to create it. You can have up to three such devices active at a time.\n
                         <br>When you create a device, choose one of the following options:\n
                         <br><i>1. Clockwork Toy.</i> This toy is a clockwork animal, monster or person, such as a frog, mouse, bird, dragon, or soldier. When placed on the ground, the toy moves 5 feet across the ground on each of your turns in a random direction. It makes noises as appropriate to the creature it represents.\n
                         <br><i>2. Fire starter.</i> The device produces a miniature flame, which you can use to light a candle, torch, or campfire. Using the device requires your action.\n
                         <br><i>3. Music Box.</i> When opened, this music box plays a single song at a moderate volume. The box  stops playing when it reaches the song's end or when it is closed.\n";
                }
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
                
            case "Half-Elf":
                $_SESSION['raceLanguage'] = "Elvish";
                $txt .= "<h2>Half-Elf Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Charisma score has been increased by 2 and two other ability scores of your choice increase by 1.\n
                         <br><b>Age.</b> Half-elves are adult once they reach the age of 20 and on average live past 180.\n
                         <br><b>Alignment.</b> Most half-elves are chaotic.\n
                         <br><b>Size.</b> Half-elf are between 5 and 6 feet tall. Your size is medium.\n
                         <br><b>Speed.</b> Your base speed is 30 feet.\n
                         <br><b>Darkvision.</b> You can 60 of darkvision and while using it you see in shades of gray.\n
                         <br><b>Fey Ancestry.</b> You have advanage  on saving throws against being charmed and magic can't put you to sleep.\n
                         <br><b>Skill Versatility.</b> You gain proficiency in two skills of your choice.\n
                         <br><b>Languages.</b> You can speak, read, and write Common, Elvish, and one extra language of your choice.\n";
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
                
            case "Half-Orc":
                $_SESSION['raceLanguage'] = "Orc";
                $txt .= "<h2>Half-Orc Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Strength score has been increased by 2 and your Constitution score has been increased by 1.\n
                         <br><b>Age.</b> Half-orcs are adult once they reach the age of 14 and on average live to 75.\n
                         <br><b>Alignment.</b> Most half-orcs are chaotic.\n
                         <br><b>Size.</b> Half-orc are from 5 to over 6 feet tall. Your size is medium.\n
                         <br><b>Speed.</b> Your base speed is 30 feet.\n
                         <br><b>Darkvision.</b> You can 60 of darkvision and while using it you see in shades of gray.\n
                         <br><b>Menacing.</b> You gain proficiency in the Intimidation skill.\n
                         <br><b>Relentless Endurance.</b> When you are reduced to 0 hit points but not killed outright, you can drop to 1 hit point instead. You can't use this feature again until you finish a long rest.\n
                         <br><b>Savage Attacks.</b> When you score a critical hit with a melee weapon attack, you can roll one of the weapon's damage dice one additional time and addit to the exxtra damage of the critical hit.\n
                         <br><b>Languages.</b> You can speak, read, and write Common and Orc.\n";
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
            
            case "Tiefling":
                $txt .= "<h2>Tiefling Traits</h2>\n
                         <b>Ability Score Increase.</b> Your Charisma score has been increased by 2 and your Intelligence score has been increased by 1.\n
                         <br><b>Age.</b> Tiefling live about the same length as humans, but live a few years longer.\n
                         <br><b>Alignment.</b> Most Tiefling are chaotic and tend to be evil.\n
                         <br><b>Size.</b> Tiefling are the same size and build as humans. Your size is medium.\n
                         <br><b>Speed.</b> Your base speed is 30 feet.\n
                         <br><b>Darkvision.</b> You can 60 of darkvision and while using it you see in shades of gray.\n
                         <br><b>Hellish Resistance.</b> You have resistance to fire damage.\n
                         <br><b>Infernal legacy.</b> You know the <i>theaumaturgy</i> cantrip. Once you reach 3rd level, you can cast the <i>hellish rebuke</i> spell once per day as a 2nd-level spell. once you reach 5th level, you can also cst the <i>darkness</i>. spell once per day. Charisma is your spellcasting ability for these spells.\n
                         <br><b>Languages.</b> You can speak, read, and write Common and Infernal.\n";
                echo $txt;
                $txt = strip_tags($txt);
                fwrite($characterFile, $txt);
                break;
        }
    }
    
    // function to diplay the page number needed to continue building their character
    function classPage ($class, $characterFile){
        $txt = "";
        $txt .= "<h3>To find your class abilities and to select your starting gear please visit page ";
        switch ($class) {
            case "Barbarian":
                $txt .= 46;
                break;
            case "Fighter":
                $txt .= 70;
                break;
            case "Ranger":
                $txt .= 89;
                break;
            case "Paladin";
                $txt .= 82;
                break;
            case "Bard":
                $txt .= 51;
                break;
            case "Cleric":
                $txt .= 56;
                break;
            case "Druid";
                $txt .= 64;
                break;
            case "Monk":
                $txt .= 76;
                break;
            case "Rogue":
                $txt .= 94;
                break;
            case "Warlock";
                $txt .= 105;
                break;
            case "Sorcerer":
                $txt .= 99;
                break;
            case "Wizard":
                $txt .= 112;
                break;
      default:
        echo "Something Broke";
        }
        $txt .= " of the Player's Handbook.</h3>\n";
        echo $txt;
        $txt = strip_tags($txt);
        fwrite($characterFile, $txt);
    }
    
    // open a file for the character 
    $characterFile = fopen("character.txt", "w") or die("Unable to open file!");
    
    // call the functions to generate the character's stats
    $str = strongthBonus(statroll(), $race);
    $dex = dexterityBonus(statroll(), $race);
    $con = constitutionBonus(statroll(), $race);
    $int = intelligenceBonus(statroll(), $race);
    $wis = wisdomBonus(statroll(), $race);
    $cha = charismaBonus(statroll(), $race);
    
    // call the function to generate the character's starting Hit Points and display it
    $hp = baseHitPoints($con, $class, $race);
    $ac = 10 +statbonus($dex);
    echo "HP: " . $hp . " AC: " . $ac;
    
    // display the character's stats
    echo "<br>Strength: " . $str . " (" . statbonus($str) . ")";
    echo "<br>Dexterity: " . $dex . " (" . statbonus($dex) . ")";
    echo "<br>Constitution: " . $con . " (" . statbonus($con) . ")";
    echo "<br>Intelligence: " . $int . " (" . statbonus($int) . ")";
    echo "<br>Wisdom: " . $wis . " (" . statbonus($wis) . ")";
    echo "<br>Charisma: " . $cha . " (" . statbonus($cha) . ")";
    
    //save the stats to the session
    $_SESSION['hp'] = $hp;
    $_SESSION['ac'] = $ac;
    $_SESSION['str'] = $str;
    $_SESSION['dex'] = $dex;
    $_SESSION['con'] = $con;
    $_SESSION['int'] = $int;
    $_SESSION['wis'] = $wis;
    $_SESSION['cha'] = $cha;
    
    // display unqiue race bonus for half-elves
    if (strcmp($race,"Half-Elf") == 0){
        echo "<br>Increase two of your ability scores that are not Charisma by 1";
    }
    // display unqiue race bonus for half-elves
    if (strcmp($race,"Human Variant") == 0){
        echo "<br>Increase two of your ability scores by 1";
    }  
    
    
   
    
    // and write to it so user can take file with
    fwrite($characterFile, "$race - $class\n\n");
    fwrite($characterFile, "HP: $hp AC: $ac\n");
    fwrite($characterFile, "Strength: " . $str . " (" . statbonus($str) . ")\n");
    fwrite($characterFile, "Dexterity: " . $dex . " (" . statbonus($dex) . ")\n");
    fwrite($characterFile, "Constitution: " . $con . " (" . statbonus($con) . ")\n");
    fwrite($characterFile, "Intelligence: " . $int . " (" . statbonus($int) . ")\n");
    fwrite($characterFile, "Wisdom: " . $wis . " (" . statbonus($wis) . ")\n");
    fwrite($characterFile, "Charisma: " . $cha . " (" . statbonus($cha) . ")\n");
    if (strcmp($race,"Half-Elf") == 0){
        fwrite($characterFile, "Increase two of your ability scores that are not Charisma by 1.\n");
    }
    if (strcmp($race,"Human Variant") == 0){
        fwrite($characterFile, "Increase two of your ability scores by 1.\n");
    } 
    
    // display the character's racial traits
    racialAbilities($race, $characterFile);
    
    // display what page number the user needs to go to, to continue building their character
    classPage($class, $characterFile);
    
    echo "<h3>A file for your character was been made.</h3>";
    echo "<h3>If you wish to save your character, please rename the file or move file to another location.</h3>";
    
    fclose($characterFile);
    
    ?>
    <p><a href="backgrounds/<?php echo $background ?>.php">Continue to the next step.</a></p>
    <?php
}
?>
</body>
</html>
