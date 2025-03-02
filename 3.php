<?php
function getDaysInMonth($month) {

    if ($month < 1 || $month > 12) {
        return "Ошибка: Пожалуйста, введите номер месяца от 1 до 12.";
    }

    if ($month === 2) {
        return 28; // Февраль
    }

    if ($month === 4 || $month === 6 || $month === 9 || $month === 11) {
        return 30; // Месяцы с 30 днями
    }

    return 31;
}

$month = 4; 

$days = getDaysInMonth($month);

echo "Количество дней в месяце $month: $days.";
