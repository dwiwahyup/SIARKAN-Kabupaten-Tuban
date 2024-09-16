<?php
if (!function_exists('keanggotaanJam')) {
    function keanggotaanJam($jam_kecelakaan)
    {
        $jam_kecelakaanA = $jam_kecelakaanB = $jam_kecelakaanC = $jam_kecelakaanD = 0;
        if ($jam_kecelakaan <= 6) {
            if ($jam_kecelakaan <= 0) {
                $jam_kecelakaanA = 1;
            } elseif ($jam_kecelakaan > 0 && $jam_kecelakaan < 6) {
                $jam_kecelakaanA = (6 - $jam_kecelakaan) / (6 - 0);
            } elseif ($jam_kecelakaan >= 6) {
                $jam_kecelakaanA = 0;
            }
            $kecelakaanRule = 'Dini';
        }

        if ($jam_kecelakaan >= 6 && $jam_kecelakaan < 12) {
            if ($jam_kecelakaan > 6 && $jam_kecelakaan < 9) {
                $jam_kecelakaanB = ($jam_kecelakaan - 6) / (9 - 6);
            } elseif ($jam_kecelakaan > 9 && $jam_kecelakaan < 12) {
                $jam_kecelakaanB = (12 - $jam_kecelakaan) / (12 - 9);
            } elseif ($jam_kecelakaan == 9) {
                $jam_kecelakaanB = 1;
            } elseif ($jam_kecelakaan <= 6 && $jam_kecelakaan >= 12) {
                $jam_kecelakaanB = 0;
            }
            $kecelakaanRule = 'Pagi';
        }

        if ($jam_kecelakaan >= 12 && $jam_kecelakaan < 18) {
            if ($jam_kecelakaan >= 12 && $jam_kecelakaan < 15) {
                $jam_kecelakaanC = ($jam_kecelakaan - 12) / (15 - 12);
            } elseif ($jam_kecelakaan > 15 && $jam_kecelakaan < 18) {
                $jam_kecelakaanC = (18 - $jam_kecelakaan) / (18 - 15);
            } elseif ($jam_kecelakaan == 15) {
                $jam_kecelakaanC = 1;
            } elseif ($jam_kecelakaan <= 12 && $jam_kecelakaan >= 18) {
                $jam_kecelakaanC = 0;
            }
            $kecelakaanRule = 'Siang Sore';
        }

        if ($jam_kecelakaan >= 18) {
            if ($jam_kecelakaan >= 18 && $jam_kecelakaan < 24) {
                $jam_kecelakaanD = ($jam_kecelakaan - 18) / (24 - 18);
            } elseif ($jam_kecelakaan >= 24) {
                $jam_kecelakaanD = 1;
            } elseif ($jam_kecelakaan <= 18) {
                $jam_kecelakaanD = 0;
            }
            $kecelakaanRule = 'Malam';
        }

        return [
            'jam_kecelakaanA' => $jam_kecelakaanA,
            'jam_kecelakaanB' => $jam_kecelakaanB,
            'jam_kecelakaanC' => $jam_kecelakaanC,
            'jam_kecelakaanD' => $jam_kecelakaanD,
            'kecelakaanRule' => $kecelakaanRule
        ];
    }
    // dd(keanggotaanJam(16.25));
}

// kondisi jalan

