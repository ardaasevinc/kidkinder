@extends('backend/b-base')
@section('baslik')
    Site Ayarları Düzenleme
@endsection
@section('content')




    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Genel Ayarları</h5>

            <!-- General Form Elements -->
            <form>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Site Başlığı</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Meta Açıklama</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Meta Kelimeler</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Site Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Site Logo</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Site Favicon</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                </div>
        </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">iletişim Numarası</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">E-Posta Adresi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Adres Bilgisi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Facebook url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Instagram Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">X Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Linkedn Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Youtube Url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Anahtar Kelimeler</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Google Analytics Id</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Google Search Console Verification Code</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>








                <div class="row mb-3">

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                        <button type="reset" class="btn btn-secondary">Temizle</button>
                    </div>
                </div>




            </form><!-- End General Form Elements -->

        </div>
    </div>








@endsection
