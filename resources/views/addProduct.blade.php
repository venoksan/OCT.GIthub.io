@extends('layout')
@section('content')
    <title>Tambah Produk</title>
    <div class="container mt-4">
        <div class="header text-center fst-italic">
            <h3>Tambah Produk Baru</h3>
            <p>wajib di isi jgn ada yang kosong</p>
        </div>
        <div class="form">
            <form action="{{ url('/addProduct/store') }}" method="POST">
                {{ csrf_field() }}
                {{-- Nama Product --}}
                <div class="row mb-3">
                    <label for="NamaProduct" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Nama Produk</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="text" class="form-control" name="NamaProduct" id="NamaProduct"
                            placeholder="NamaProduct" required
                            oninvalid="this.setCustomValidity('Tidak Boleh Kosong')"
                            oninput="this.setCustomValidity('')" />
                        @if ($errors->has('NamaProduct'))
                            <div class="text-danger">
                                {{ $errors->first('NamaProduct') }}
                            </div>
                        @endif
                    </div>
                </div>
                {{-- expired --}}
                <div class="row mb-3">
                    <label for="Kadaluarsa" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Kadaluarsa</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="text" class="form-control" name="Kadaluarsa" id="Kadaluarsa" placeholder="MM/YY" required
                               oninvalid="this.setCustomValidity('Tanggal Kadaluarsa Tidak Boleh Kosong')" 
                               oninput="this.setCustomValidity('')"
                               pattern="(0[1-9]|1[0-2])\/?([0-9]{2})"
                               title="Format yang benar adalah MM/YY, contoh: 12/24 atau 01/25"/>
                        @if ($errors->has('kadaluarsa'))
                            <div class="text-danger">
                                {{ $errors->first('Kadaluarsa') }}
                            </div>
                        @endif
                    </div>
                </div>
                
                {{--Jenis--}}
                <div class="row mb-3">
                    <label for="Jenis" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Jenis Produk</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <select name="Jenis" class="form-control" placeholder="Jenis Produk">
                            <option value="Makanan & Minuman">Makanan & Minuman</option>
                            <option value="Produk Kesehatan & Kecantikan">Produk Kesehatan & Kecantikan</option>
                        </select>
                        @if ($errors->has('Jenis'))
                            <div class="text-danger">
                                {{ $errors->first('Jenis') }}
                            </div>
                        @endif
                    </div>
                </div>
                {{-- jumlah --}}
                <div class="row mb-3">
                    <label for="Jumlah" class="col-form-label col-sm-4 col-md-3 col-xl-2"><strong>Jumlah</strong></label>
                    <div class="col-sm-8 col-md-9 col-xl-10">
                        <input type="number" class="form-control" min="0" max="1000" name="Jumlah" id="Jumlah"
                            placeholder="Jumlah" autocomplete="off" required
                            oninvalid="this.setCustomValidity('kapasitas max 1000')"
                            oninput="this.setCustomValidity('')"/>
                        @if ($errors->has('Jumlah'))
                            <div class="text-danger">
                                {{ $errors->first('Jumlah') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3 justify-content-end mx-3 my-4">
                    <div class="col-sm-8 col-md-9 col-xl-10" style="text-align:end;">
                        <input type="submit" class="btn btn-primary mx-3" value="Tambah">
                        <a type="button" class="btn btn-secondary border" href="/">
                            Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection