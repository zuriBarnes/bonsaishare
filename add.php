
<?php require('./app.php');?>
<?php include('./partials/head.php') ?>
<?php  include('./partials/header.php')?>



<main>
    <h1><?= $title; ?></h1>
    <article>
        <form action="add.php" method="POST">
            <h3>Add a Bonsai</h3>
            <div>
                <label for="nanme">Email</label><br />
                <input type="text" name="email" id="" value="">
            </div>
            <div>
                <label for="nanme">Title</label><br />
                <input type="text" name="title" id="">
            </div>
       
            <div>
                <label for="nanme">Info</label><br />
                <input type="text" name="info" id="">
            </div>

            <div class="submit">
                <input class="add-btn" type="submit" name="submit" value="submit" id="">
            </div>
        </form>
        <?php

if(isset($_POST['submit'])) {

    //  check email
    if(empty($_POST['email'])) {
        echo '<p class="red-text">an email must be entered</p> <br />';
    } else {
        echo htmlspecialchars($_POST['email']) . '<br />';
    }
    
    //  check title
    if(empty($_POST['title'])) {
        echo '<p class="red-text">a title must be entered</p> <br />';
    } else {
        echo htmlspecialchars($_POST['title']) . '<br />';
    }

     //  check info
    if(empty($_POST['info'])) {
        echo '<p class="red-text">info must be entered</p> <br />';
    } else {
        echo htmlspecialchars($_POST['info']) . '<br />';
    }    


    //  end of POST check
}


?>
        <section class="bonsai-list">
            <p>Recent trees: </p>
          <?php foreach($blogs as $bonsai) : ?>
            <p><?= $bonsai['title']; ?></p>
        <?php endforeach; ?>
        </section>
    </article>
    <nav class="nav-2">
  
        <a href="index.php"><---Back to Home</a>
    </nav>
</main>


<?php include('./partials/footer.php') ?>
