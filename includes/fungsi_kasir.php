<?php
declare(strict_types=1);

function hitungSubtotal(float $harga, int $jumlah): float
{
    return round($harga * $jumlah, 2);
}

function hitungDiskon(
    float $subtotal,
    float $persenDiskon
): float {
    return round($subtotal * $persenDiskon / 100, 2);
}

function hitungPajak(
    float $dasarPajak,
    float $persenPajak
): float {
    return round($dasarPajak * $persenPajak / 100, 2);
}

function formatRupiah(float $nilai): string
{
    return 'Rp' . number_format($nilai, 2, ',', '.');
}

function escape(string $teks): string
{
    return htmlspecialchars(
        $teks,
        ENT_QUOTES | ENT_SUBSTITUTE,
        'UTF-8'
    );
}

function bacaInput(string $namaField): string
{
    $nilai = $_POST[$namaField] ?? '';

    return is_string($nilai) ? trim($nilai) : '';
}