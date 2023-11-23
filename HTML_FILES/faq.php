<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="../CSS/FAQ/FAQ.css">
</head>
<body>
    <!-- HEADER -->


    
  <?php 
  include "../PHP_INCLUDES/BASIC_HEADER/BASIC_HEADER.php"; 
  ?> -


  <main>
    <div class="wrapper">
        <div class="content">
            <h2>F A Q 🐍</h2>

            <table>
              <tr>
                <td><p id="QA"> QUESTION</p></td>
                <td><p id="QA">ANSWER</p></td>
              </tr>

              <tr>
                <td><p>Q: What is Rick & Roll Game?</p></td>
                <td><p>A: Rick & Roll Game is an exciting snake game inspired by the popular animated TV series "Rick and Morty." Players control a snake that grows longer as it consumes items, all while navigating through a dynamic and visually engaging game environment.</p></td>
              </tr>

              <tr>
                <td><p>Q: What is Rick & Roll Game?</p></td>
                <td><p>A: Rick & Roll Game is an exciting snake game inspired by the popular animated TV series "Rick and Morty." Players control a snake that grows longer as it consumes items, all while navigating through a dynamic and visually engaging game environment.</p></td>
              </tr>

              <tr>
                <td><p> Q: Can I customize my snake in the game?</p></td>
                <td><p>A:  Absolutely! Rick & Roll Game offers customization options for your snake. You can choose different skins to personalize your gaming experience.</p></td>
              </tr>

              <tr>
                <td><p>Q: Do I need to be a fan of "Rick and Morty" to enjoy the game?</p></td>
                <td><p>A: No, familiarity with the show is not required to enjoy Rick and Morty Adventure. The game is designed to be entertaining for both fans of the series and those new to the "Rick and Morty" universe</p></td>
              </tr>

              <tr>
                <td><p>Q: How can I report a bug or provide feedback about the game?</p></td>
                <td><p>A: We appreciate your feedback! If you encounter any issues or have suggestions, please contact our support team through the in-game support option or visit our official website for contact information.</p></td>
              </tr>

              <tr>
                <td><p>Q: How can I stay updated on new features and events in Rick & ROll Adventure?</p></td>
                <td><p>A: To stay in the loop, follow our official social media accounts and regularly check for announcements within the game. We'll keep you informed about exciting updates, events, and more!</p></td>
              </tr>

              
            </table>
        </div>
    </div>
  </main>



  <!-- FOOTER -->
  
  <?php 
  include "../PHP_INCLUDES/FOOTER/FOOTER.php"
  ?>



  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>
</body>
</html>