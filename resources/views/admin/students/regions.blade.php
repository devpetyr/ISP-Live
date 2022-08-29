@extends('admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg">
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
                        <div class="table_content">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Region Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($regions as $key => $region)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td class="name-sch">{{$region->name}}</td>
                                    <td><a class="blue-text" href="{{route('admin_manage_region',$region->id)}}" ><i class="fa-solid fa-pencil"></i></a>
                                        <a class="red-text" href="{{route('admin_delete_region',$region->id)}}" ><i class="fa-solid fa-trash"></i></a>
                                        <!--<a href="#" class="md-trigger"><i class="fa-solid fa-trash"></i></a>-->
                                    </td>
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

