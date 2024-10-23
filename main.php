<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    

    <DIV id="top">
        <div id="naglowek"></div>
        <div id="linki">
            <ul>
                
                <li><a href="glowna.php">GŁÓWNA</a></li>
                <li><a href="#">Miasta</a></li>
                <li><a href="#">TWÓRCY</a></li>
                
                
            </ul>
        </div>
    </div>

    <?php
        require("config.php");
        $miasta = "SELECT * FROM miasta";
        $result = $conn->query($miasta);

        while($wynik = mysqli_fetch_assoc($result)) {
            echo "<a>" . $wynik['nazwa'] . "</a>";
            echo "<img src=" . $wynik['zdjecie'] . ".jpg">;
        }

    ?>



    <script>
        const snowflakesCount = 100;

    for (let i = 0; i < snowflakesCount; i++) {
        createSnowflake();
    }

    function createSnowflake() {
        const snowflake = document.createElement('div');
        snowflake.className = 'snowflake';
        snowflake.innerHTML = '.'; 

    
        snowflake.style.left = Math.random() * window.innerWidth + 'px';
        snowflake.style.fontSize = Math.random() * 10 + 10 + 'px'; 
        snowflake.style.animationDuration = Math.random() * 3 + 2 + 's'; 
        snowflake.style.opacity = Math.random(); 

        document.body.appendChild(snowflake);

        
        snowflake.addEventListener('animationend', () => {
            snowflake.remove();
            createSnowflake(); 
        });
    }
    </script>

</body>
</html>