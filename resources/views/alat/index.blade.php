@extends('fe.master')
@section('content')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Tools List</h1>
                <a href="/home" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="#" class="h5 text-white">Tools</a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Tools List</h5>
            <h1 class="mb-0">List of Items & Conditions</h1>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle shadow-sm" style="background: #fff; border-radius: 10px; overflow: hidden; margin-bottom: 1px;">
                <thead class="table-primary text-center align-middle">
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>MACHINE NAME</th>
                        <th>CAPACITY</th>
                        <th>TOTAL / CONDITION</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Turning Machine</td>
                        <td>625 mm x 1000 mm</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Turning Machine</td>
                        <td>450 mm x 1000 mm</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Turning Machine</td>
                        <td>285 mm x 1200 mm</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Milling Machine</td>
                        <td>800 mm</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Drill Milling Machine</td>
                        <td>600 mm</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Scrap Machine</td>
                        <td>600 mm</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Drilling Machine</td>
                        <td>16 mm</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Hand Drill</td>
                        <td>16 mm</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Travo Welding Machine</td>
                        <td>200 A</td>
                        <td>4 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Argon Welding Machine</td>
                        <td>200 A</td>
                        <td>3 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Co2 Welding Machine</td>
                        <td>200 A</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Hand Grinder</td>
                        <td>4 Inch</td>
                        <td>5 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Cutting Grinder</td>
                        <td>16 Inch</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>LPG Cutting Blender</td>
                        <td>-</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Metal Sawing Machine</td>
                        <td>16 Inch</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>Table Grinder</td>
                        <td>8 Inch</td>
                        <td>2 Unit / Good</td>
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
                        <th>NAME OF MEASURING INSTRUMENT</th>
                        <th>SPECIFICATION</th>
                        <th>TOTAL / CONDITION</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Digital Caliper</td>
                        <td>150 mm. Mitutoyo</td>
                        <td>4 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Digital Caliperl</td>
                        <td>300 mm, Mitutoyo</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Micro Meter</td>
                        <td>-</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hole Gauge</td>
                        <td>-</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Dial Gauge</td>
                        <td>Mitutoyo</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Steel Ruller</td>
                        <td>150, 300, 600 mm</td>
                        <td>2 Unit / Good</td>
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
                        <th>TRANSPORTATION</th>
                        <th>SPECIFICATION</th>
                        <th>TOTAL / CONDITION</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Pickup truck</td>
                        <td>Panther</td>
                        <td>1 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Motorcycle</td>
                        <td>-</td>
                        <td>2 Unit / Good</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mini Bus</td>
                        <td>Toyota & Honda</td>
                        <td>2 Unit / Good</td>
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