<?php require('./app.php');?>
<?php include('./partials/head.php') ?>
<?php  include('./partials/header.php')?>


<main>
    <h1><?= $title; ?> </h1>
    <article>
        <div>
            <a class="add-btn" href="./add.php">Add Bonsai</a>
        </div>
    </article>
    <section>
        <h3>Recent Bonsai</h2>
    <ul class='bonsai-bg'>
        <?php foreach($blogs as $blog) : ?>
            <li>
                <a href="#" class="bonsai"><?= $blog['title']; ?></a>
                <p><?= $blog['author']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
    </section>
</main>


<?php include('./partials/footer.php') ?>
