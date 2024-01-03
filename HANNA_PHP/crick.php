<?php
$Indian_players = array("Virat Kohli","MS Dhoni","Rohit Sharma","shubhman gill","KL Rahul","Jasprit Bumrah","Hardik Pandya");
echo "<table border=\"1\"><tr><th>Indian players</tr>";
foreach ($Indian_players as $v) {
echo "<tr>";
echo "<td>$v</td>";
echo "</tr>";
}
echo "</tr></table>";
?>