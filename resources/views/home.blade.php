@extends('layouts.master')

@section('content')
    @include('partials.slideshow')
    <div class="container">
        <main class="flex-container ">
            <div class="content">
                <article>
                    <p>Nama: Rafa Aldhino Fathin</p>
                    <p>No hp : 081318975088</p>
                    <p>Jurusan : RPL</p>
                    <p>NIS: 0033384913</p>
                    <p>NISN: 0033384913</p>
                    <p>Tempat, tgl lahir : Brebes, 03 Oktober 2005</p>
                    <p>Alamat : RT 13 RW 01, Wanatirta, Kecamatan Paguyangan, Kabupaten Brebes, Jawa Tengah 52276</p>
                </article>
            </div>
            <aside>
                <img src="{{ asset('img/profile.png') }}" alt="profile">
                <p>Rafa Aldhino Fatin</p>
            </aside>
        </main>
    </div>
    <br>
    <br>
    <br>
@endsection
