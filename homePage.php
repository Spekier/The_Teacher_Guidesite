<?php
    include 'header.php';
?> 

<div id="slideshow">
    <div class="quote" style="display: block;">"Education is the most powerful weapon which you can use to change the world." - Nelson Mandela</div>
    <div class="quote">"The roots of education are bitter, but the fruit is sweet." - Aristotle</div>
    <div class="quote">"Teaching is the greatest act of optimism." - Colleen Wilcox</div>
    <div class="quote">"Some people change the world. And some people change the people who change the world, and that's you." -  Kij Johnson</div>
</div>

<script>
    $(document).ready(function() {
        let currentIndex = 0;
        const quotes = $('.quote');
        const totalQuotes = quotes.length;

        function showNextQuote() {
            quotes.eq(currentIndex).fadeOut(1000, function() {
                currentIndex = (currentIndex + 1) % totalQuotes;
                quotes.eq(currentIndex).fadeIn(1000);
            });
        }

        setInterval(showNextQuote, 3000);
    });
</script>

<article>  
        <h1>Welcome to The Teacher Guidesite </h1>
    
        <p>Since 2024, <strong>The Teacher Guidesite</strong> aims to direct teachers
            who are new to the profession.</p>
    
        <p>New to teaching? Need to know which tools to use? Are you overwhelmed at the thought 
        of building a curriculum? <strong>The Teacher Guidesite</strong> is here 
        for you! <strong>The Teacher Guidesite</strong> takes pride in aiding 
        educators in their important task to educate the next generation. We 
        strive to provide resources, motivation, confidence, and support for any
        educator seeks it. <strong>Hatzlacha Rabba!</strong></p>
    
   
    <h1>We're Always Here for YOU!</h1>
    
   </article>
<?php
    include 'footer.php';
?>