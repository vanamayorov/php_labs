<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/mustard-ui.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>PHP Basics</title>
</head>

<body>
<div class="container">
    <h1>Базовий синтаксис PHP</h1>

    <section>
        <p><b>Функції виводу даних</b></p>
        <p>
            <? echo "Hello world!" ?>
        </p>
        <p>
            <?= "Hello world!" ?>
        </p>

        <p>
            <? print 100 ?>
        </p>

        <pre>
            <? print_r([1, 2, 3, 4]) ?>
        </pre>

        <pre>
            <? var_dump([1, 2, 3, 4]) ?>
        </pre>
    </section>

    <section>
        <p><b>Змінні</b></p>
        <p>
            <?
                $name = "John";
                $surname = "Doe";
                $age = 40;
                $cash = 144.4;
                $is_married = true;
                define('SEX', 'Male');

                $Hello = "World";
                $a = "Hello";

                $foo = "1";
                $foo *= 2;
                $foo = $foo * 1.3;
                $foo = 5 * "10 Little Piggies";


                echo $name . " " . $surname;
            ?>
        </p>

        <pre>
            <? var_dump((int) false) ?>
        </pre>

        <p>
            <?= $$a ?>
        </p>

        <p>
            <?= $age ?>
        </p>

        <p>
            <?= "Status: " . ($is_married ? "Married" : "Not married") ?>
        </p>

        <p>
            <?= "Sex: " . SEX ?>
        </p>
    </section>

    <section>
        <p><b>Строки</b></p>
            <?
                $string = "Hello world";
                $words_arr = explode(" ", $string);
                $languages_arr = ["PHP", "C++", "JavaScript"];
                $languages_str = implode(", ", $languages_arr);
            ?>
        <p>
            <?= strlen($string) ?>
        </p>

        <p>
            <?= strtoupper($string) ?>
        </p>

        <p>
            <?= strtolower($string) ?>
        </p>

        <p>
            <?= strrev($string) ?>
        </p>

        <p>
            <?= ucwords($string) ?>
        </p>

        <p>
            <?= strpos($string, 'H') ?>
        </p>

        <p>
            <?= str_replace("world", 'Everyone', $string) ?>
        </p>

        <p>
            <?= substr($string, 3) ?>
        </p>

        <p>
            <? printf("%s likes to %s", 'John', 'code') ?>
        </p>
        <p>
            <? var_dump($words_arr) ?>
        </p>
        <p>
            <?= $languages_str ?>
        </p>
    </section>

    <section>
        <p><b>Масиви</b></p>
            <?
                $fruits = ['apple', 'pineapple', 'banana'];
                $subjects = array('Math', 'Chemistry', 'Physics');

                $famous_scientists = [
                        [
                                "name" => "Boris",
                                "surname" => "Paton"
                        ],
                        [
                            "name" => "Sergey",
                            "surname" => "Korolev"
                        ],
                        [
                            "name" => "Victor",
                            "surname" => "Glushkov"
                        ]
                ];

                $styles = [
                        "odd" => "background-color:white;width:25px;height:25px",
                        "even" => "background-color:black;width:25px;height:25px"
                ];

                $person = [
                        "name" => "Steve",
                        "surname" => "Jobs",
                        "citizenship" => "American"
                ];
            ?>

        <pre>
            <?= $fruits[0] ?>
        </pre>
    </section>

    <section>
        <p><b>Цикли</b></p>
        <div class="display-flex">
            <table class="custom-table">
                <tbody>
                <? for($i = 0; $i < 8; $i++): ?>
                    <tr>
                        <? for($j = 0; $j < 8; $j++): ?>
                            <? if(($i + $j) % 2 === 0): ?>
                                <td style=<?= $styles["even"] ?>></td>
                            <?else: ?>
                                <td style=<?= $styles["odd"] ?>></td>
                            <?endif ?>
                        <? endfor ?>
                    </tr>
                <? endfor ?>
                </tbody>
            </table>

            <ul>
                <? foreach ($famous_scientists as $famous_scientist): ?>
                    <li><?= $famous_scientist['name'] . " " . $famous_scientist['surname']?></li>
                <? endforeach ?>
            </ul>

            <div>
                <? foreach ($person as $key => $value): ?>
                    <p>
                        <?= "$key - $value" ?>
                    </p>
                <? endforeach?>
            </div>
        </div>

    </section>

    <section>
        <p><b>Функції</b></p>
        <?
            $chars = range('a', 'z');
            $numbers = range(0, 9);

            function generatePassword($len, ...$arrs)
            {
                if($len <= 0) return false;

                $readyPass = '';
                $tempArr = array_merge(...$arrs);
                shuffle($tempArr);

                for ($i = 1; $i <= $len; $i++) {
                    $readyPass .= $tempArr[rand(0, count($tempArr) - 1)];
                }

                return $readyPass;
            }
        ?>

        <pre>
            <?= generatePassword(5, $chars, $numbers) ?>
        </pre>
    </section>

    <section>
        <p><b>Функції масивів</b></p>
            <?
                $fruits[] = 'grape';
                array_push($fruits, 'lemon');
                array_unshift($fruits, 'mango');
                array_pop($fruits);
                array_shift($fruits);
                unset($fruits[1]);

                $chunked_arr = array_chunk($fruits, 2);

                $a = ['green', 'red', 'yellow'];
                $b = ['avocado', 'apple', 'banana'];

                $c = array_combine($a, $b);
                $keys = array_keys($c);
                $values = array_values($c);
                $flipped = array_flip($c);

                $newNumbers = array_map(function($number) {
                    return "Number $number";
                } , $numbers);

                $lessThan5 = array_filter($numbers, function($number) {
                    return $number < 5;
                });

                $sum = array_reduce($lessThan5, function($carry, $item) {
                    return $carry + $item;
                }, 0)
            ?>
        <pre>
            <? var_dump(in_array('apple' ,$fruits)) ?>
        </pre>
        <pre>
            <? print_r($fruits); ?>
        </pre>
        <pre>
            <? print_r($chunked_arr); ?>
        </pre>
        <pre>
            <? print_r($c); ?>
        </pre>
        <pre>
            <? print_r($flipped); ?>
        </pre>
        <pre>
            <? print_r($keys); ?>
        </pre>
        <pre>
            <? print_r($values); ?>
        </pre>
        <pre>
            <?= print_r($newNumbers); ?>
        </pre>
        <pre>
            <? print_r($lessThan5); ?>
        </pre>
        <pre>
            <? print_r($sum); ?>
        </pre>
    </section>
</div>

</body>

</html>