<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?
    class Animal
    {
        public $weight, $color, $age;

        function info()
        {
            echo 'Вес:' . $this->weight . '<br>' . 'Цвет:' . $this->color . '<br>' . 'Возраст:' . $this->age;
        }
    }



    class Lion extends Animal
    {
        public $arial;
        function info()
        {
            echo  '<span class="color">Место обитания: </span>' . $this->arial . '<br><br>' . '<span class="color">Вес: </span>' . $this->weight . '<br><br>' . '<span class="color">Цвет: </span>' . $this->color . '<br><br>' . '<span class="color">Возраст: </span>' . $this->age;
        }
    }


    class Rabbit extends Animal
    {
        public $speed;
        function info()
        {
            echo '<span class="color">Скорость: </span>' . $this->speed . '<br><br>' . '<span class="color">Вес: </span>' . $this->weight . '<br><br>' . '<span class="color">Цвет: </span>' . $this->color . '<br><br>' . '<span class="color">Возраст: </span>' . $this->age;
        }
    }

    class Wolf extends Animal
    {
        public $length;
        function info()
        {
            echo '<span class="color">Длина: </span>' . $this->length . '<br><br>' . '<span class="color">Вес: </span>' . $this->weight . '<br><br>' . '<span class="color">Цвет: </span>' . $this->color . '<br><br>' . '<span class="color">Возраст: </span>' . $this->age;
        }
    }

    $lion = new Lion();
    $lion->weight = '200';
    $lion->age = '3';
    $lion->color = 'желтый';
    $lion->arial = 'Африка';

    $rabbit = new Rabbit();
    $rabbit->weight = '15';
    $rabbit->age = '1';
    $rabbit->color = 'белый';
    $rabbit->speed = '15';

    $wolf = new Wolf();
    $wolf->weight = '40';
    $wolf->color = 'серо-белый';
    $wolf->age = '5';
    $wolf->length = '1,5';
    ?>

    <div class="container">
        <br> <br> <br>
        <h2 class="title">Животные :)</h2>
        <br> <br>
        <div class="information">
            <div class="info_animal">
                <img src="assets/img/lion.jpg" alt="lion" class="img">
                <br> <br>
                <div class="animal_text">
                    <h2 class="title_name">
                        Lion
                    </h2>
                    <p class="text"><? $lion->info(); ?></p>
                </div>
            </div>

            <div class="info_animal">
                <img src="assets/img/rabbit.jpg" alt="rabbit" class="img">
                <br> <br>
                <div class="animal_text">
                    <h2 class="title_name">Rabbit</h2>
                    <p class="text"><? $rabbit->info(); ?></p>
                </div>
            </div>
            <div class="info_animal">
                <img src="assets/img/wolf.jpg" alt="wolf" class="img">
                <br> <br>
                <div class="animal_text">
                    <h2 class="title_name">Wolf</h2>
                    <p class="text"><? $wolf->info(); ?></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>