<?php 
if (!function_exists('tanggal')) {
    function tanggal($tgl) {
        $bulan = [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];
        $pecah = explode("-", $tgl);
        $newDate = $pecah[2].' '.$bulan[$pecah[1]].' '.$pecah[0];
        return $newDate;
    }
}
?>