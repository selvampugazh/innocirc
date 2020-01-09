@php

$activities = \App\Models\History\ActivityLog::limit(20)->where('causer_id',$user->id)->get()
@endphp
<div class="accordion" id="accordionExample">
    @foreach($activities as $activity)
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $activity->id}}" aria-controls="collapseOne">
                        {{ $activity->description}}
                    </button>
                </h5>
            </div>
            @if(!empty($activity->properties))
                <div id="{{ $activity->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        {{ $activity->description}} at {{ $activity->created_at}}
                        <div class="row">
                            {{-- new values --}}
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item active text-bold">New values</li>
                                            @foreach ( json_decode($activity->properties)->attributes as $tag)
                                                <li class="list-group-item">{{$tag}} </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            {{-- old values --}}
                            @if(isset(json_decode($activity->properties)->old))
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                <li class="list-group-item active text-bold">Old values</li>
                                                @foreach ( json_decode($activity->properties)->old as $tag)
                                                    <li class="list-group-item">{{$tag}} </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endforeach
</div>
