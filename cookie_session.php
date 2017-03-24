<?php
    session_start();
    // $_SESSION["someData"] = 4;
    // $_SESSION["moreData"] = ["a", "b", "c"];
    
?>

<body>
    <h3>GET parameters</h3>
    <pre><?php
        echo '$_COOKIE: ';
        print_r($_COOKIE);
        
        echo '$_SESSION: ';
        print_r($_SESSION);
    ?>
    </pre>
</body>