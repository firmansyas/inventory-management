<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2/18/2018
 * Time: 10:16 PM
 */

namespace App\Helpers;


class Rupiah
{
    public static function convert_to_rupiah($angka)
    {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }

    public static function convert_to_number($rupiah)
	{
		return intval(preg_replace('/,.*|[^0-9]/', '', $rupiah));
	}

	public static function terbilang($x) {
        $angka = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
        if ($x < 12)
            return " " . $angka[$x];
        elseif ($x < 20)
            return self::terbilang($x - 10) . " belas";
        elseif ($x < 100)
            return self::terbilang($x / 10) . " puluh" . self::terbilang($x % 10);
        elseif ($x < 200)
            return "seratus" . self::terbilang($x - 100);
        elseif ($x < 1000)
            return self::terbilang($x / 100) . " ratus" . self::terbilang($x % 100);
        elseif ($x < 2000)
            return "seribu" . self::terbilang($x - 1000);
        elseif ($x < 1000000)
            return self::terbilang($x / 1000) . " ribu" . self::terbilang($x % 1000);
        elseif ($x < 1000000000)
            return self::terbilang($x / 1000000) . " juta" . self::terbilang($x % 1000000);
    }
}