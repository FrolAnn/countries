$("#add_country_btn").click(function() {
    console.log("ajax");

    // Получение введенных данных
    var country = document.getElementById("country").value;
    var capital = document.getElementById("capital").value;

    var data = {
        country : country,
        capital : capital
    };

    console.log(JSON.stringify(data));
    // Отправка AJAX запроса на добавление данных в таблицу
    $.ajax({
        type:"POST",
        url:"db.php",
        data: {data: data},
        error:function(){
            alert('Ошибка! Не удалось добавить данные в базу данных!');
        },
        success:function(data) {
            var result = JSON.parse(data);
            console.log(result);
            if(result['result'] == 'success') {
                console.log(true);
                addRow(country, capital);
            }
            else if(result['result'] == 'fail') {
                alert('Ошибка! Не удалось добавить данные в базу данных!');
            }
        }
    });
});

// Добавление новой строки в таблицу
function addRow(country, capital){
    console.log(country);
    var tbody = document.getElementById("countries").getElementsByTagName("TBODY")[0];
    var row = document.createElement("TR");
    var td1 = document.createElement("TD");
    td1.appendChild(document.createTextNode(country));
    var td2 = document.createElement("TD");
    td2.appendChild (document.createTextNode(capital));
    row.appendChild(td1);
    row.appendChild(td2);
    tbody.appendChild(row);
}