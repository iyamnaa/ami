<div class="campaign-info-donation">
    <div class="content-box">
        <div>
            <h5>Donasi Terkumpul</h5>
            <h5 class="text-">Rp{{ $donations->sum('amount') }}</h5>
            <div class="donation-list">
            {{ Form::open(array('route' => 'donations.payment','method' => 'get')) }}
                <label>Masukkan Jumlah Donasi : </label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="font-size: .94rem">Rp</div>
                    </div>
                    <input type="text" class="form-control currency" placeholder="0" name="amount" autocomplete="off">
                </div>
                <input type="hidden" name="campaign_id" value="{{ $campaign->id }}">
                <input type="submit" class="btn main-btn single-btn btn-orange text-light form mt-3" value="Berikan Donasi">
            {{ Form::close() }}                
            <div class="donation-list-info" align="left">
                @foreach($donations as $donation)
                <div class="donation-list-user">
                    <div class="row">
                    <div class="col-3 mid-content">
                        <i class="fa fa-user user-icon"></i>
                    </div>
                    <div class="col-9">
                        <div class="row donation-list-info-name">
                        @if(!($donation->as_anonymous))
                            {{ $donation->name }}
                        @else
                            Anonymous
                        @endif
                        </div>
                        <div class="row donation-list-info-amount">
                        {{ $donation->amount }}
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div>