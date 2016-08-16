<?php
//получаем данные через $_POST
if (isset($_POST['search'])) {
    // подключаемся к базе
    include('db_search.php');
    $db = new db();
    // никогда не доверяйте входящим данным! Фильтруйте всё!
    $word = mysql_real_escape_string($_POST['search']);
    // Строим запрос  
	
	/*
 	$sql = "	
	(SELECT id FROM a1 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a2 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a3 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a4 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a5 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a6 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a7 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a8 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a9 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a10 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a11 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a12 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a13 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a14 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a15 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a16 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a17 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a18 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a19 WHERE id LIKE '%" . $word . "%')
	 UNION(SELECT id FROM a20 WHERE id LIKE '%" . $word . "%')
	"; 
 // Получаем результаты
    $row = $db->select_list($sql);

    if(count($row)) {
        $end_result = '';
        foreach($row as $r) {
            $result         = $r['id'];
            $bold           = '<span class="found">' . $word . '</span>';
            $end_result    .= '<li>' . str_ireplace($word, $bold, $result, $result2) . '</li>';					
        }
        echo $end_result;
    } else {
        echo '<li>По вашему запросу ничего не найдено</li>';
    }
	*/
	

$number = 1;
while ($number < 1000):	
	$sql = "(SELECT id FROM a$number WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a$number{border:4px solid blue;}</style>" .$result;}
	$number++;
endwhile;


	
/*
//***************a1	
	$sql = "(SELECT id FROM a1 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a1{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a2 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a2{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a3 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a3{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a4 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a4{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a5 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a5{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a6 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a6{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a7 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a7{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a8 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a8{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a9 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a9{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a10 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a10{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a11 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a11{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a12 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a12{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a13 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a13{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a14 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a14{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a15 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a15{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a16 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a16{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a17 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a17{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a18 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a18{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a19 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a19{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a20 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a20{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a21 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a21{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a22 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a22{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a23 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a23{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a24 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a24{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a25 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a25{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a26 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a26{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a27 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a27{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a28 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a28{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a29 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a29{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a30 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a30{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a31 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a31{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a32 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a32{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a33 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a33{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a34 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a34{border:4px solid blue;}</style>" .$result;}
	$sql = "(SELECT id FROM a35 WHERE id LIKE '%". $word ."%')";$row = $db->select_list($sql);if(count($row)){foreach($row as $r) {$result = $r['id'];}echo "<style>#a35{border:4px solid blue;}</style>" .$result;}
*/

}
?>