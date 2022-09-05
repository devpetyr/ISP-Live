@extends('admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg sec-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_1">
                        <h4>Student List</h4>
                    </div>
                </div>

            </div>

            <div class="main_table">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="table_content">
                            <table class="display  data-table" style="width:100%">
                                <thead>
                                <tr>
                                    <th class="dt-sno-width">S.No</th>
                                    <th class="dt-fn-width">First Name</th>
                                    <th class="dt-ln-width">Last Name</th>
                                    <th class="dt-e-width">Email</th>
                                    <th class="dt-asub-width">Application Submitted</th>
                                    <th class="dt-v-width">Verified</th>
                                    <th class="dt-stat-width">Status</th>
                                    {{--                                    <th>Actions</th>--}}
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
                    ajax: "{{ route('admin_student_details') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'first_name', name: 'first_name'},
                        {data: 'last_name', name: 'last_name'},
                        {data: 'email', name: 'email'},
                        {data: 'application_submitted', name: 'application_submitted'},
                        {data: 'is_active', name: 'is_active'},
                        {data: 'status', name: 'status'},
                    ],
                    createdRow: function (row, data, index) {
                        console.log(data)
                        if (data['application_submitted'] === "Submitted") {
                            $('td', row).eq(4).css('background-color', '#e0ede0');
                            $('td', row).eq(4).css('color', '#008000');
                        } else {
                            $('td', row).eq(4).css('background-color', '#fbfbdd');
                            $('td', row).eq(4).css('color', '#b4b411');
                        }
                        if (data['is_active'] === "Verified") {
                            $('td', row).eq(5).css('background-color', '#e0ede0');
                            $('td', row).eq(5).css('color', '#008000');
                        } else {
                            $('td', row).eq(5).css('background-color', '#fbfbdd');
                            $('td', row).eq(5).css('color', '#b4b411');
                        }
                        if (data['status'] === "Approved") {
                            $('td', row).eq(6).css('background-color', '#e0ede0');
                            $('td', row).eq(6).css('color', '#008000');
                        } else {
                            $('td', row).eq(6).css('background-color', '#fbfbdd');
                            $('td', row).eq(6).css('color', '#b4b411');
                        }
                    }
                });
            });
        </script>
    @endpush
@endsection