if (!function_exists('keanggotaanKondisiJalan')) {
    function keanggotaanKondisiJalan($kondisi_jalan)
    {
        $kondisi_jalanA = $kondisi_jalanB = $kondisi_jalanC = 0;
        if ($kondisi_jalan <= 1) {
            if ($kondisi_jalan <= 1) {
                $kondisi_jalanA = 1;
            } elseif ($kondisi_jalan > 1 && $kondisi_jalan < 2) {
                $kondisi_jalanA = (2 - $kondisi_jalan) / (2 - 1);
            } elseif ($kondisi_jalan >= 2) {
                $kondisi_jalanA = 0;
            }
            $kondisi_jalanRule = 'Lurus';
        }

        if ($kondisi_jalan > 1 && $kondisi_jalan <= 2) {
            if ($kondisi_jalan > 1 && $kondisi_jalan < 2) {
                $kondisi_jalanB = ($kondisi_jalan - 1) / (2 - 1);
            } elseif ($kondisi_jalan > 2 && $kondisi_jalan < 3) {
                $kondisi_jalanB = (3 - $kondisi_jalan) / (3 - 2);
            } elseif ($kondisi_jalan == 2) {
                $kondisi_jalanB = 1;
            } elseif ($kondisi_jalan <= 1 && $kondisi_jalan >= 3) {
                $kondisi_jalanB = 0;
            }
            $kondisi_jalanRule = 'Tikungan';
        }

        if ($kondisi_jalan > 2) {
            if ($kondisi_jalan >= 2 && $kondisi_jalan < 3) {
                $kondisi_jalanC = ($kondisi_jalan - 2) / (3 - 2);
            } elseif ($kondisi_jalan >= 3) {
                $kondisi_jalanC = 1;
            } elseif ($kondisi_jalan <= 2) {
                $kondisi_jalanC = 0;
            }
            $kondisi_jalanRule = 'Persimpangan';
        }

        return [
            'kondisi_jalanA' => $kondisi_jalanA,
            'kondisi_jalanB' => $kondisi_jalanB,
            'kondisi_jalanC' => $kondisi_jalanC,
            'kondisi_jalanRule' => $kondisi_jalanRule
        ];
    }
}

// kondisi linkungan

if (!function_exists('keanggotaanKondisiLingkungan')) {
    function keanggotaanKondisiLingkungan($kondisi_lingkungan)
    {
        $kondisi_lingkunganA = $kondisi_lingkunganB = $kondisi_lingkunganC = 0;
        if ($kondisi_lingkungan <= 1) {
            if ($kondisi_lingkungan <= 1) {
                $kondisi_lingkunganA = 1;
            } elseif ($kondisi_lingkungan > 1 && $kondisi_lingkungan < 2) {
                $kondisi_lingkunganA = (2 - $kondisi_lingkungan) / (2 - 1);
            } elseif ($kondisi_lingkungan >= 2) {
                $kondisi_lingkunganA = 0;
            }
            $kondisi_lingkunganRule = 'Lengang';
        }

        if ($kondisi_lingkungan > 1 && $kondisi_lingkungan <= 2) {
            if ($kondisi_lingkungan > 1 && $kondisi_lingkungan < 2) {
                $kondisi_lingkunganB = ($kondisi_lingkungan - 1) / (2 - 1);
            } elseif ($kondisi_lingkungan > 2 && $kondisi_lingkungan < 3) {
                $kondisi_lingkunganB = (3 - $kondisi_lingkungan) / (3 - 2);
            } elseif ($kondisi_lingkungan == 2) {
                $kondisi_lingkunganB = 1;
            } elseif ($kondisi_lingkungan <= 1 && $kondisi_lingkungan >= 3) {
                $kondisi_lingkunganB = 0;
            }
            $kondisi_lingkunganRule = 'Ramai';
        }

        if ($kondisi_lingkungan > 2) {
            if ($kondisi_lingkungan >= 2 && $kondisi_lingkungan < 3) {
                $kondisi_lingkunganC = ($kondisi_lingkungan - 2) / (3 - 2);
            } elseif ($kondisi_lingkungan >= 3) {
                $kondisi_lingkunganC = 1;
            } elseif ($kondisi_lingkungan <= 2) {
                $kondisi_lingkunganC = 0;
            }
            $kondisi_lingkunganRule = 'Padat';
        }

        return [
            'kondisi_lingkunganA' => $kondisi_lingkunganA,
            'kondisi_lingkunganB' => $kondisi_lingkunganB,
            'kondisi_lingkunganC' => $kondisi_lingkunganC,
            'kondisi_lingkunganRule' => $kondisi_lingkunganRule
        ];
    }
}

