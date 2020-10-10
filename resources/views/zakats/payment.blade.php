@extends('layouts.app')

@push('stylesheet')
<link rel="stylesheet" type="text/css" href="{{ asset('css/donation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/alms.css') }}">
@endpush

@section('content')
<div class="container">
  <section class="detail-payment-box">
    <div class="content-box container zakat-form-box" style="padding-top: 0">
      <br>
      <div id="zakat-form">
        <div align="center" style="width: 100%">
          <h4 class="content-title" style="margin-bottom: 0">Data Zakat</h4>
        </div>
        <br>
        <div class="form-group">
          <div class="row">
            <div class="col-12">
              <form id="muzakki-data">
                {{ csrf_field() }}
                <label style="text-transform: capitalize;">Nama : </label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text" style="font-size: .94rem"><i class="fa fa-user"></i></div>
                  </div>
                <input type="text" class="form-control" name="name" id="name" value="{{ $data['name'] }}" placeholder="Nama Muzakki">
                </div>

                <label style="text-transform: capitalize;">Email : </label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text" style="font-size: .94rem"><i class="fa fa-envelope"></i></div>
                  </div>
                <input type="email" class="form-control" name="email" id="email" value="{{ $data['email'] }}" autocomplete="off" placeholder="contoh@gmail.com">
                </div>

                <label style="text-transform: capitalize;">Telephone : </label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text" style="font-size: .94rem"><i class="fa fa-phone"></i></div>
                  </div>
                <input type="number" class="form-control" name="telephone" id="telephone" value="{{ $data['phone'] }}" placeholder="No Telephone">
                </div>

                <label style="text-transform: capitalize;">Alamat : </label>
                <input type="text" class="form-control" name="name" id="address" value="{{ $data['address'] }}" placeholder="Alamat Lengkap Muzakki">
                
                <label style="text-transform: capitalize;" class="mt-3">{{ strtr( $data['akad'] ,'-',' ') }} : </label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text" style="font-size: .94rem">Rp</div>
                  </div>
                  <input type="number" class="form-control" name="amount" id="amount" value="{{ $data['kadar-zakat'] * $data['qty'] }}" readonly>
                </div>

                <label style="text-transform: capitalize;" class="mt-1"> Metode Pembayaran : </label>
                <select class="form-control" id="paymentMethod" onchange="fee_calculation(this.value)">
                    <option> Bank Transfer </option>
                    <option> Credit Card </option>
                    <option> Gopay </option>
                    <option> Akulaku </option>
                    <option> Lain-Lainnya </option>
                </select>
                <input type="hidden" id="administration_fee" value="4000">
                <br>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="irigasi" id="defaultUnchecked" onclick="confirmation_check(this.checked, '#pay-button')">
                    <label class="custom-control-label text-justify content-desc" for="defaultUnchecked">
                      Bismillahirrahmannirrahim, Saya dengan ikhlas memberikan sebagian harta halal,
                      untuk didayagunakan dan disalurkan kepada yang berhak sesuai dengan tuntunan syariat Islam
                    </label>
                </div>
              </form>

              <button class="btn main-btn btn-success single-btn text-light full-width" id="pay-button" disabled="disabled">Bayar Zakat</button>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('script')
<script id="midtrans-script" type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-environment="sandbox" data-client-key="{{ \Config::get('values.client_key') }}"></script>
<script src="{{ asset('js/mdb.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>

<script type="text/javascript">
  document.getElementById('pay-button').onclick = function(){       
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $.ajax({
      type:'POST',
      url:'/zakat/transaction-token',
      data:{
        name : $('#name').val(),
        email : $('#email').val(),
        telephone : $('#telephone').val(),
        address : $('#address').val(),
        payment_method : $('#paymentMethod').val(),
        administration_fee : $('#administration_fee').val(),
        qty : "{{ $data['qty'] }}",
        kadarZakat : "{{ $data['kadar-zakat'] }}",
        akad : "{{ $data['akad'] }}"
      },
      success:function(data, xhr) {
        if(data.snapToken != null){
          snap.pay(data.snapToken , {
            onSuccess: function(result){      
              $.ajax({
                type:'POST',
                url:'/zakat/save-transaction',
                data:{
                  zakat : data.zakat,
                },
                success:function(data){
                  alert(data.message)
                }
              })
            },
            onPending: function(result){
            },
            onError: function(result){
            }

          })
        }else{
        alert(data.th)
        }
      },
      error:function(data){
        alert(data.snapToken)
      } 
    })
  }
</script>
@endpush