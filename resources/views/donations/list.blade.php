<div class="campaign-info-donation">
    <div class="content-box">
        <div>
            <h5>Donasi Terkumpul</h5>
            <h5 class="text-">Rp{{ $donations->sum('amount') }}</h5>
            <div class="donation-list">
            <div class="btn main-btn single-btn btn-orange text-light form mt-3">Berikan Donasi</div>
            <div class="donation-list-info" align="left">
                @foreach($donations as $donation)
                <div class="donation-list-user">
                    <div class="row">
                    <div class="col-3 mid-content">
                        <i class="fa fa-user user-icon"></i>
                    </div>
                    <div class="col-9">
                        <div class="row donation-list-info-name">
                        {{ $donation->user->name }}
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