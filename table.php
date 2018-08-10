<?php
if($_POST['data']) {
    $pdo = connectToDB();

    // Получаем данные от клиента
    $data = $_POST['data'];
    $country = $data['country'];
    $capital = $data['capital'];

    // Добавляем данные в базу данных
    $stmt = $pdo->prepare('insert into COUNTRY (`NAME`, `CAPITAL`) values (:NAME, :CAPITAL)');
    $stmt->bindValue('NAME', $country);
    $stmt->bindValue('CAPITAL', $capital);
    $isOk = $stmt->execute();

    // Отправляем сообщение о результате запроса
    if($isOk)
        $result = ['result'=>'success'];
    else
        $result = ['result'=>'fail'];

    echo json_encode($result);
    exit();
}

// Подключение к БД
function connectToDB(){
    try {
        $pdo = new PDO(
            'mysql:host=localhost;dbname=COUNTRIES',
            'root',
            ''
        );
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    $pdo->exec("SET NAMES UTF8");
    return $pdo;
}
