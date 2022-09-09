<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi</title>
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}" /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/javascript.js')}}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/b57b408446.js" crossorigin="anonymous"></script>

    <!-- Roboto Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!-- Monsterrat Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
</head>

@include('Layouts.navbar')
@include('Layouts.header')
<body>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 text-center p-3">
                <h3 class="title">Konsultasi Taman</h3>
                <p class="subtitle">Klik dibawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</p>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <div class="card pt-4 pl-3 pr-3 pb-4" style="background-color: white; border: 2px solid #EBEBEB; border-radius: 5px;">
                    maaf ka kalender nya ga keluar gatau kenapa :(
                </div>
            </div>
            <div class="col-7">
                <div class="card pt-4 pl-3 pr-3 pb-4" style="background-color: white; border: 2px solid #EBEBEB; border-radius: 5px;">
                    <div class="col-12 text-center">
                        <h5 class="card-title mb-2">Thursday</h5>
                        <p class="card-subtitle">October 8, 2022</p>
                    </div>
                    <div class="col-12 text-left">
                        <h5 class="card-title mb-2">Pilih Waktu</h5>
                        <p class="card-subtitle">Durasi Konsultasi 30 Menit</p>
                    </div>
                    <div class="row m-0 mt-3">
                        <div class="col-6">
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">09.00</button>
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">10.00</button>
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">11.00</button>
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">12.00</button>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">13.00</button>
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">14.00</button>
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">15.00</button>
                            <button type="button" class="btn btn-outline-primary mb-2" style="width: 100%;">16.00</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-0 mt-4">
            <div class="col-12 p-5" style="background-color: white; border-radius: 5px; border: 2px solid #EBEBEB;">
                <h4>Informasi Data Diri</h4>
                <div class="row mt-3">
                    <div class="col-6">
                        <label class="font-weight-bold">Nama Lengkap</label>
                        <input style="font-size: 15px; font-weight: 500;" type="text" class="input-form-ibal form-control text-left bg-color-form-login" placeholder="Alamat Lengkap Kamu">
                    </div>
                    <div class="col-6">
                        <label class="font-weight-bold">Nomor HP</label>
                        <input style="font-size: 15px; font-weight: 500;" type="text" inputmode="numeric" oninput="this.value = this.value.replace(/\D+/g, '')" maxlength=13 class="input-form-ibal form-control text-left bg-color-form-login" placeholder="+62 852 3232 2323">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label style="font-size: 14px; font-weight: 600;">Alamat</label>
                    </div>
                    <div class="col-10">
                        <div class="card p-4" style="border-radius: 10px; border: 2px solid #1B6A19">
                            <p></p>
                            <div class="col-12 text-right">
                                <p class="m-0" style="color: #1B6A19; text-decoration: underline; font-size: 13px;">Tambah Alamat Baru</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <h4 style="font-weight: 600;">Informasi Konsultasi Taman</h4>
                <label class="font-weight-bold mt-3">Lahan Taman</label>
                <p>Pilih jumlah lahan taman yang akan dibuat</p>
                <div class="row">
                    <div class="col-12">
                        <button type="button" class="btn btn-outline-success mr-2">1 Lahan Taman</button>
                        <button type="button" class="btn btn-outline-success mr-2">2 Lahan Taman</button>
                        <button type="button" class="btn btn-outline-success mr-2">Lebih dari 2 Lahan Taman</button>
                    </div>
                </div>

                <label class="font-weight-bold mt-5">Tema Taman</label>
                <p>Pilih Tema Yang Akan Dibuat</p>
                <div class="row m-0">
                    <div class="col-8 pt-3" style="background-color: #FFF2D1; border-radius : 10px;">
                        <p style="font-size: 12px;"><b>Catatan:</b> Jika anda belum memiliki inspirasi tema taman maka anda bisa melewati tahapan
                        ini, konsultan kamu akan memberikan rekomendasi terbaik untuk taman anda.</p>
                    </div>
                </div>
                <div class="row m-0 mt-3" style="justify-content: center;">
                    <div class="card mr-3" style="width: 20rem; border-radius: 10px;">
                        <img class="card-img-top" src="https://dlh.bulelengkab.go.id/public/uploads/konten/kenali-hutan-dan-fungsinya-76.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn-pilih">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mr-3" style="width: 20rem; border-radius: 10px;">
                        <img class="card-img-top" src="https://dlh.bulelengkab.go.id/public/uploads/konten/kenali-hutan-dan-fungsinya-76.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn-pilih">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 20rem; border-radius: 10px;">
                        <img class="card-img-top" src="https://dlh.bulelengkab.go.id/public/uploads/konten/kenali-hutan-dan-fungsinya-76.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn-pilih">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label class="font-weight-bold mt-5">Estimasi Ukuran Taman</label>
                <div class="row mt-3">
                    <div class="col-12">
                        <button type="button" class="btn btn-outline-success mr-2"><10m2</button>
                        <button type="button" class="btn btn-outline-success mr-2">11-20m2</button>
                        <button type="button" class="btn btn-outline-success mr-2">21-30m2</button>
                        <button type="button" class="btn btn-outline-success mr-2">31-40m2</button>
                        <button type="button" class="btn btn-outline-success mr-2">41-50m2</button>
                        <button type="button" class="btn btn-outline-success mr-2">51-60m2</button>
                        <button type="button" class="btn btn-outline-success mr-2">>100m2</button>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-right">
                        <button type="button" class="btn btn-outline-success mr-2">Batal</button>
                        <button type="button" class="btn btn-outline-success mr-2">Oke</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<script>
    $(document).ready(function() {
        $('#event_date').datepicker({
            "startDate": new Date(),
            "minDate": new Date(),
            "opens": "center"
        }, function(start, end, label) {
            $('#start_date').val(start.format('DD/MM/YYYY'));
            $('#end_date').val(end.format('DD/MM/YYYY'));
        });
    });
</script>

</html>