<?php

$date = date('l, d M Y');

function tanggal($date)
{
    echo "$date";
}

tanggal("$date");


$days = [
    'Sunday'    => 'Minggu',
    'Monday'    => 'Senin',
    'Tuesday'   => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday'  => 'Kamis',
    'Friday'    => 'Jumat',
    'Saturday'  => 'Sabtu',
];

$months = [
    'January'   => 'Januari',
    'February'  => 'Februari',
    'March'     => 'Maret',
    'April'     => 'April',
    'May'       => 'Mei',
    'June'      => 'Juni',
    'July'      => 'Juli',
    'August'    => 'Agustus',
    'September' => 'September',
    'October'   => 'Oktober',
    'November'  => 'November',
    'December'  => 'Desember',
];

$timestamp = time();
$dayweek = $days[date('l', $timestamp)];
$monthweek = date('d', $timestamp);
$month = $months[date('F', $timestamp)];
$year = date('Y', $timestamp);

$date = "$dayweek, $monthweek $month $year";

function tanggal1($date)
{
    echo "$date";
}

echo " vs ";
tanggal($date);
