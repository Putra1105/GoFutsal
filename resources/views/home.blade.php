@extends('layouts.main')

@section('content')
    <style>
        @font-face {
            font-family: 'Plus Jakarta Sans';
            src: url('fonts/PlusJakartaSans-Medium.ttf');
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .back-image {
            position: absolute;
            z-index: -1;
            width: 100%;
            height: 100%;
            filter: blur(2px);
        }
    </style>
    <div class="container mt-4">
        <div class="row justify-content-center" style="min-height: 90vh">
            <div class="col-md-7">
                <div class="card bg-blue-gojek">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="header" src="{{ asset('images/GoFutsalTransparent.png') }}"
                                style="width: 210px; margin-top:20px;">
                            <h3 class="mt-3 text-white">Tata Cara Penyewaan Lapangan</h3>
                        </div>
                        <ol class="mt-4 text-white">
                            <li>Pilih jenis lapangan yang tersedia (Indoor/Outdoor).</li>
                            <li>Apabila ingin menyewa sepatu atau kostum, Anda dapat memilih opsi penyewaan.</li>
                            <li>Isi formulir penyewaan dengan lengkap dan benar.</li>
                            <li>Lakukan pembayaran sesuai dengan petunjuk yang diberikan.</li>
                            <li>Tunggu konfirmasi dari pihak penyewa.</li>
                        </ol>
                        
                        <div class="card-group mt-4">
                            <div class="card bg-green-gojek">
                                <div class="card-header text-center text-white">
                                    Biaya Sewa Lapangan - <span><strong>Indoor</strong></span>
                                </div>
                                <div class="card-body text-white">
                                    <ul>
                                        <li>Indoor Reguler : Rp 300.000/Jam</li>
                                        <li>Indoor Matras : Rp 250.000/Jam</li>
                                        <li>Indoor Rumput : Rp 200.000/Jam</li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="card bg-green-gojek">
                                <div class="card-header text-center text-white">
                                    Biaya Sewa Lapangan - <span><strong>Outdoor</strong></span>
                                </div>
                                <div class="card-body text-white">
                                    <ul>
                                        <li>Outdoor Reguler : Rp 250.000/Jam</li>
                                        <li>Outdoor Matras : Rp 200.000/Jam</li>
                                        <li>Outdoor Rumput : Rp 150.000/Jam</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="card mt-4 bg-green-gojek">
                            <div class="card-header text-white">
                                Biaya Sewa Tambahan
                            </div>
                            <div class="card-body text-white">
                                <p><strong>Sewa Sepatu:</strong> Rp 50.000/Jam</p>
                                <p><strong>Sewa Kostum:</strong> Rp 45.000/Jam</p>
                            </div>
                        </div>

                        <!-- Modal Konfirmasi Keluar -->
                        <div id="confirmModal" class="modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin keluar?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button id="konfirmasiKeluarButton" type="button" class="btn btn-danger">Ya, Keluar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Konfirmasi Keluar -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#keluarButton').click(function() {
                $('#confirmModal').modal('show');
            });

            $('#konfirmasiKeluarButton').click(function() {
                // Tambahkan kode di sini untuk menangani keluar
                // Misalnya, mengarahkan pengguna ke halaman keluar
            });
        });
    </script>
@endsection
