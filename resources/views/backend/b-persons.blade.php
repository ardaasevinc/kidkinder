@extends('backend/b-base')
@section('baslik')
    Hakkımızda
@endsection
@section('content')




    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Kişiler veya Partnerler</h5>

            <!-- General Form Elements -->
            <form>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Ana Başlık 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Ana Başlık 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Görsel1</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Başlık</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Alt Başlık</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Görsel1</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Buton Metni</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tarih</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control">
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
