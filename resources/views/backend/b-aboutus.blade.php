@extends('backend/b-base')
@section('baslik')
    Hakkımızda
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hakkımızda</h5>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- General Form Elements -->
            <form action="{{ route('aboutus.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <label for="baslik1" class="col-sm-2 col-form-label">Başlık1</label>
                    <div class="col-sm-10">
                        <input type="text" name="baslik1" class="form-control" id="baslik1" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="baslik2" class="col-sm-2 col-form-label">Başlık2</label>
                    <div class="col-sm-10">
                        <input type="text" name="baslik2" class="form-control" id="baslik2" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="aciklama" class="col-sm-2 col-form-label">Açıklama</label>
                    <div class="col-sm-10">
                        <textarea name="aciklama" class="form-control" id="aciklama" style="height: 100px" required></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="goruntul1" class="col-sm-2 col-form-label">Görsel1</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="goruntul1" id="goruntul1">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="goruntul2" class="col-sm-2 col-form-label">Görsel2</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="goruntul2" id="goruntul2">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="buton_metni" class="col-sm-2 col-form-label">Buton Metni</label>
                    <div class="col-sm-10">
                        <input type="text" name="buton_metni" class="form-control" id="buton_metni" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tarih" class="col-sm-2 col-form-label">Tarih</label>
                    <div class="col-sm-10">
                        <input type="date" name="tarih" class="form-control" id="tarih" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kisa_metin1" class="col-sm-2 col-form-label">Kısa Metin 1</label>
                    <div class="col-sm-10">
                        <input type="text" name="kisa_metin1" class="form-control" id="kisa_metin1" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kisa_metin2" class="col-sm-2 col-form-label">Kısa Metin 2</label>
                    <div class="col-sm-10">
                        <input type="text" name="kisa_metin2" class="form-control" id="kisa_metin2" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="kisa_metin3" class="col-sm-2 col-form-label">Kısa Metin 3</label>
                    <div class="col-sm-10">
                        <input type="text" name="kisa_metin3" class="form-control" id="kisa_metin3" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Gönder</button>
                        <button type="reset" class="btn btn-secondary">Temizle</button>
                    </div>
                </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
@endsection
