<?php

# Segurança e Html. Temos htmlentitites, htmlspeciolchars

$nome = 'cam" /> <script> alert ("teste"); </script>';

?>

<input type="text"> name="<?php echo htmlspecialchars($nome); ?>" />