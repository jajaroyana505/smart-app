<?php

function get_hari($date)
{
    $time = strtotime($date);
    $result = date("w", $time);

    switch ($result) {
        case 1:
            return "Senin";
        case 2:
            return "Selasa";
        case 3:
            return "Rabu";
        case 4:
            return "Kamis";
        case 5:
            return "Jum'at";
        case 6:
            return "Sabtu";
        case 0:
            return "Minggu";
    }
}

function format_tanggal($date)
{
    $time = strtotime($date);
    $tanggal = date("d", $time);
    $bulan = [
        null,
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];
    $bulan = $bulan[date("n", $time)];
    $tahun = date("Y", $time);
    return "$tanggal $bulan $tahun";
}
