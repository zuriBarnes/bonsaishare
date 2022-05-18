
<?php

require('./app.php');
include('./partials/head.php');
include('./partials/header.php');

$email = $title = $info = ''; // set empty variable to output in the template

$errors = array('email' => '', 'title' => '', 'info' => ''); // create empty errors array to inject strings

?>

<?php

if(isset($_POST['submit'])) {

    //  check email
    if(empty($_POST['email'])) {
        $errors['email'] = '<p class="red-text">email must be entered</p> <br />';
    } else {
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be valid email address <br />';

        }
    }
    
    //  check title
    if(empty($_POST['title'])) {
        $errors['title'] = '<p class="red-text">title must be entered</p> <br />';
    } else {
        $title = $_POST['title'];    
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            $errors['title'] = 'Title must be letters and spaces only';
        }
    }

     //  check info
    if(empty($_POST['info'])) {
        $errors['info'] = '<p class="red-text">info must be entered</p> <br />';
    } else {
        $info = $_POST['info'];    
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $info)){ // comma seperateed list reqex
            $errors['info'] = 'Info must be a comma separated list';
        }
    }



    //  end of POST check
}


?>


<main>
    <h1><?= $site_title; ?></h1>
    <article>
        <form action="add.php" method="POST">
            <h3>Add a Bonsai</h3>
            <div>
                <label for="nanme">Email</label><br />
                <input type="text" name="email" id="" value="">
                <div class="red-text"><?= $errors['email']; ?></div>
            </div>
            <div>
                <label for="nanme">Title</label><br />
                <input type="text" name="title" id="">
                <div class="red-text"><?= $errors['title']; ?></div>
            </div>
       
            <div>
                <label for="nanme">Info</label><br />
                <input type="text" name="info" id="">
                <div class="red-text"><?= $errors['info']; ?></div>
            </div>

            <div class="submit">
                <input class="add-btn" type="submit" name="submit" value="submit" id="">
            </div>
        </form>

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
