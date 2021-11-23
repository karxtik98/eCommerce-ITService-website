<!DOCTYPE html>
<html lang="en">
    <!----------header---------->
    <?php include('./header.php') ?>
<body>
    <!-----------NavigationBar----------->
    <?php include('./navbar.php') ?>
    <!----------Slider---------->
    <?php include('./slider.php') ?>
     <!----------About---------->
     <?php include('./about.php') ?>
     <!----------Services---------->
     <?php include('./services.php') ?>
     <!----------Team Members---------->
     <?php include('./team.php') ?>
     <!----------Price Plan---------->
     <?php include('./price.php') ?>
     <!----------Testimonials---------->
     <?php include('./testimonial.php') ?>
    <!--------Footer---------->
    <?php include('./footer.php') ?>
    <script src="js/smooth-scroll.js"></script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]');
    </script>    
</body>
</html>