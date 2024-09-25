<?php include_once('components\header.php') ?>
<!-- Code here -->
 <div class="cover-image">
    <div class="details">
    <h1>wanna Celebrate party ?</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam deleniti quasi officia, at odio, animi magni velit officiis dolor illo atque doloremque dignissimos quisquam. Reprehenderit ab impedit voluptatum mollitia sit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nisi vitae delectus adipisci, laudantium quaerat soluta assumenda dolorum totam. Ipsam neque reiciendis doloribus voluptatibus quidem nihil culpa veritatis, a sunt.
        Possimus cumque iure, eveniet fuga consectetur impedit ab. Sint voluptatem temporibus mollitia reiciendis quo explicabo molestiae ducimus alias minima? Eius et delectus excepturi voluptatum eaque, qui accusantium tempora est aliquam.
        Quae voluptas fugiat pariatur incidunt repellendus veniam maxime explicabo voluptatum ipsam, soluta nihil iure nostrum, laborum doloribus atque consequuntur quasi doloremque. Consequuntur asperiores eveniet rerum. Consequuntur repudiandae ab officia? Sed.
        Cum quis saepe nobis laborum molestiae quam officia fugiat assumenda enim quaerat, perspiciatis, eum autem aperiam ullam soluta consequatur at nulla tempora voluptatum nemo corrupti ipsam pariatur. Dicta, praesentium? Praesentium.
        Recusandae delectus adipaudantium velit ipsa ullam qui facere sequi odio ipsam est. Minima temporibus autem incidunt quos quis!
    </p>
    </div>
    <!-- The "Book Reservation" button -->
    <button class="book-btn" id="bookBtn">Book Reservation</button>
    
    <!-- Reservation form -->
    <div class="reservation-form" id="reservationForm">
    <button class="close-btn" id="closeBtn">&times;</button>
      <h2>Reservation Form</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
        
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
<!-- code end -->

<?php include_once('components\logsign-form.php') ?>
<?php include_once('components\favourite.php') ?>
<?php include_once('components\cart.php') ?>
<?php include_once('components\search.php') ?>
<?php include_once('components\footer.php') ?>