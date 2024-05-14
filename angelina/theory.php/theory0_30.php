<?php
    // Ошибки бывают трех типов: notice, warning и fatal.

    // Давайте включим вывод всех ошибок:
        error_reporting(E_ALL);
        ini_set('display_errors', 'on'); 
    
    // На выложенном в интернет сайте вывод ошибок лучше отключать. Делается это вот так:
        error_reporting(0);
        ini_set('display_errors', 'off'); 

    // Вот пример однострочного комментария:
                // комментарий
    // Вот пример многострочного комментария:
                /*
                    комментарий
                    комментарий
                */
    
    // Значение переменной не является чем-то жестко привязанным к ней. Мы можем свободно записывать какие-то данные в переменную, прочитывать их, потом еще что-то записывать - и так далее.
            $a = 1;  // записываем 
                в переменную значение 1 
            echo $a; // выведет 1
            
            $a = 2;  // записываем 
                теперь значение 2, затирая 
                значение 1 
            echo $a; // выведет 2

    // Математические операции PHP имеют такой же приоритет, как в обычной математике. То есть в начале выполняется умножение и деление, а потом уже сложение и вычитание.
        $a = 2 * 2 + 3;
        echo $a; // выведет 7 (результат 4 + 3) 

    // Умножение и деление имеют равный приоритет и выполняются по очереди слева направо.
        $a = 8 / 2 * 4;
        echo $a; // выведет 16 (результат 4 * 4)

    // Если же переставить знаки местами, то вначале выполнится умножение, а потом деление:
        $a = 8 * 2 / 4;
        echo $a; // выведет 4 (результат 16 / 4)
    
    // При желании вы можете указывать приоритет операций с помощью круглых скобок. Давайте, например, переделаем наш код так, чтобы вначале выполнилось сложение, а уже потом умножение:
        $a = 2 * (2 + 3);
        echo $a; // выведет 10 (результат 2 * 5) 
    // Скобок может быть любое количество, в том числе и вложенных друг в друга:
        $a = 2 * (2 + 4 * (3 + 1));
        echo $a;
    // В скобки можно заключить операции, обладающие приоритетом - это не будет ошибкой. Например
        $a = (2 * 2) + 3;
        echo $a; // выведет 7 (результат 4 + 3

    // В PHP также существуют и десятичные дроби. В них целая и дробная части отделяются друг от друга точкой. Смотрите пример
        $a = 0.5;
        echo $a; // выведет 0.5
        
    // Числа могут быть отрицательными. Для этого перед числом необходимо поставить знак минус:
            $a = -1;
            echo $a; // выведет -1

            $a = 1;
            $b = -$a; // записали 
            в $b содержимое $a с обратным 
            знаком 
            echo $b;  // выведет -1

            $a = 1;
            echo -$a; // выведет -1

    // Существует специальный оператор %, с помощью которого можно найти остаток от деления одного числа на другое:
        echo 10 % 3; // выведет 1
        echo 10 % 2; // выведет 0

    // Для возведения числа в степень также существует специальный оператор **.
            echo 10 ** 3; // выведет 1000

            $a = 10;
            echo $a ** 3; // выведет 1000

            $a = 10;
            $b = 3;
            echo $a ** $b; // выведет 1000
            
    // Операция возведения в степень имеет приоритет перед умножением и делением.
        echo 2 * 2 ** 3;

    // Строки создаются с помощью кавычек:
        $str = 'abc';
        echo $str; // выведет 'abc'

        $str = "abc";
	    echo $str; // выведет 'abc'

    // Для сложения (конкатенации) строк используется оператор точка:
            $str = 'abc' . 'def'; 
            // складываем две строки 
            echo $str;         
            // выведет 'abcdef'

            $str1 = 'abc';
            $str2 = 'def';
            echo $str1 . $str2; 
            // выведет 'abcdef' 

            $str1 = 'abc';
            $str2 = 'def';
            echo $str1 . '!!!' . $str2; // выведет 'abc!!!def'

            $str1 = 'abc';
            $str2 = 'def';
            echo $str1 . ' ' . $str2; // выведет 'abc def'

            $str = 'abc';
	        echo $str . ' ' . 'def'; 
		    // выведет 'abc def'

            $str = 'abc';
	        echo $str . ' def'; 
		    // выведет 'abc def' 

    // Количество символов строки можно найти с помощью функции strlen:
        echo strlen('abcde'); 
		// выведет 5 \

        $str = 'abcde';
	    echo strlen($str); 
		// выведет 5 

        echo strlen('ab de'); 
		// выведет 5 

            // Функция strlen, как и многие другие строковые функции PHP, некорректно работает с кириллицей - она каждую кириллическую букву считает два раза:
                    echo strlen('абвгд'); 
                    // выведет 10, а не 5 

            // Поэтому для строк, которые содержат или потенциально могут содержать проблемные символы, используйте функцию mb_strlen - она будет работать корректно:
                    echo mb_strlen('абвгд'); 
                    // выведет 5 
    ?>