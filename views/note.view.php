<?php require 'partials/head.view.php' ?>
<div class="min-h-full">
    <?php require 'partials/nav.view.php' ?>
    <?php require 'partials/banner.view.php' ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <ul>
                <li><?= $note["id"] .": ".  $note["body"]?></li>
                <a href="/notes" class="text-blue-400 underline">back to notes</a>
            </ul>
        </div>
    </main>
</div>
<?php require 'partials/foot.view.php' ?>