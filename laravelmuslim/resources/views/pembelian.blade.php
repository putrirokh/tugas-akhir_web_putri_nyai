@extends('layouts.index')
@section('content')

@php
$no = 1;
$p1 = ['nama'=>'Budi', 'produk'=>'TV','jumlah'=>2];
$p2 = ['nama'=>'Siti', 'produk'=>'AC','jumlah'=>1];
$p3 = ['nama'=>'Dewi', 'produk'=>'Kulkas','jumlah'=>3];
$ar_pelanggan = [$p1,$p2,$p3];
$ar_judul = ['No','Nama','Produk','Jumlah','Harga Satuan','Harga Kotor','Diskon','PPN','Harga Bayar'];
@endphp
<h3 align="center">Daftar Pembelian Produk Toko XYZ</h3>

{{--
tugas:
1. tentukan harga satuan pakai switch case => tv = 2jt, ac=3jt, kulkas=4jt
2. tentukan harga kotor (harsat x jumlah beli)
3. Diskon pake if else dan operator and
    jika beli kulkas minimal beli 3, diskon 30%dari harga kotor
    jika beli AC minimal jumlah beli 2 , diskon 20% dari harga kotor
    Selain itu semua dapat diskon dari harga kotor
4. tentukan ppn 10% (harga kotor - diskon X 10%)
5. harga bayar (harga kotor-diskon + ppn)
--}}

<table border="1" cellpadding="10" align="center">
  <thead>
    <tr>
    @foreach($ar_judul as $jdl)
      <th>{{ $jdl }}</th>
    @endforeach 
    </tr>
  </thead>
  <tbody>
   @foreach ($ar_pelanggan as $pelanggan)

     @switch  ($pelanggan['produk'])
        @case ('TV') @php $hargasat = 2000000  @endphp @break
        @case ('AC') @php $hargasat = 3000000  @endphp @break
        @case ('Kulkas') @php $hargasat = 4000000  @endphp @break
        @default @php $hargasat = 0 ;  @endphp
    @endswitch

    @php
    $hargakotor = $hargasat * $pelanggan['jumlah'];
    @endphp

    @if($pelanggan['produk'] == 'AC' &&  $pelanggan['jumlah'] >=2)
     @php $diskon= $hargakotor * 0.2; @endphp
        
    @elseif($pelanggan['produk'] =='Kulkas' &&  $pelanggan['jumlah'] >=3)
    @php $diskon= $hargakotor * 0.3; @endphp
    
    @else
    @php $diskon = $hargakotor * 0.1; @endphp
    
    @endif

    @php
    $ppn = ($hargakotor - $diskon) * 0.1;

    $hargabayar = ($hargakotor - $diskon) + $ppn;
    $warna = ($no % 2 == 0) ? 'beige' : 'khaki';
    @endphp
   
  <tr bgcolor="{{ $warna }}">
              <td>{{ $no++}}</td>
              <td>{{ $pelanggan['nama'] }}</td>
              <td>{{ $pelanggan['produk'] }}</td>
              <td>{{ $pelanggan['jumlah'] }}</td>
              <td>Rp.{{ number_format($hargasat, 0, ',','.' )}}</td>
              <td>Rp.{{ number_format($hargakotor, 0, ',', '.') }}</td>
              <td>Rp.{{ number_format($diskon, 2, ',','.') }}</td>
              <td>Rp.{{ number_format($ppn, 2, ',','.') }}</td>
              <td>Rp.{{ number_format($hargabayar, 2, ',','.') }}</td>
          </tr>    
      @endforeach
  </tbody>
</table>

  @endsection