// kondisi korban
if (!function_exists('keanggotaanKondisiKecelakaan')) {
    function keanggotaanKondisiKecelakaan($kondisi_kecelakaan)
    {
        $kondisi_kecelakaanA = $kondisi_kecelakaanB = $kondisi_kecelakaanC = 0;
        if ($kondisi_kecelakaan <= 1) {
            if ($kondisi_kecelakaan <= 1) {
                $kondisi_kecelakaanA = 1;
            } elseif ($kondisi_kecelakaan > 1 && $kondisi_kecelakaan < 2) {
                $kondisi_kecelakaanA = (2 - $kondisi_kecelakaan) / (2 - 1);
            } elseif ($kondisi_kecelakaan >= 2) {
                $kondisi_kecelakaanA = 0;
            }
            $kondisi_kecelakaanRule = 'Ringan';
        }

        if ($kondisi_kecelakaan > 1 && $kondisi_kecelakaan <= 2) {
            if ($kondisi_kecelakaan > 1 && $kondisi_kecelakaan < 2) {
                $kondisi_kecelakaanB = ($kondisi_kecelakaan - 1) / (2 - 1);
            } elseif ($kondisi_kecelakaan > 2 && $kondisi_kecelakaan < 3) {
                $kondisi_kecelakaanB = (3 - $kondisi_kecelakaan) / (3 - 2);
            } elseif ($kondisi_kecelakaan == 2) {
                $kondisi_kecelakaanB = 1;
            } elseif ($kondisi_kecelakaan <= 1 && $kondisi_kecelakaan >= 3) {
                $kondisi_kecelakaanB = 0;
            }
            $kondisi_kecelakaanRule = 'Sedang';
        }

        if ($kondisi_kecelakaan > 2) {
            if ($kondisi_kecelakaan >= 2 && $kondisi_kecelakaan < 3) {
                $kondisi_kecelakaanC = ($kondisi_kecelakaan - 2) / (3 - 2);
            } elseif ($kondisi_kecelakaan >= 3) {
                $kondisi_kecelakaanC = 1;
            } elseif ($kondisi_kecelakaan <= 2) {
                $kondisi_kecelakaanC = 0;
            }
            $kondisi_kecelakaanRule = 'Berat';
        }

        return [
            'kondisi_kecelakaanA' => $kondisi_kecelakaanA,
            'kondisi_kecelakaanB' => $kondisi_kecelakaanB,
            'kondisi_kecelakaanC' => $kondisi_kecelakaanC,
            'kondisi_kecelakaanRule' => $kondisi_kecelakaanRule
        ];
    }
}

