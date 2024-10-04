<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    class Animal
    {
        public $weight;
        public $age;
        public $color;
        public function __construct($weight, $age, $color)
        {
            $this->weight = $weight;
            $this->age = $age;
            $this->color = $color;
        }

        public function getInfo()
        {
            return "Вес: $this->weight, Возраст: $this->age, Окрас: $this->color";
        }
    }

    class Lion extends Animal
    {
        public $maneLength;

        public function __construct($weight, $age, $color, $maneLength)
        {
            parent::__construct($weight, $age, $color);
            $this->maneLength = $maneLength;
        }

        public function getManeInfo()
        {
            return "Длина гривы: $this->maneLength";
        }
    }

    class Rabbit extends Animal
    {
        public $earLength;

        public function __construct($weight, $age, $color, $earLength)
        {
            parent::__construct($weight, $age, $color);
            $this->earLength = $earLength;
        }

        public function getEarInfo()
        {
            return "Длина уха: $this->earLength";
        }
    }

    class Wolf extends Animal
    {
        public $packSize;

        public function __construct($weight, $age, $color, $packSize)
        {
            parent::__construct($weight, $age, $color);
            $this->packSize = $packSize;
        }

        public function getPackInfo()
        {
            return "Длина хвоста: $this->packSize";
        }
    }
    $lion = new Lion(200, 5, "Золотой", 30);
    $rabbit = new Rabbit(2, 1, "Белый", 10);
    $wolf = new Wolf(50, 3, "Серый", 30);

    echo "Характеристика о льве:" . "<br>" . $lion->getInfo() . "<br>";
    echo $lion->getManeInfo() . "<br><br>";
    echo "Характеристика о кролике:" . "<br>" . $rabbit->getInfo() . "<br>";
    echo $rabbit->getEarInfo() . "<br><br>";
    echo "Характеристика о волке:" . "<br>" . $wolf->getInfo() . "<br>";
    echo $wolf->getPackInfo() . "<br><br>";
    ?>
</body>
</html>