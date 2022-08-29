@extends('admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg sec-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_1">
                        <h4>Student Payment List</h4>
                    </div>
                </div>

            </div>

            <div class="main_table">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="table_content">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Student Name</th>
                                    <th>Student Email</th>
                                    <th>Fees Amount</th>
                                    <th>Transaction Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($fees_model as $key => $fee)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$fee->getUser->username}}</td>
                                    <td>{{$fee->getUser->email}}</td>
                                    <td>${{$fee->fees}}</td>
                                    @if($fee->is_paid == 1)
                                    <td>{{$fee->getPayment->created_at->format('d-M-Y')}}</td>
                                    @else
                                    <td></td>
                                    @endif
                                    @if($fee->is_paid == 1)
                                        <td style="color:#008000;background-color:#e0ede0;">Succeeded</td>
                                    @else
                                        <td style="color:#b4b411;background-color: #fbfbdd;">Pending</td>
                                    @endif
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @push('js')
        <script>
            $(document).ready(function (e)  {
                var table = $('#example').DataTable({
                });
            });
        </script>
    @endpush
@endsection

