<?php

/* Подключение к серверу MySQL */
$link = mysqli_connect(
    'localhost',  /* Хост, к которому мы подключаемся */
    'root',       /* Имя пользователя */
    '',   /* Используемый пароль */
    'sergio');     /* База данных для запросов по умолчанию */

if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

/* Посылаем запрос серверу */
if ($result = mysqli_query($link, 'SELECT * FROM photograph')) {

    print("Очень крупные города:\n");

    /* Выборка результатов запроса */
    while( $row = mysqli_fetch_assoc($result) ){
        printf("%s %s\n", $row['id'], $row['text']);
    }

    /* Освобождаем используемую память */
    mysqli_free_result($result);
}

/* Закрываем соединение */
mysqli_close($link);
?>
index
