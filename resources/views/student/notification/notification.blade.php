@extends('student.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg">
            <h4 style="color: #000">Notifications</h4> <br>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <div class="notification">
                        <div class="history-tl-container">
                            <ul class="tl">
                                @foreach($notifications as $notification)
                                    <li class="tl-item" ng-repeat="item in retailer_history">
                                        @if($notification->getUser->user_role === 1)
                                            <div class="timestamp">
                                                {{ $notification->created_at->format('d-m-Y') }}
                                                <br> {{ $notification->created_at->format('h:i:s A') }}
                                            </div>
                                            <div class="item-title">
                                                <b>Admin </b>
                                                <br> {{ $notification->description }}</div>
                                        @else
                                            <div class="timestamp">
                                                {{ $notification->created_at->format('d-m-Y') }}
                                                <br> {{ $notification->created_at->format('h:i:s A') }}
                                            </div>
                                            <div class="item-title"><b>You </b> <br>{{ $notification->description }}</div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
