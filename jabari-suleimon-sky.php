<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Pt. 2</title>
</head>
<body>
    <?php
    $info = "The blue component of the spectrum of visible light has shorter wavelengths and higher frequencies than the red component. Thus, as sunlight of all colors passes through air, the blue part causes charged particles to oscillate faster than does the red part. The faster the oscillation, the more scattered light is produced, so blue is scattered more strongly than red. For particles such as air molecules that are much smaller than the wavelengths of visible light the difference is dramatic. The acceleration of the charged particles is proportional to the square of the frequency, and the intensity of scattered light is proportional to the square of this acceleration. Scattered light intensity is therefore proportional to the fourth power of frequency. The result is that blue light is scattered into other directions almost 10 times as efficiently as red light.

";
    echo "
    <img src='picography-summer-field-blue-sky-crops-wheat-corn-warm-1.jpg'style='width:49%'>
    <img src='iso-republic-rocky-hike-snowy-mountains-blue-sky.jpg' style='width:49%'> <p style='width:75%; margin:0 auto'>$info <br>
    <a href='https://www.scientificamerican.com/article/why-is-the-sky-blue/'>Scientific American</a>
    <a href='https://spaceplace.nasa.gov/blue-sky/en/'>NASA</a> </p>";
    ?>
    
</body>
</html>