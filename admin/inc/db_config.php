<?php
    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hbwebsite';

    $con = mysqli_connect($hname, $uname, $pass, $db);

    if(!$con){
        die("Не получается подключиться к базе данных".mysqli_connect_error());
    }

    // function filteration($data){
    //     // foreach($data as $key => $value){
    //     //     $data[$key] = trim($value);             // Удаляет пробелы в начале и конце строки
    //     //     $data[$key] = stripcslashes($value);    // Удаляет слэши (\), если они есть
    //     //     $data[$key] = htmlspecialchars($value); // Преобразует HTML-спецсимволы (&, <, >) в безопасный вид
    //     //     $data[$key] = strip_tags($value);       // Удаляет HTML и PHP теги
    //     // }
    //     return $data;
    // }

    function select($sql, $values, $datatype){
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare($con, $sql))
        {
            mysqli_stmt_bind_param($stmt, $datatype,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                mysqli_stmt_close($stmt);
                return $res;
            }
            else{
                mysqli_stmt_close($stmt);
                die('Запрос не может быть выполнен - Select');
            }
        }
        else{
            die('Запрос не может быть подготовлен - Select');
        }
    }
?>
