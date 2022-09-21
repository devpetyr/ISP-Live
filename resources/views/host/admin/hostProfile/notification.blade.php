@extends('host.admin.layouts.main')
@section('content')
    @push('css')
        <style>
            body{
  line-height:1.3em;
  min-width:920px;
}
.history-tl-container{
     font-family: "Roboto",sans-serif;
    width: 100%;
    margin: auto;
    display: block;
    position: relative;
    height: 658px;
    overflow: scroll;
    overflow-x: auto;
}
.history-tl-container ul.tl{
    margin:20px 0;
    padding:0;
    display:inline-block;

}
.history-tl-container ul.tl li{
    list-style: none;
    margin:auto;
    margin-left:180px;
    min-height:50px;
    /*background: rgba(255,255,0,0.1);*/
    border-left:1px dashed #86D6FF;
    padding:0 0 50px 30px;
    position:relative;
}
.history-tl-container ul.tl li:last-child{ border-left:0;}
.history-tl-container ul.tl li::before{
    position: absolute;
    left: -18px;
    top: -5px;
    content: " ";
    border: 8px solid rgba(255, 255, 255, 0.74);
    border-radius: 500%;
    background: #258CC7;
    height: 20px;
    width: 20px;
    transition: all 500ms ease-in-out;

}
.history-tl-container ul.tl li:hover::before{
    border-color:  #258CC7;
    transition: all 1000ms ease-in-out;
}
ul.tl li .item-title{
}
ul.tl li .item-detail{
    color:rgba(0,0,0,0.5);
    font-size:12px;
}
ul.tl li .timestamp{
    color: #8D8D8D;
    position: absolute;
    width:100px;
    left: -50%;
    text-align: right;
    font-size: 12px;
}
        </style>
    @endpush

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg">
            <h4 style="color: #000">Notification</h4> <br>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <div class="history-tl-container">
                      <ul class="tl">
                        @foreach($notification as $item)
                        <?php 
                        //   $temp = explode(' ',$item->created_at);
                                                    // {{ $temp[0] }}<br> {{ $temp[1]}}
                        ?>
                        <li class="tl-item" ng-repeat="item in retailer_history">
                          <div class="timestamp">
                            {{ $item->created_at->format('d-m-Y') }} <br>  {{ $item->created_at->format('h:i:s A') }}
                          </div>
                          <div class="item-title">{{ $item->description }}</div>
                        </li>
                        @endforeach
                    
                      </ul>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
