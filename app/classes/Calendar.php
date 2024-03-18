<?php

namespace app\classes;

class Calendar {

    private $year;
    private $month;
    private $day;

    public function __construct($year, $month, $day) {
        $this->year = $year;
        $this->month = $month;
        $this->day = $day;
    }

    public function generateCalendar() {
        // Crie uma matriz para os nomes dos meses
        $monthNames = array(1 => "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

        // Determine o número de dias no mês
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);

        // Determine o dia da semana do primeiro dia do mês
        $firstDay = mktime(0, 0, 0, $this->month, 1, $this->year);
        $firstDayOfWeek = date("N", $firstDay);

        // Inicialize o contador de dias do mês
        $dayOfMonth = 1;

        // Inicialize o contador do dia da semana
        $currentDayOfWeek = 1;

        // Construa a string HTML para o calendário
        $calendarHTML = "<table border='1'>";
        $calendarHTML .= "<caption>" . $monthNames[$this->month] . " " . $this->year . "</caption>";
        $calendarHTML .= "<tr><th>Seg</th><th>Ter</th><th>Qua</th><th>Qui</th><th>Sex</th><th>Sáb</th><th>Dom</th></tr>";

        // Loop para exibir as semanas do mês
        while ($dayOfMonth <= $daysInMonth) {
            $calendarHTML .= "<tr>";

            // Loop para exibir os dias da semana
            for ($i = 1; $i <= 7; $i++) {
                // Se o dia da semana atual for maior que o primeiro dia do mês e o dia do mês for menor ou igual ao número de dias no mês, exiba o dia
                if (($currentDayOfWeek >= $firstDayOfWeek || $dayOfMonth > 1) && $dayOfMonth <= $daysInMonth) {
                    if ($dayOfMonth == $this->day) {
                        $calendarHTML .= "<td style='background-color: #FFFF00;'>$dayOfMonth</td>"; // Destaque o dia atual
                    } else {
                        $calendarHTML .= "<td>$dayOfMonth</td>";
                    }
                    $dayOfMonth++;
                } else {
                    $calendarHTML .= "<td>&nbsp;</td>";
                }
                $currentDayOfWeek++;
            }

            // Reinicie o contador do dia da semana para a próxima linha
            $currentDayOfWeek = 1;

            $calendarHTML .= "</tr>";
        }

        $calendarHTML .= "</table>";

        return $calendarHTML;
    }
}


