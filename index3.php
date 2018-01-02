<?php
include 'index.php'
?>
<div class="jumbotron">
    <?php

    function picture() {
        $portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
        $portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
        $portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
        $portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
        foreach ($portrait1 as $paintings) {
            var_dump($paintings);
        }
        foreach ($portrait2 as $paintings) {
            var_dump($paintings);
        }
        foreach ($portrait3 as $paintings) {
            var_dump($paintings);
        }
        foreach ($portrait4 as $paintings) {
            var_dump($paintings);
        }
    }

    picture();
    ?>
</div>
<?php
include 'footer.php'
?>