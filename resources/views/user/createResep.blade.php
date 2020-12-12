@extends('guest.master')

@section('content')

<section class="tulis-resep mb-3">
    <div class="container">
        <h1 class="text-center">Tulis Resep Baru</h1>
        <form>
            <div class="form-group">
                <label for="image">Masukan Gambar/Foto Makanan</label>
                <input type="file" class="form-control-file mb-2" id="image">
                <input type="file" class="form-control-file mb-2" id="image">
                <input type="file" class="form-control-file mb-2" id="image">
            </div>
            <div class="form-group">
                <label for="nama-makanan">Nama Makanan</label>
                <input type="text" class="form-control" id="nama-makanan" placeholder="EX : Soto Banjar">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" rows="4" placeholder="Deskripsikan makanan yang anda bagikan resepnya"></textarea>
                </div>
                <div class="form-group">
                <label for="alat-masak">Alat Masak</label>
                <textarea class="form-control" id="alat-masak" rows="4" placeholder="Beritahukan alat - alat masak yang anda gunakan"></textarea>
                </div>
                <div class="form-group">
                <label for="bahan">Bahan - Bahan</label>
                <textarea class="form-control" id="bahan" rows="4" placeholder="Sebutkan bahan-bahan yang anda gunakan dalam memasak"></textarea>
                </div>
                <div class="form-group">
                <label for="cara-masak">Cara Masak</label>
                <textarea class="form-control" id="cara-masak" rows="4" placeholder="Tuliskan secara detail bagaimana cara memasaka makanann tersebut"></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane pr-2"></i>Kirim Resep</button>
        </form>
    </div>
</section>

@endsection