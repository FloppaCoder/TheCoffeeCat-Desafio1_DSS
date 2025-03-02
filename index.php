<?php require('header.php'); ?>

<body>
    <div id="pagewrap" class="flex flex-col min-h-screen">
        <!-- #header y #nav -->
        <?php require('nav.php'); ?>
        <!-- /#header y #nav -->

        <!-- #content y #sidebar -->
        <div class="flex flex-1">
            <main class="flex-1 p-6">
                <?php require('content.php'); ?>
            </main>
            <aside class="w-1/4 p-6">
                <?php require('sidebar.php'); ?>
            </aside>
        </div>
        <!-- /#content y #sidebar -->

        <!-- #footer -->
        <?php require('footer.php'); ?>
        <!-- /#footer -->
    </div>
    <!-- /#pagewrap -->
</body>

</html>