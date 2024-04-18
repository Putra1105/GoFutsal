@extends('layouts.main')
@section('content')
  <div class="">

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

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Daftar Booking</li>
  </ol>
</nav>
<form action="{{ route('daftarbooking.index') }}" method="GET">
  <div class="form-group">
      <label for="jenis">Jenis Lapangan:</label>
      <select name="jenis" id="jenis" class="form-control">
          <option value="">Pilih Jenis</option>
          <option value="reguler">Reguler</option>
          <option value="matras">Matras</option>
          <option value="rumput">Rumput</option>
      </select>
  </div>
  <br>
  <div class="form-group">
    <label for="lokasi">Lokasi Lapangan:</label>
    <select name="lokasi" id="lokasi" class="form-control">
        <option value="">Pilih Lokasi</option>
        <option value="indoor">Indoor</option>
        <option value="outdoor">Outdoor</option>
    </select>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Filter</button>
  <!-- Tombol Reset -->
  <a href="{{ route('daftarbooking.index') }}" class="btn btn-secondary">Reset Filter</a>
</form>
<div class="card mt-4">
  <div class="card-header bg-green-gojek">
    <h3 style="padding-left: 6px; margin-top:4px;" class="text-white">Daftar Booking</h3>
  </div>

  <div class="card-body">
    <table class="table table-stripped table-bordered shadow-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Penyewa</th>
          <th>No Tlp Penyewa</th>
          <th>Jenis</th>
          <th>Lokasi</th>
          <th>Lama Sewa (jam)</th>
          <th>Mulai</th>
          <th>Selesai</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($daftarbooking as $b)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $b->name }}</td>
            <td>{{ $b->no_tlp }}</td>
            <td>{{ $b->lapangan->jenis }}</td>
            <td>{{ $b->lapangan->lokasi }}</td>
            <td>{{ $b->difference_in_hours }}</td>
            <td>{{ $b->getDateStart() }}</td>
            <td>{{ $b->getDateEnd() }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
