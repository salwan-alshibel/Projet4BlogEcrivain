<!DOCTYPE html>
<html lang="fr">

    <?php require_once (ROOT.'app/views/head.php')?>

    <!-- Tinymce -->
    <script src="public/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
    tinymce.init({
        selector: '.myeditablediv',
        plugins: 'quickbars image lists code table codesample',
        toolbar: 'formatselect | forecolor backcolor | bold italic underline strikethrough | link image blockquote codesample | align bullist numlist | code ',
        height: 400,
    });
    </script>

<body id="page-top">
    <?php require_once (ROOT.'app/views/navBar.php')?>
    <section id="content"><?= $content ?></section>
    <?php require_once (ROOT.'app/views/footer.php')?>
 
    <!-- JS -->
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/darkmod.js"></script>
    <script src="public/js/main.js"></script>
    <script src="public/js/commentary.js"></script>
</body>

</html>