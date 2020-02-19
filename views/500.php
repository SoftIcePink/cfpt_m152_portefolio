<?php
//  Projet      :   Portefolio - M152
//  Author      :   SoftIcePink
//  Git         :   https://github.com/SoftIcePink/cfpt_m152_portefolio
//  File        :   index.php
//  Description :   This file is used as the error 500 page for this app.
//  Last update :   19.02.2019
?>


<p>Une erreur s'est produite sur le serveur, veuillez contacter l'administrateur pour lui signaler la chose...</p>

<h3>Message fourni par le système</h3>
<pre>
<?= $e->getMessage(); ?>
</pre>
<hr>
<h3>Pile des appels</h3>
<pre>
<?= $e->getTraceAsString(); ?>
</pre>
