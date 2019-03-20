<?php

if ($_GET["button"] == "door")
        {
        system(" gpio -g mode 4 out");
        system(" gpio -g write 4 0");
        usleep(500000);
        system(" gpio -g write 4 1");
        }

if ($_GET["button"] == "light")
        {
        system(" gpio -g mode 17 out");
        system(" gpio -g write 17 0");
        usleep(500000);
        system(" gpio -g write 17 1");
        }

?>

<html>
<head>
<title>Door Button</title>
<meta http-equiv="refresh" content="5; url=/buttons.html">
</head>
<body>
<center>
<img src=/images/giphy.gif height=95%>  <!--- whatever image name you have, probably not this -->
</center>
</body>
</html>