if (!function_exists('hitungLuasMoment')) {
    function hitungLuasMoment($tingkat_kerawanan, $minRule)
    {
        if ($tingkat_kerawanan == 'Tidak rawan') {
            // Keanggotaaan berdasarkan fungsi keanggotaan
            $keanggotaan = 20;
            $keanggotaanAkhir = 30;

            // Batas bawah dan batas atas dari fungsi keanggotaan
            $batasBawah = 0;
            $batasAtas = $keanggotaanAkhir - $minRule * ($keanggotaanAkhir - $keanggotaan);

            // Menghitung luas
            $luasA1 = $batasAtas * $minRule;
            $luasA2 = (($keanggotaanAkhir - $batasAtas) * $minRule) / 2;
            $totalLuas = $luasA1 + $luasA2;

            // Menghitung moment
            $momentSatu = ($minRule / 2) * pow($batasAtas, 2) - ($minRule / 2) * pow($batasBawah, 2);
            $momentDua = (3 / 2) * pow($keanggotaanAkhir, 2) - (0.1 / 3) * pow($keanggotaanAkhir, 3) - ((3 / 2) * pow($batasAtas, 2) - (0.1 / 3) * pow($batasAtas, 3));
            $totalMoment = $momentSatu + $momentDua;
        } elseif ($tingkat_kerawanan == 'Rawan') {
            // Keanggotaaan berdasarkan fungsi keanggotaan
            $keanggotaan = 30;
            $keanggotaanTengah = 50;
            $keanggotaanAkhir = 70;

            // Batas bawah dan batas atas dari fungsi keanggotaan
            $batasBawah = $minRule * ($keanggotaanTengah - $keanggotaan) + $keanggotaan;
            $batasAtas = $keanggotaanAkhir - $minRule * ($keanggotaanAkhir - $keanggotaanTengah);

            // Menghitung luas
            $luasA1 = (($batasBawah - $keanggotaan) * $minRule) / 2;
            $luasA2 = ($batasAtas - $batasBawah) * $minRule;
            $luasA3 = (($keanggotaanAkhir - $batasAtas) * $minRule) / 2;
            $totalLuas = $luasA1 + $luasA2 + $luasA3;

            // Menghitung moment
            $momentSatu = (0.05 / 3) * pow($batasBawah, 3) - (1.5 / 2) * pow($batasBawah, 2) - ((0.05 / 3) * pow($keanggotaan, 3) - (1.5 / 2) * pow($keanggotaan, 2));
            $momentDua = ($minRule / 2) * pow($batasAtas, 2) - ($minRule / 2) * pow($batasBawah, 2);
            $momentTiga = (3.5 / 2) * pow($keanggotaanAkhir, 2) - (0.05 / 3) * pow($keanggotaanAkhir, 3) - ((3.5 / 2) * pow($batasAtas, 2) - (0.05 / 3) * pow($batasAtas, 3));
            $totalMoment = $momentSatu + $momentDua + $momentTiga;
        } elseif ($tingkat_kerawanan == 'Sangat Rawan') {
            // Keanggotaaan berdasarkan fungsi keanggotaan
            $keanggotaan = 70;
            $keanggotaanAkhir = 90;

            // Batas bawah dan batas atas dari fungsi keanggotaan
            $batasBawah = $minRule * ($keanggotaanAkhir - $keanggotaan) + $keanggotaan;
            $batasAtas = 100;

            // Menghitung luas
            $luasA1 = (($batasBawah - $keanggotaan) * $minRule) / 2;
            $luasA2 = ($batasAtas - $batasBawah) * $minRule;
            $totalLuas = $luasA1 + $luasA2;

            // Menghitung moment
            $momentSatu = (0.05 / 3) * pow($batasBawah, 3) - (3.5 / 2) * pow($batasBawah, 2) - ((0.05 / 3) * pow($keanggotaan, 3) - (3.5 / 2) * pow($keanggotaan, 2));
            $momentDua = ($minRule / 2) * pow($batasAtas, 2) - ($minRule / 2) * pow($batasBawah, 2);
            $totalMoment = $momentSatu + $momentDua;
        }

        return [
            'keanggotaan' => $keanggotaan ?? 0,
            'keanggotaanTengah' => $keanggotaanTengah ?? 0,
            'keanggotaanAkhir' => $keanggotaanAkhir ?? 0,
            'batasBawah' => $batasBawah ?? 0,
            'batasAtas' => $batasAtas ?? 0,
            'luasA1' => $luasA1 ?? 0,
            'luasA2' => $luasA2 ?? 0,
            'luasA3' => $luasA3 ?? 0,
            'momentSatu' => $momentSatu ?? 0,
            'momentDua' => $momentDua ?? 0,
            'momentTiga' => $momentTiga ?? 0,
            'totalLuas' => $totalLuas ?? 0,
            'totalMoment' => $totalMoment ?? 0,
        ];
    }
}


//kepadatan Dalam
// if (!function_exists('keanggotaanKepadatanDalam')) {
//     function keanggotaanKepadatanDalam($kepadatan)
//     {
//         $kepadatanA = $kepadatanB = $kepadatanC = 0;
//         if ($kepadatan <= 6867) {
//             if ($kepadatan <= 6688) {
//                 $kepadatanA = 1;
//             } elseif ($kepadatan > 6688 && $kepadatan < 6867) {
//                 $kepadatanA = (6867 - $kepadatan) / (6867 - 6688);
//             } elseif ($kepadatan >= 6867) {
//                 $kepadatanA = 0;
//             }
//             $kepadatanRule = 'Tidak Padat';
//         }

//         if ($kepadatan >= 6867 && $kepadatan < 7225) {
//             if ($kepadatan > 6867 && $kepadatan < 7046) {
//                 $kepadatanB = ($kepadatan - 6867) / (7046 - 6867);
//             } elseif ($kepadatan > 7046 && $kepadatan < 7225) {
//                 $kepadatanB = (7225 - $kepadatan) / (7225 - 7046);
//             } elseif ($kepadatan == 7046) {
//                 $kepadatanB = 1;
//             } elseif ($kepadatan <= 6867 && $kepadatan >= 7225) {
//                 $kepadatanB = 0;
//             }
//             $kepadatanRule = 'Ramai';
//         }

