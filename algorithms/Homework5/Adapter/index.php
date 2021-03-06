Реализовать паттерн Адаптер для связи внешней библиотеки (классы SquareAreaLib и
CircleAreaLib) вычисления площади квадрата (getSquareArea) и площади круга
(getCircleArea) с интерфейсами ISquare и ICircle имеющегося кода. Примеры классов даны
ниже. Причём во внешней библиотеке используются для расчётов формулы нахождения через
диагонали фигур, а в интерфейсах квадрата и круга — формулы, принимающие значения
одной стороны и длины окружности соответственно.
<?php

$squareAdapter = new SquareAdapter(new SquareAreaLib);
$squareArea = $squareAdapter->squareArea(5);

$circleAdapter = new CircleAdapter(new CircleAreaLib);
$circleArea = $circleAdapter->circleArea(10);
