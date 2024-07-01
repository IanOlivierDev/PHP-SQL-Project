<?php 

    // if(isset($_GET["submit"])){
    //     echo $_GET["email"];
    //     echo $_GET["pizza"];
    //     echo $_GET["ingredients"];
    // }


    if (isset($_POST["submit"])){
        echo $_POST["email"];
        echo $_POST["pizza"];
        echo $_POST["ingredients"];
    }
    
    
?>



<?php include('../templates/boilerplate.php');?>
<?php include('../templates/header.php');?>

    <section class="container black-text" style="position: absolute;
      top: 50%;
      right: 50%;
      transform: translate(50%, -50%);"
    >

        <form action="index.php" method="post" class="white">
            <h4 class="center">Add A Pizza!</h4>

            <div class="container">
                <input type="email" name="email" id="email">
                <label for="email">Add email</label>
            </div>
            
            <div class="container">
                <input type="text" name="pizza">
                <label for="pizza">Pizza Title</label>
            </div>

            <div class="container">
                <input type="text" name="ingredients">
                <label for="ingredients">Ingredients (comma seperated)</label>
            </div>
    
            <div class="container" style="display: flex; justify-content: center; margin-top: 30px;">
                <button class="btn waves-effect waves-light" type="submit" name="submit">
                    Submit
                </button>
            </div>
        </form>
    </section>

<?php include('../templates/footer.php');?>
</body> 
</html>