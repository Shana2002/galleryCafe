<?php include_once('components\header.php') ?>
<!-- Code here -->
<div class="title-container">
    <h1>Contact</h1>
 </div>
 <div class="contact-wrapper2">
    <form action="" class="contact-us">
        <h1>Send us a Massage</h1>
        <div>
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Your Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="msg">Your Massege</label>
            <textarea name="msg" id="msg"></textarea>
        </div>
        <input type="submit" name="submit" id="submit" value="Submit">
    </form>
    <div class="horizontal"></div>
    <div class="contact-details">
        <h1>Contact US</h1>
        <p>Gallery Cafe and Restaurant <br>
            1096,<br>
            Colombo-7 <br>
            0703399599</p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3960.882368244606!2d79.85718174363117!3d6.9046677147029865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ssi!2slk!4v1727280331836!5m2!1ssi!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
 </div>
<!-- code end -->
<?php include_once('components\getintouch.php') ?>
<?php include_once('components\logsign-form.php') ?>
<?php include_once('components\favourite.php') ?>
<?php include_once('components\cart.php') ?>
<?php include_once('components\search.php') ?>
<?php include_once('components\footer.php') ?>