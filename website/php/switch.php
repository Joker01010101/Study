<!-- ref:https://www.w3schools.com/php/php_switch.asp -->
<?php
$character = "joker";

switch ($character) {
  case "joker":
    echo "Your are joker!";
    break;
  case "batman":
    echo "You are batman!";
    break;
  case "superman":
    echo "Your are superman!";
    break;
  default:
    echo "Who are you! Don't jokes on me";
}
// output:Your are joker!
?>
