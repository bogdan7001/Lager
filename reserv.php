
<div class="col-lg-12">
<div class="alert alert-success clearfix" role="alert">
<h3>Alle Tabelle</h3>
<?php 
$connection = mysql_connect("localhost","lager","1234"); // Connect to Datenbase
$db = mysql_select_db("lager");//Datenbank select
mysql_set_charset("utf8");//codierung 
if(!connection || !$db){exit(mysql_error());}//Test for connecting

$result = mysql_query(" SHOW TABLES;", $connection); // Download Alle Tabelle
mysql_close(); //Close connecting with Datenbank

while($row = mysql_fetch_array($result))//Tabelle in array auslesen
{


 while (list($table) = mysql_fetch_row($result)) {
 
        $sql = mysql_query('SELECT * FROM `'.$table.'`;', $connection);



	?><!-- While begin-->

<div class="col-lg-4">
	<?php echo "<pre>"; ?> 
	<?php print_r ($row); ?> 
	<?php echo $sql; ?> 	
	
	<?php echo "</pre>"; ?> 
</div>
<?php 

 }
} ?><!--While END-->

<p>&nbsp;</p>
</div>








<div class="col-lg-12">
<div class="alert alert-success clearfix" role="alert">
<h3>Alles</h3>
<?php 
$connection = mysql_connect("localhost","lager","1234"); // Connect to Datenbase
$db = mysql_select_db("lager");	  
		  
 
    $tab = mysql_query('SHOW TABLES;', $connection);
 
    while (list($table) = mysql_fetch_row($tab)) {
 
        $sql = mysql_query('SELECT * FROM `'.$table.'`;', $connection);
 
        if (mysql_num_rows($sql)) {
            echo '<table><tr>';
            $r = mysql_fetch_assoc($sql);
 
            foreach($r as $k => $v) {
                echo '<th>'.$k.'</th>';
                $td .= '<td>'.$v.'</td>';
            }
 
            echo '</tr><tr>'.$td.'</tr>';
 
            while ($r = mysql_fetch_row($sql)) {
                echo '<tr>';
 
                foreach ($r as $v) {
                    echo '<td>'.$v.'</td>';
                }
 
                echo '</tr>';
            }
 
            mysql_free_result($sql);
            echo '</table>';
        }
    }
?>
<p>&nbsp;</p>
</div>
</div>







<!--
<div class="col-lg-12">
<div class="alert alert-success clearfix" role="alert">
<h3>A112</h3>
<?php 
$connection = mysql_connect("localhost","lager","1234"); // Connect to Datenbase
$db = mysql_select_db("lager");
mysql_set_charset("utf8");
if(!connection || !$db){exit(mysql_error());}//test for connecting

$result = mysql_query(" SELECT * FROM a112"); // download all from a111 tabele
mysql_close(); //Close connecting with Datenbank

while($row = mysql_fetch_array($result))// in array auslesen
{ ?>

<div class="col-lg-4">
	<?php echo "<pre>"; ?> 
	<?php print_r ($row); ?> 
	<?php echo "</pre>"; ?> 
	
	<?php echo $row['ID'] ?> |
	<?php echo $row['CNT'] ?> |
	<?php echo $row['PCS'] ?> |
</div>
<?php } ?>

<p>&nbsp;</p>
</div>
</div>-->




<?php
  //соединение с базой данных при помощи функции mysql_connect()
  //в аргументах функции укажите имя сервера, логин и пароль. 
  $db = mysql_connect("сервер","логин","пароль");
  //функция mysql_select_db() выбирает текущую 
  //базу данных с именем "komtet_test"
  mysql_select_db("komtet_test" ,$db);
  //функция mysql_query() выполняет запрос на выборку данных 
  //результирующий набор данных хранится в переменной $sql
  $sql = mysql_query("SELECT * FROM links" ,$db);
  //после получения данных начнём формирование HTML-таблицы 
  echo ("<table border ='1'>");
  //выводим строку заголовков 
  echo ("<tr><td>Адрес</td><td>Описание</td></tr>");
  //функция mysql_fetch_row() извлекает одну строку из результата 
  //и сохраняет её в массиве $tablerows
  while ($tablerows = mysql_fetch_row($sql))
  {
  //теперь в цикле для каждой полученной строки сделаем вывод 
  //$tablerows[1] соответствует полю "url" 
  //$tablerows[2] соответствует полю "description" 
  echo("<tr><td><a href="/info/tech/$tablerows[1]">$tablerows[1]
        </a></td><td>$tablerows[2]</td></tr> ");
  }
  echo "</table>";
  //закрытие соединение (рекомендуется)
  mysql_close($db);
  ?>