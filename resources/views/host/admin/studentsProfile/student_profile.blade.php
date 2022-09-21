@extends('host.admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg sec-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_1">
                        <h4>Students Profile</h4>
                    </div>
                </div>

            </div>

            <div class="main_table">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!--<div class="student_2 stu-4">-->
                        <!--    <a href="{{route('admin_manage_student_details')}}"><i class="fa-solid fa-plus"></i>New-->
                        <!--        Student</a>-->
                        <!--</div>-->
                    </div>
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="table_content">
                            <table class="display  data-table" style="width:100%">
                                <thead>
                                <tr>
                                    <th class="dt-sno-width">S.No</th>
                                    <th class="dt-fn-width">First Name</th>
                                    <th class="dt-ln-width">Last Name</th>
                                    <th class="dt-e-width">Email</th>
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
                    ajax: "{{ route('hd_student_profile') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
                        {data: 'first_name', name: 'first_name'},
                        {data: 'last_name', name: 'last_name'},
                        {data: 'email', name: 'email'},
                       
                        {data: 'action', name: 'Action', orderable: false, searchable: false},
                    ],
                    createdRow: function (row, data, index) {
                        console.log(data)
                       
                        $('td', row).eq(6).css('width', '10%');
                        $('td', row).eq(7).addClass('action-right');
                    }
                });
            });
        </script>
    @endpush
@endsection

