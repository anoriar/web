<html>
  
  	<!--https://web-anoriar.c9users.io/phpmyadmin  логин anoriar пар 123-->
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./font.css" />
        <link rel="stylesheet" href="./style.css" />
    <head>
    </head>
    <body>
        <h1>Добавить город</h1>
        <form action="add.php" method="post">
          Название<br><input type="text" name="name"/></br>
          Код страны<br><input type="text" name="countrycode"/></br>
          Район<br><input type="text" name="district"/></br>
          Население<br><input type="text" name="population"/></br>
              <input type="submit">
        </form>
        
        <h1>Список городов</h1>
        <table>
          <tr>
            <th>Название страны</th>
            <th>Название города</th>
            <th>Население города</th>
          </tr>
          <?php
            mysql_connect("localhost", "anoriar", "123");
            mysql_select_db("world");
            mysql_query("set name 'utf8';");
            $sql = "select countrycode, name, population
                    from city where population > 1000000 order by population desc, countrycode, name";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
          ?>
              <tr>
                <td><?= $row["countrycode"]; ?></td>
                <td><?=$row["name"] ?></td>
                <td><?= $row["population"]; ?></td>
              </tr>
            <?php }?>
        </table>
      
    </body>
</html>