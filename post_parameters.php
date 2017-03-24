<?php
    // Content-Type: application/x-www-form-urlencoded
    $rawPost = file_get_contents("php://input");
    
    $int   = filter_var($_POST["textValue"], FILTER_VALIDATE_INT);
    $email = filter_var($_POST["textValue"], FILTER_VALIDATE_EMAIL);
    $url   = filter_var($_POST["textValue"], FILTER_VALIDATE_URL);
    $ip    = filter_var($_POST["textValue"], FILTER_VALIDATE_IP);
?>

<body>
    <h3>POST parameters</h3>
    <pre><?php print_r($_POST); ?> 
    <pre>raw: <?php echo $rawPost; ?></pre>
    <form action="post_parameters.php" method="POST">
    <pre>
        <label>textValue</label>   <input type="text" name="textValue"/>
        <label>numberValue</label> <input type="number" name="numberValue"/>
        <label>dateValue</label>   <input type="date" name="dateValue"/>
        <label>checkboxValue</label>  <input type="checkbox" name="checkboxValue"/>
        <label for="one">radioValue one</label>  <input id="one" type="radio" name="radioValue" value="one">
        <label for="two">radioValue two</label>  <input id="two" type="radio" name="radioValue" value="two">
        <input type="submit">
    </pre>
    </form>
</body>