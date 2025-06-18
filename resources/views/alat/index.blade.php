@extends('fe.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">List Alat</h1>
                <a href="/home" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Alat</a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Daftar Alat</h5>
            <h1 class="mb-0">List Barang & Kondisi</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle shadow-sm" style="background: #fff; border-radius: 10px; overflow: hidden; margin-bottom: 1px;">
                <thead class="table-primary text-center align-middle">
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>NAMA MESIN</th>
                        <th>KAPASITAS</th>
                        <th>JUMLAH / KONDISI</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Mesin Bubut</td>
                        <td>625 mm x 1000 mm</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mesin Bubut</td>
                        <td>450 mm x 1000 mm</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mesin Bubut</td>
                        <td>285 mm x 1200 mm</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mesin Milling</td>
                        <td>800 mm</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mesin Bor Milling</td>
                        <td>600 mm</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mesin Skrap</td>
                        <td>600 mm</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Mesin Bor </td>
                        <td>16 mm</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Mesin Bor Tangan</td>
                        <td>16 mm</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Mesin Las Travo</td>
                        <td>200 A</td>
                        <td>4 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Mesin Las Argon</td>
                        <td>200 A</td>
                        <td>3 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Mesin Las Co2</td>
                        <td>200 A</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Gerinda Tangan</td>
                        <td>4 Inch</td>
                        <td>5 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Gerinda Potong</td>
                        <td>16 Inch</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Blender Potong Elpiji</td>
                        <td>-</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Mesin Gergaji Besi</td>
                        <td>16 Inch</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Gerinda Meja</td>
                        <td>8 Inch</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
    <div class="container py-5">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle shadow-sm" style="background: #fff; border-radius: 10px; overflow: hidden;">
                <thead class="table-primary text-center align-middle">
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>NAMA ALAT UKUR</th>
                        <th>SPESIFIKASI</th>
                        <th>JUMLAH / KONDISI</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Caliper Digital</td>
                        <td>150 mm. Mitutoyo</td>
                        <td>4 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Caliper Digital</td>
                        <td>300 mm, Mitutoyo</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Micro Meter</td>
                        <td>-</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hole Gauge</td>
                        <td>-</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Dial Gauge</td>
                        <td>Mitutoyo</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Steel Ruller</td>
                        <td>150, 300, 600 mm</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
    <div class="container py-5">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle shadow-sm" style="background: #fff; border-radius: 10px; overflow: hidden;">
                <thead class="table-primary text-center align-middle">
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>TRANSPORTASI</th>
                        <th>SPESIFIKASI</th>
                        <th>JUMLAH / KONDISI</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Mobil Pick Up</td>
                        <td>Panther</td>
                        <td>1 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Sepeda Motor</td>
                        <td>-</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mobil Mini Bus</td>
                        <td>Toyota & Honda</td>
                        <td>2 Unit / Baik</td>
                    </tr>
                    <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('client')
    @include('fe.client')
@endsection