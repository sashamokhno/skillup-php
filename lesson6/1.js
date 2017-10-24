'use strict';

function ask() {
    var day,
        dayIsCorrect=false;



        day =prompt('Какой сегодня день недели (от 1 до 7)?');

        switch (day) {
            case '1':alert("Выходные кончились");break;
            case '2':
            case '3':
            case '4':alert('Сегодня на работу');break;
            case '5':alert('Скоро выходные');break;
            case '6':
            case '7':alert('Ура, отдыхаем');break;
            default:
                dayIsCorrect=false
                alert('Будь внимательнее!');
                ask();
        }



}
ask();
alert('Молодец');


