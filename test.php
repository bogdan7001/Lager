<html>
<head><title>No Head</title></head>
<body>    
<?php    
$rows = array(
    0 => array('booking_id' => 1),
    1 => array('booking_id' => 2),
    2 => array('booking_id' => 3),
    3 => array('booking_id' => 4),
);    
echo '<table>';
foreach($rows as $row)
{
    echo "\n<tr><td>";
    echo '<a href="Details.php?id=' . $row['booking_id'] .'"';
    echo ' onclick="javascript:popup(this.href); return false;">';
    echo 'View Details';
    echo '</a>';
    echo "</td></tr>";
}
echo "\n</table>";
?>    
</body>
<script type="text/javascript">
function popup(url) {
    popupWindow = window.open( url, 'popUpWindow',
        "height=500,width=800,left=10,top=10,resizable=yes,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=no"
    )
}
</script>
</html>