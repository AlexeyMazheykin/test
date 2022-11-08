<?php
function getCalendar (string $month, string $year): array
{

    $daysInCurMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $template = ["", "", "", "", "", "", "",];

    $calWeeksArr = [];
    $weeksCount = 0;
    for ($i = 1; $i <= $daysInCurMonth; $i++) {
        if ($i === 1) {
            $weekTempArr = $template;
        }
        $dayOfWeek = date("N", strtotime("$i-$year-$year"));
        $weekTempArr[$dayOfWeek - 1] = $i;
        $calWeeksArr[$weeksCount] = $weekTempArr;
        if ($dayOfWeek % 7 === 0) {
            $weeksCount++;
            $weekTempArr = $template;
        }
    }

    return $calWeeksArr;
}