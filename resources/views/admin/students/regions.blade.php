@extends('admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg sec-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_1">
                        <h4>Region List</h4>
                    </div>
                </div>
            </div>

            <div class="main_table">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_2 stu-4">
                        <a href="{{route('admin_manage_region')}}" ><i class="fa-solid fa-plus"></i>New Region</a>
                    </div>
                </div>
                    <div class="col-md-12 col-xs-12 col-xs-12">
                            <div class="container">
                            <table class="table table_content table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Region Name</th>
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

    @push('js')
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin_student_regions') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                {data: 'name', name: 'name'},
                {data: 'action', name: 'Action', orderable: false, searchable: false},
            ]
        });
    });
</script>
    @endpush
@endsection

