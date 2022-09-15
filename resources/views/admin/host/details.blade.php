@extends('admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg sec-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_1">
                        <h4>Host List</h4>
                    </div>
                </div>

            </div>

            <div class="main_table">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="table_content">
                            <table class="display data-table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Verified</th>
                                    <th>Status</th>
                                    <th>Actions</th>
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
                    ajax: "{{ route('admin_host_details') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'first_name', name: 'first_name'},
                        {data: 'last_name', name: 'last_name'},
                        {data: 'email', name: 'email'},
                        {data: 'is_active', name: 'is_active'},
                        {data: 'status', name: 'status'},
                        {data: 'action', name: 'Action', orderable: false, searchable: false},
                    ],
                    createdRow: function (row, data, index) {
                        console.log(data)
                      
                        if (data['status'] === "Approved") {
                            $('td', row).eq(5).css('background-color', '#e0ede0');
                            $('td', row).eq(5).css('color', '#008000');
                        }
                        else if(data['status'] === "Rejected")
                        {
                            $('td', row).eq(5).css('background-color', '#e0ede0');
                            $('td', row).eq(5).css('color', '#008000');
                        }
                        else {
                            $('td', row).eq(5).css('background-color', '#fbfbdd');
                            $('td', row).eq(5).css('color', '#b4b411');
                        }
                        
                        $('td', row).eq(6).addClass('action-right');
                        $('td', row).eq(4).css('width', '12%');
                        $('td', row).eq(5).css('width', '12%');
                    }
                });
            });
        </script>
    @endpush


@endsection

