<?php $currentPage = "5"; ?>


<!DOCTYPE html>
<html lang="en">
    <?php include "asset/php/head.php"; ?>
    <title>Donation</title>

<body>
    <?php include "asset/php/btn.php"; ?>
    <?php include "asset/php/numpage.php"; ?>
    
    <header>
        <h1>Donation</h1>
        <p class="para2">Species around the world are going to the extinction, please join this movement to reduce the extinction of species.</p>
    </header>

    <?php include "asset/php/nav.php"; ?>  

    <h1> Please consider donating these Organizations.</h1>

    <div class="carousel-container">
        <i class="fas fa-arrow-left" id="prevBtn"></i>
        <i class="fas fa-arrow-right" id="nextBtn"></i>
        
        <div class="carousel-slide">
            
            <img src="asset/image/wolf.png" id="LastClone" alt="Defender of Wildlife"  >
            
            <img src="asset/image/frontline.jpg" alt="frontline">
                
            <img src="asset/image/americananimal.png" alt="American Animal">s

            <img src="asset/image/WWF_logo.svg" alt="World Wildlife Fund" >

            <img src="asset/image/esc.png" alt="Endangered Species Coalition">
                
            <img src="asset/image/wolf.png" alt="Defender of Wildlife"  >

            <img src="asset/image/frontline.jpg" id="FirstClone" alt="frontline">

        </div>
    </div>
   <h2 class="para2"> If you want more than above, look into these list of organizations.<a href="https://medium.com/@GVI/10-of-the-best-organizations-to-follow-that-help-endangered-animals-e2735a787269" id="clickme">Click me!</a> </h2>
    
    <form method="POST" action="form-processor.php" name="email" id="donation" >
       Donation :<br>
        $25 <input type="radio" value="$25" name="donate"><br>
        $50 <input type="radio" value="$50" name="donate"><br>
        $75 <input type="radio" value="$75" name="donate"><br>
        $100<input type="radio" value="$100" name="donate"><br>
        <br>

        E-mail: <input type="text"><br>
        <input type="button" value="Submit">
    </form>


    <footer class="copy">Copyright &copy; Natnail Tolossa RIT Web and Mobile II 2022-2023-All Right Reserved</footer>
    <?php include "asset/php/btn.php"; ?>
    
<?php include "asset/php/script.php"; ?>    
</body>
</html>