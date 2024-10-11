<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    

<DIV id="top">
 <div id="naglowek"><img src="" alt="" width="75"></div>
 <div id="linki">
 <ul>
      
	 <li><a href="#">AAAAA</a></li>
     <li><a href="#">BBBBB</a></li>
	 <li><a href="#">CCCCC</a></li>
	 <li><a href="#">DDDDD</a></li>
     <li><a href="#">EEEEE</a></li>
	 <li><a href="#">FFFFF</a></li>
	 
</ul>


</body>
</html>

<script>
    const snowflakesCount = 100;

for (let i = 0; i < snowflakesCount; i++) {
    createSnowflake();
}

function createSnowflake() {
    const snowflake = document.createElement('div');
    snowflake.className = 'snowflake';
    snowflake.innerHTML = '.'; // Użyj symbolu płatka śniegu

    // Ustawienie losowej pozycji
    snowflake.style.left = Math.random() * window.innerWidth + 'px';
    snowflake.style.fontSize = Math.random() * 10 + 10 + 'px'; // Losowy rozmiar płatka
    snowflake.style.animationDuration = Math.random() * 3 + 2 + 's'; // Losowy czas spadania
    snowflake.style.opacity = Math.random(); // Losowa przezroczystość

    document.body.appendChild(snowflake);

    // Usunięcie płatka po animacji
    snowflake.addEventListener('animationend', () => {
        snowflake.remove();
        createSnowflake(); // Stwórz nowy płatek po zakończeniu animacji
    });
}
</script>