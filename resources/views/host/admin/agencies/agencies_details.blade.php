@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="main_bg  sec-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_1">
                        <h4>Agencies List</h4>
                    </div>
                </div>
            </div>

            <div class="main_table">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="student_2 stu-4">
                            <a href="{{route('admin_manage_agency_details')}}"><i class="fa-solid fa-plus"></i>New
                                Agency</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="container">
                            <table class="table table_content table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <!--<th>City</th>-->
                                    <!--<th>State</th>-->
                                    <!--<th>Country</th>-->
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Status</th>
                                    <th width="100px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    @push('js')
        <script type="text/javascript">
            $(function () {
                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin_agencies_details') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'name', name: 'name'},
                        // {data: 'city', name: 'city'},
                        // {data: 'state', name: 'state'},
                        // {data: 'country', name: 'country'},
                        {data: 'address', name: 'address'},
                        {data: 'contact', name: 'contact'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'Action', orderable: false, searchable: false},
                    ],
                    createdRow: function (row, data, index) {
                        console.log(data)
                        if (data['status'] === "Active") {
                            $('td', row).eq(4).css('background-color', '#e0ede0');
                            $('td', row).eq(4).css('color', '#008000');
                        } else {
                            $('td', row).eq(4).css('background-color', '#fbfbdd');
                            $('td', row).eq(4).css('color', '#b4b411');
                        }
                        $('td', row).eq(5).addClass('action-right');
                        $('td', row).eq(4).css('width', '12%');
                    }
                });
            });
        </script>
    @endpush
@endsection