//         if ($kepadatan >= 7225) {
//             if ($kepadatan >= 7225 && $kepadatan < 7405) {
//                 $kepadatanC = ($kepadatan - 7225) / (7405 - 7225);
//             } elseif ($kepadatan >= 7405) {
//                 $kepadatanC = 1;
//             } elseif ($kepadatan <= 7225) {
//                 $kepadatanC = 0;
//             }
//             $kepadatanRule = 'Padat';
//         }

//         return [
//             'kepadatanA' => $kepadatanA,
//             'kepadatanB' => $kepadatanB,
//             'kepadatanC' => $kepadatanC,
//             'kepadatanRule' => $kepadatanRule
//         ];
//     }
// }

// //intensitas Dalam
// if (!function_exists('keanggotaanIntensitasDalam')) {
//     function keanggotaanIntensitasDalam($intensitas_kecelakaan)
//     {
//         $intensitas_kecelakaanA = $intensitas_kecelakaanB = $intensitas_kecelakaanC = 0;
//         if ($intensitas_kecelakaan <= 670) {
//             if ($intensitas_kecelakaan <= 654) {
//                 $intensitas_kecelakaanA = 1;
//             } elseif ($intensitas_kecelakaan > 654 && $intensitas_kecelakaan < 670) {
//                 $intensitas_kecelakaanA = (670 - $intensitas_kecelakaan) / (670 - 654);
//             } elseif ($intensitas_kecelakaan >= 670) {
//                 $intensitas_kecelakaanA = 0;
//             }
//             $intensitas_kecelakaanRule = 'Sangat Jarang';
//         }

//         if ($intensitas_kecelakaan >= 670 && $intensitas_kecelakaan < 705) {
//             if ($intensitas_kecelakaan > 670 && $intensitas_kecelakaan < 689) {
//                 $intensitas_kecelakaanB = ($intensitas_kecelakaan - 670) / (689 - 670);
//             } elseif ($intensitas_kecelakaan > 689 && $intensitas_kecelakaan < 705) {
//                 $intensitas_kecelakaanB = (705 - $intensitas_kecelakaan) / (705 - 689);
//             } elseif ($intensitas_kecelakaan == 689) {
//                 $intensitas_kecelakaanB = 1;
//             } elseif ($intensitas_kecelakaan <= 670 && $intensitas_kecelakaan >= 705) {
//                 $intensitas_kecelakaanB = 0;
//             }
//             $intensitas_kecelakaanRule = 'Jarang';
//         }

//         if ($intensitas_kecelakaan >= 705) {
//             if ($intensitas_kecelakaan >= 705 && $intensitas_kecelakaan < 724) {
//                 $intensitas_kecelakaanC = ($intensitas_kecelakaan - 705) / (724 - 705);
//             } elseif ($intensitas_kecelakaan >= 724) {
//                 $intensitas_kecelakaanC = 1;
//             } elseif ($intensitas_kecelakaan <= 705) {
//                 $intensitas_kecelakaanC = 0;
//             }
//             $intensitas_kecelakaanRule = 'Sering';
//         }

//         return [
//             'intensitas_kecelakaanA' => $intensitas_kecelakaanA,
//             'intensitas_kecelakaanB' => $intensitas_kecelakaanB,
//             'intensitas_kecelakaanC' => $intensitas_kecelakaanC,
//             'intensitas_kecelakaanRule' => $intensitas_kecelakaanRule
//         ];
//     }
// }

// //kepadatan luar
// if (!function_exists('keanggotaanKepadatanLuar')) {
//     function keanggotaanKepadatanLuar($kepadatan)
//     {
//         $kepadatanA = $kepadatanB = $kepadatanC = 0;
//         if ($kepadatan <= 6000) {
//             if ($kepadatan <= 5563) {
//                 $kepadatanA = 1;
//             } elseif ($kepadatan > 5563 && $kepadatan < 6000) {
//                 $kepadatanA = (6000 - $kepadatan) / (6000 - 5563);
//             } elseif ($kepadatan >= 6000) {
//                 $kepadatanA = 0;
//             }
//             $kepadatanRule = 'Tidak Padat';
//         }

