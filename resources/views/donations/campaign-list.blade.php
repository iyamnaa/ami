@foreach($campaigns as $campaign)
<div class="col-12 mid-content">
    <a href="{{ url('/campaign/'.$campaign->id) }}">
        <div class="campaign-box row">
            <div class="campaign-image-box col-6">
            <img class="campaign-image" src="{{ asset($campaign->image_cover) }}">
            </div>
            <div class="campaign-info col-6">
            <b class="campaign-title text-success">{{ $campaign->title }}</b><br>
            <p class="campaign-category"> {{$campaign->user->name }}</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $campaign->getCampaignProgress($campaign->id, $campaign->target) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }}">
                <span class="sr-only">{{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }} Complete</span>
                </div>
            </div>
            <div>
                <span class="campaign-progress" style="float: left;"> <span class="content-desc"> Terkumpul </span><br> {{ $campaign->getCampaignDonation($campaign->id) }}</span>
                <span class="campaign-progress" style="float: right;"> <span class="content-desc"> Sisa Waktu </span><br>{{ $campaign->getCampaignDeadline($campaign->deadline) }}</span>
            </div>
            </div>
            <br>
        </div>
    </a>
</div>
@endforeach