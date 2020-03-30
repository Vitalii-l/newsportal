<?php ob_start() ?>
<h2>404 Error</h2>
<article>
    <h3>404 error admin panel</h3>
    <p>The requested URL not found</p>
</article>

<?php $content = ob_get_clean();?>
<?php include "viewAdmin/templates/layout.php";
