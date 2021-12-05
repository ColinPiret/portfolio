<?php

require_once 'partials/header.php'?>

<section id="section-Contact2" class="section-Contact2">

    <h2>Get in touch</h2>
    <form action="#" method="POST">

        <label for="name"></label>
        <input type="text" id="name" name="name"  placeholder="Name" required>

        <label for="email"></label>
        <input type="email" id="email" name="email" placeholder="Email" required>

        <label for="comment"></label>
        <input type="text" id="comment" name="comment" max="5" placeholder="Comment" required>

        <label for="Submit"></label>
        <button type="submit" id="Submit" name="Submit" class="Submit">Send Email</button>
        <a href="index.php" class="btn btn-accueil"> Accueil </a>
    </form>





</section>


<?php require_once 'partials/footer.php'; ?>


    