//         if ($kepadatan >= 6000 && $kepadatan < 6500) {
//             if ($kepadatan > 6000 && $kepadatan < 6250) {
//                 $kepadatanB = ($kepadatan - 6000) / (6250 - 6000);
//             } elseif ($kepadatan > 6250 && $kepadatan < 6500) {
//                 $kepadatanB = (6500 - $kepadatan) / (6500 - 6250);
//             } elseif ($kepadatan == 6250) {
//                 $kepadatanB = 1;
//             } elseif ($kepadatan <= 6000 && $kepadatan >= 6500) {
//                 $kepadatanB = 0;
//             }
//             $kepadatanRule = 'Ramai';
//         }

//         if ($kepadatan >= 6500) {
//             if ($kepadatan >= 6500 && $kepadatan < 6862) {
//                 $kepadatanC = ($kepadatan - 6500) / (6862 - 6500);
//             } elseif ($kepadatan >= 6862) {
//                 $kepadatanC = 1;
//             } elseif ($kepadatan <= 6500) {
//                 $kepadatanC = 0;
//             }
//             $kepadatanRule = 'Padat';
//         }

//         return [
//             'kepadatanA' => $kepadatanA,
//             'kepadatanB' => $kepadatanB,
//             'kepadatanC' => $kepadatanC,
//             'kepadatanRule' => $kepadatanRule
//         ];
//     }
// }

// //intensitas Luar
// if (!function_exists('keanggotaanIntensitasLuar')) {
//     function keanggotaanIntensitasLuar($intensitas_kecelakaan)
//     {
//         $intensitas_kecelakaanA = $intensitas_kecelakaanB = $intensitas_kecelakaanC = 0;
//         if ($intensitas_kecelakaan <= 57) {
//             if ($intensitas_kecelakaan <= 55) {
//                 $intensitas_kecelakaanA = 1;
//             } elseif ($intensitas_kecelakaan > 55 && $intensitas_kecelakaan < 57) {
//                 $intensitas_kecelakaanA = (57 - $intensitas_kecelakaan) / (57 - 55);
//             } elseif ($intensitas_kecelakaan >= 57) {
//                 $intensitas_kecelakaanA = 0;
//             }
//             $intensitas_kecelakaanRule = 'Sangat Jarang';
//         }

//         if ($intensitas_kecelakaan >= 57 && $intensitas_kecelakaan < 63) {
//             if ($intensitas_kecelakaan > 57 && $intensitas_kecelakaan < 61) {
//                 $intensitas_kecelakaanB = ($intensitas_kecelakaan - 57) / (61 - 57);
//             } elseif ($intensitas_kecelakaan > 61 && $intensitas_kecelakaan < 63) {
//                 $intensitas_kecelakaanB = (63 - $intensitas_kecelakaan) / (63 - 61);
//             } elseif ($intensitas_kecelakaan == 61) {
//                 $intensitas_kecelakaanB = 1;
//             } elseif ($intensitas_kecelakaan <= 57 && $intensitas_kecelakaan >= 63) {
//                 $intensitas_kecelakaanB = 0;
//             }
//             $intensitas_kecelakaanRule = 'Jarang';
//         }

//         if ($intensitas_kecelakaan >= 63) {
//             if ($intensitas_kecelakaan >= 63 && $intensitas_kecelakaan < 67) {
//                 $intensitas_kecelakaanC = ($intensitas_kecelakaan - 63) / (67 - 63);
//             } elseif ($intensitas_kecelakaan >= 67) {
//                 $intensitas_kecelakaanC = 1;
//             } elseif ($intensitas_kecelakaan <= 63) {
//                 $intensitas_kecelakaanC = 0;
//             }
//             $intensitas_kecelakaanRule = 'Sering';
//         }

//         return [
//             'intensitas_kecelakaanA' => $intensitas_kecelakaanA,
//             'intensitas_kecelakaanB' => $intensitas_kecelakaanB,
//             'intensitas_kecelakaanC' => $intensitas_kecelakaanC,
//             'intensitas_kecelakaanRule' => $intensitas_kecelakaanRule
//         ];
//     }
// }