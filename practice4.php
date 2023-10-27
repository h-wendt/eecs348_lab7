<!DOCTYPE html>
<html>
<body>
	<?php
    if (isset($_POST["size"])) 
    {
        $size = intval($_POST["size"]);
        if ($size > 0) 
        {
            print "<table border='1'>";
            print "<tr><th></th>";

            for ($i = 1; $i <= $size; $i++) 
            {
                print "<th>" . $i . "</th>";
            }
            print "</tr>";

            for ($i = 1; $i <= $size; $i++) 
            {
                print "<tr><th>" . $i . "</th>";
                for ($j = 1; $j <= $size; $j++) 
                {
                    print "<td>" . ($i * $j) . "</td>";
                }
                print "</tr>";
            }
            print "</table>";
        } else 
        {
            print "<p>Enter a valid number.</p>";
        }
    }
	?>
</body>
</html>
