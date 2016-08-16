<?php
//получаем данные через $_POST
if (isset($_POST['search'])) {
    // подключаемся к базе
    include('db_search.php');
    $db = new db();
    // никогда не доверяйте входящим данным! Фильтруйте всё!
    $word = mysql_real_escape_string($_POST['search']);
    // Строим запрос  
$style ="{background-color:#93C87D!important;border:1px solid #56A857; border-radius:2px;color:#333;outline:0;text-shadow:none;font-weight:bold;}";
$number = 1;
while ($number < 1080):	
	$sql = "(SELECT id FROM a$number WHERE id LIKE '%". $word ."%')";$row=$db->select_list($sql);
	
	if(count($row)){
		foreach($row as $r){$result=$r['id'];}echo"<style>#a$number $style #results {background:#93C87D;}</style> <option>a$number:" .$result. "</option>"; $zero = 0;
		}
	$number++; 
	  
endwhile;
  if ($zero !== 0){echo "<style>#results{background:#E58484;}</style><span class='glyphicon glyphicon-remove red'></span><option>Leider Nichts gefunden!</option>";}

}
?>