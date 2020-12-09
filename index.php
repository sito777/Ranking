<?php
require 'db.php';

$query  = 'SELECT * FROM Rank
            ORDER BY Tijd ASC';;
$result = mysqli_query($dbc, $query);  

if (!$result)
{   
    die(mysqli_error($dbc));
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- auto refresh -->
    <script>
        setTimeout(function() {
            window.location.reload(1);
        }, 60000);
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <title>Ranking SD</title>
</head>

<body>


    <div>
        <img src="images/background.jpg" alt="blur laptop" id="fixed-bg">
    </div>
    <div class="home-container">
        <!-- from tijdelijk uitgeschakeld
        <div class="home">
            <div class="home-form">
                <form>
                    <h4>Ranking Software Developer Competition</h4>
                    <p>Vul hier jouw naam en tijd in om mee te doen aan de ranking van de wedstrijd! Deze wedstrijd is bedoeld voor leerlingen van het ROC Nijmegen van de opleiding software developer, leerjaar 2020/2021.</p>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Naam</label>
                        <input type="text" class="form-control" id="trainername" placeholder="Vul hier je volledige naam in" style="background-color: #474747;">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tijd</label>
                        <input type="text" class="form-control" id="trainercode" placeholder="Vul hier je eindtijd in" style="background-color: #474747;">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Voeg jouw tijd toe!</button>
                    </div>
                </form>
            </div>
        </div>
        -->

        <div class="home-ranking">
            <!-- rannking sectie-->
            <h4>Ranking Software Developer Competition</h4>
            <table class="ranking">
                <tbody>
                <?php
                
    while($row = mysqli_fetch_assoc($result))
    {
        ?>
    

                    <tr>
                        <td>
                            <div><?php echo $row["Naam"];?>  <?php echo $row["Tijd"];?> <?php echo $row["Niveau"];?>   </div>
                        </td>
                    </tr>
                    <tr>
                        
                    <?php 
    }
    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <footer>
        <div class="footer-bg">
            <div class="credit">
                <h2 class="kop-footer">Credits</h2>
                <p>Desingers:
                    <p class="cap">Darnell, Kyara, Burak, Mahmoud</p>
                </p>
                <p>Devolpers:
                    <p class="cap">Darnell, Kyara, Burak, Mahmoud</p>
                </p>
                <p>Data:
                    <p class="cap">Darnell, Kyara, Burak, Mahmoud</p>
                </p>
            </div>
        </div>

    </footer>
</body>

</html>
