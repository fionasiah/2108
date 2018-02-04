<!-- Done by Nur Iffahizzati 16SIC048C, Mohamed Ashik 16SIC044J -->
<?php

// Overall sum of Gas for previous month
$gasMonthlyUsage = "SELECT SUM(Price) AS SumOfGas FROM gas WHERE StatementID = '1234567890'";
$gasMonthlySum = $conn->prepare($gasMonthlyUsage);
$gasMonthlySum->execute();

foreach ($gasMonthlySum->fetchAll() as $gasEach) {
    $gasSum = $gasEach['SumOfGas'];
}

// Overall sum of Water for previous month
$waterMonthlyUsage = "SELECT SUM(Price) AS SumOfWater FROM water WHERE StatementID = '1234567890'";
$waterMonthlySum = $conn->prepare($waterMonthlyUsage);
$waterMonthlySum->execute();

foreach ($waterMonthlySum->fetchAll() as $waterEach) {
    $waterSum = $waterEach['SumOfWater'];
}

// Overall sum of Electricity for previous month
$electricityMonthlyUsage = "SELECT SUM(Price) AS SumOfElectricity FROM electricity WHERE StatementID = '1234567890'";
$electricityMonthlySum = $conn->prepare($electricityMonthlyUsage);
$electricityMonthlySum->execute();

foreach ($electricityMonthlySum->fetchAll() as $electricityEach) {
    $electricitySum = $electricityEach['SumOfElectricity'];
}

$totalSumPrev = $gasSum + $waterSum + $electricitySum;

$data = array($waterSum, $electricitySum, $gasSum);


// Overall sum of Electricity for current month
$electSumMonth = "SELECT SUM(Price) As sumMonth FROM electricity WHERE MONTH(Date) = 11";
$electSumMonths = $conn->prepare($electSumMonth);
$electSumMonths->execute();

foreach ($electSumMonths->fetchAll() as $electSumMonthEach) {
    $eSumMonth = $electSumMonthEach['sumMonth'];
}

$waterSumMonth = "SELECT SUM(Price) As sumMonthW FROM water WHERE MONTH(Date) = 11";
$waterSumMonths = $conn->prepare($waterSumMonth);
$waterSumMonths->execute();

foreach ($waterSumMonths->fetchAll() as $waterSumMonthEach) {
    $wSumMonth = $waterSumMonthEach['sumMonthW'];
}

$gasSumMonth = "SELECT SUM(Price) As sumMonthG FROM gas WHERE MONTH(Date) = 11";
$gasSumMonths = $conn->prepare($gasSumMonth);
$gasSumMonths->execute();

foreach ($gasSumMonths->fetchAll() as $gasSumMonthEach) {
    $gSumMonth = $gasSumMonthEach['sumMonthG'];
}

$totalSumMonth = $eSumMonth + $wSumMonth + $gSumMonth;
$expectedExpenditure = round(($totalSumMonth * 1.88) + 13.22, 2);

$eAvg = $eSumMonth / 31;
$wAvg = $wSumMonth / 31;
$gAvg = $gSumMonth / 31;

$totalMonthSum = $eSumMonth + $wSumMonth + $gSumMonth;
$totalAvgSum = $eAvg + $wAvg + $gAvg;

// Average % of Water, Electricity, Gas
$waterAvgPercentage = round(($wAvg / $totalAvgSum) * 100);
$electAvgPercentage = round(($eAvg / $totalAvgSum) * 100);
$gasAvgPercentage = round(($gAvg / $totalAvgSum) * 100);

//echo 'Water: ' . $waterAvgPercentage . '<br>';
//echo 'Electricity: ' . $electAvgPercentage . '<br>';
//echo 'Gas: ' . $gasAvgPercentage . '<br>';
//print json_encode($data);
// -----------------------------------------------------------------------------
// Progress bar
// -----------------------------------------------------------------------------
// Current Day Usage - Water
$dayUsage = "SELECT * FROM water WHERE Date = '2017-11-16'";
$dayWaterUsage = $conn->prepare($dayUsage);
$dayWaterUsage->execute();

foreach ($dayWaterUsage->fetchAll() as $usageEach) {
    $wDaySum = $usageEach['Price']; // Current Day Electricity Amount
}

// Current Day Usage - Electricity
$dayUsage = "SELECT * FROM electricity WHERE Date = '2017-11-16'";
$dayElectUsage = $conn->prepare($dayUsage);
$dayElectUsage->execute();

foreach ($dayElectUsage->fetchAll() as $usageEach) {
    $eDaySum = $usageEach['Price']; // Current Day Electricity Amount
}

// Current Day Usage - Gas
$dayUsage = "SELECT * FROM gas WHERE Date = '2017-11-16'";
$dayGasUsage = $conn->prepare($dayUsage);
$dayGasUsage->execute();

foreach ($dayGasUsage->fetchAll() as $usageEach) {
    $gDaySum = $usageEach['Price']; // Current Day Electricity Amount
}

$totalSum = $wDaySum + $eDaySum + $gDaySum;

// % of Water, Electricity, Gas
$waterPercentage = round(($wDaySum / $totalSum) * 100);
$electPercentage = round(($eDaySum / $totalSum) * 100);
$gasPercentage = round(($gDaySum / $totalSum) * 100);

//echo 'Water: ' . $waterPercentage . '<br>';
//echo 'Electricity: ' . $electPercentage . '<br>';
//echo 'Gas: ' . $gasPercentage . '<br>';
// -----------------------------------------------------------------------------
// Line graph
// -----------------------------------------------------------------------------
$lineData = array(0.2, 59.1, 75.3, 20.4, 20.5, 55.3, 40.5, 55.5, 64.3, round(($totalSumPrev), 2), round($totalMonthSum, 2));

//echo 'Oct: ' . round($totalSumPrev, 2) . '<br>';
//echo 'Nov: ' . round($totalMonthSum, 2);
?>