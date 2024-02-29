<hr class="featurette-divider">
<footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>

    <p>© 2017-2024 Company, Inc. </p>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    // Get all <li> elements with class "nav-item"
    var navItems = document.querySelectorAll('li.nav-item');

    // Loop through each <li> element
    navItems.forEach(function(item) {
        // Get the <a> tag within the <li> element
        var link = item.querySelector('a');

        // Check if <a> tag exists within the <li> element
        if (link) {
            // Add the class to the <a> tag
            link.classList.add('nav-link'); // Replace 'your-class-name' with your desired class
        }
    });
</script>
<?php
wp_footer();
?>
</body>

</html>