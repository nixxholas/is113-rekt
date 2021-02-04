<!DOCTYPE html>
<html>
    <body>

        Topics you like:<br>
        <ul>

        <?php	
            // 1. Complete the codes below to print out the topics selected
            // 2. Include validation if needed

            $form_data = $_GET["topics"];

            if ($form_data != null && sizeof($form_data) > 0)
                foreach ($form_data as $topic) {
                    echo "$topic <br>";
                }
        ?>

        </ul>



</body>
</html>
