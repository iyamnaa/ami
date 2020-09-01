<h5 class="content-title text-bold text-success col-12 mt-2 mb-3">Donasi {{ $categorySearch->name }}</h5>
<div class="horizontal-campaign pb-4 pl-3" style="overflow-x:auto">
<table class="table-campaign">
    <tr>
    @foreach($campaignsByCategory as $campaign)
    <td class="pr-4">
        <div class="campaign-box col-12 no-padd">
            <a href="{{ url('/campaign/'.$campaign->id) }}">
                <div class="campaign-image-box col-12">
                    <img class="campaign-image" src="{{ asset( $campaign->image_cover ) }}">
                </div>
                <div class="campaign-info col-12">
                    <b class="campaign-title text-success"> {{ $campaign->title }} </b>
                    <p class="campaign-category"> {{ $campaign->user->name }} <i class="fa fa-check-circle text-primary verified-user"></i></p>
                    <div class="campaign-desc">
                    {!! $campaign->short_desc !!}
                    </div>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $campaign->getCampaignProgress($campaign->id, $campaign->target) }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }}">
                        <span class="sr-only">{{ $campaign->getCampaignProgress($campaign->id, $campaign->target).'%' }} Complete</span>
                    </div>
                    </div>
                    <div class="campaign-additional-info">
                    <span class="campaign-progress" style="float: left;"> <span class="content-desc"> Terkumpul </span><br> {{ $campaign->getCampaignDonation($campaign->id) }} </span>
                    <span class="campaign-progress" style="float: right;"> <span class="content-desc"> Sisa Waktu </span><br> {{ $campaign->getCampaignDeadline($campaign->deadline) }} </span>
                    </div>
                </div>
            </a>
        </div>
    </td>
    @endforeach
    @if( !isset($campaignsByCategory[0]) )
        <p class="text-danger"> Tidak ada campaign </p>
    @endif
    </tr>
</table>
</div>