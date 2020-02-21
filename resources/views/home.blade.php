@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <!-- posisi kiri -->
    <div class="col-md-3">
        <div class="card-body">
            <div class="d-flex border-0"> 
                <div class="mr-auto">
                    <span>Who to follow</span>
                </div>    
                    <div><span class="text-primary">Refresh See All</span></div>
            </div>
        </div>
    </div>
     <!-- posisi tengah -->
        <div class="col-md-6">
            <div class="card border-0">
                <div class="d-flex card-header border-0"> 
                    <div class="mr-auto">
                        <h6 class="text-muted">
                        Tweet 
                        </h6>
                    </div>
                    <div><svg fill="none" height="24" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="2"/><circle cx="12" cy="4" r="2"/><circle cx="12" cy="20" r="2"/></svg></div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{asset('image/epic-games-fortnite-tournament-mode-fix-update-scoring-changes.jpg')}}" width="50" height="50" class="rounded-circle" alt="">
                            <div class="ml-3">
                                <h6 class="text-dark">
                                     Fortnite
                                <small class="text-muted">@Ninja</small>
                                </h6>
                                <h6 class="text-primary">
                                    @apex,
                                <span class="text-muted"> lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do .</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{asset('image/epic-games-fortnite-tournament-mode-fix-update-scoring-changes.jpg')}}" width="50" height="50" class="rounded-circle" alt="">
                            <div class="ml-3">
                                <h6 class="text-dark">
                                     Fortnite
                                <small class="text-muted">@Ninja</small>
                                </h6>
                                <span class="text-muted"> lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do .</span>
                                <img src="{{asset('image/maxresdefault (2).jpg')}}" width="100%" height="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card-body">
                    <div class="d-flex">
                        <img src="{{asset('image/epic-games-fortnite-tournament-mode-fix-update-scoring-changes.jpg')}}" width="50" height="50" class="rounded-circle" alt="">
                            <div class="ml-3">
                                <h6 class="text-dark">
                                     Fortnite
                                <small class="text-muted">@Ninja</small>
                                </h6>
                                <h6 class="text-primary">
                                    @apex,
                                <span class="text-muted"> lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do .</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- posisi kanan -->
        <div class="col-md-3">
            <div class="card-body">
                
            </div>        
        </div>
    </div>
</div>
@endsection