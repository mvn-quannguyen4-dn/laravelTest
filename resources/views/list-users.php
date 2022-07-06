<HTMl>
    <head>
        <meta charset="UTF-8" />
        <title>Danh Sach sinh vien</title>
    </head>
    <body>
        <?php
       echo '<table border="1" width="100%">';
       echo '<caption>Danh sách user</caption>';
       echo '<TR><TH>ID</TH><TH>User Name</TH><TH>User Mail</TH></TR>';
       for($i=0;$i<sizeof($userList);$i++) 
       {
           echo '<TR><TD>'.$userList[$i]->id.'</TD><TD>'.$userList[$i]->name.'</TD><TD>'.$userList[$i]->email.'</TD></TR>';
       }
       echo '</table>';
        ?>
        <br>
    </body>
</HTMl>