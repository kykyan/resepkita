@extends('guest.master')

@section('content')

<section class="detail-content">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide carousel-fade mb-5" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="frontend/images/makanan/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/makanan/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="frontend/images/makanan/1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h1 class="mb-2">
            Nama Masakan
        </h1>
        <h2 class="text-capitalize mb-4">
            Ditulis oleh : Aditya firmansyah - 22 November 2020
        </h2>
        <div class="detail-resep">
            <!-- <div class="row"> -->
            <h2 class="head">Deskripsi</h2>
            <h2 class="body mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, autem
                quisquam aliquam porro iusto officiis assumenda rem aperiam quam est molestiae in nemo atque neque
                magni, qui expedita laboriosam totam.Quo, voluptate sint consequatur mollitia adipisci rem incidunt
                corporis veritatis necessitatibus ipsam assumenda officia reiciendis sapiente iste eligendi
                repudiandae dolores exercitationem hic laborum! Unde accusantium voluptates doloremque sunt in
                alias.0</h2>

            <h2 class="head">Alat Masak</h2>
            <h2 class="body mb-4">
                <ul>
                    <li>Penggorengan</li>
                    <li>Pancy</li>
                    <li>Spatula</li>
                    <li>Kompor</li>
                </ul>
            </h2>

            <h2 class="head">Bahan</h2>
            <h2 class="body mb-4">
                <ul>
                    <li>Penggorengan</li>
                    <li>Pancy</li>
                    <li>Spatula</li>
                    <li>Kompor</li>
                </ul>
            </h2>

            <h2 class="head">Cara Masak</h2>
            <h2 class="body mb-4">
                <ol type="1">
                    <li>Penggorengan</li>
                    <li>Pancy</li>
                    <li>Spatula</li>
                    <li>Kompor</li>
                </ol>
            </h2>
            <!-- </div> -->
        </div>
        <hr>
        <div class="comment mb-3">
            <h2 class="font-weight-bold mb-3"><i class="fas fa-comment pr-2"></i>Komentar</h2>
            <!-- the comment -->
            <div class="the-comment mb-4">
                <h2 class="font-weight-normal">Aditya Firmansyah</h2>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum placeat repellat fugiat
                    voluptates animi ea molestias dolorem dolor possimus error corporis voluptas nulla ipsa aperiam,
                    vel magni nisi praesentium dolore.</h3>
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Comment" aria-label="Comment" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fas fa-paper-plane pr-2"></i>Send</button>
                </div>
                </div>
        </div>
    </div>
</section>
<!-- content -->

@endsection