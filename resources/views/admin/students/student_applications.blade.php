@extends('admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg sec-bg">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="student_1">
                        <h4>Student Application List</h4>
{{--                        <i class="fa-solid fa-magnifying-glass"></i>--}}
{{--                        <input type="text" data-kt-user-table-filter="search" value="" id="txt_search" class="form-control form-control-solid w-250px ps-14" placeholder="Search . . . .">--}}
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
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Submission Date</th>
                                    <th>Status</th>
                                    <th>View</th>
{{--                                    <th>Actions</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($applications as $key => $application)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$application->getUser->username}}</td>
                                    <td>{{$application->getUser->email}}</td>
                                    <td>{{$application->created_at->format('d-M-Y')}}</td>
                                    @if($application->status == 1)
                                        <td>Approved</td>
                                    @elseif($application->status == 2)
                                        <td>Rejected</td>
                                    @else
                                        <td>Pending</td>
                                    @endif
                                    <td class="rou-td"><a href="{{route('admin_view_student_application',[$application->id])}}"><i class="fa fa-bars"></i></a></td>
{{--                                    <td><a href="notes_list.html" target="blank"> <i class="fa fa-list"></i></a>--}}
{{--                                        <a href="notes.html" target="_blank"><i class="fa-solid fa-plus"></i></a>--}}
{{--                                    </td>--}}

{{--                                    <td>--}}
{{--                                        <ul class="me_ico">--}}
{{--                                            <li><a href="javascript:void(0)"><i class="fa-solid fa-arrow-down"></i></a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="Students.html"> <i class="fa-solid fa-pencil"></i></a></li>--}}
{{--                                            <li><a href="javascript:void(0)" class="md-trigger" data-modal="modal-12"> <i class="fa-solid fa-trash"></i></a></li>--}}
{{--                                        </ul>--}}
{{--                                    </td>--}}
                                </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>



{{--            <div class="pagin_mian">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--                        <div class="pagi_cont">--}}
{{--                            <h5>Showing 1 to 1 of 1 entries</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-8 col-sm-8 col-xs-12">--}}
{{--                        <div class="my_pagi">--}}
{{--                            <nav aria-label="Page navigation example">--}}
{{--                                <ul class="pagination">--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link" href="#" aria-label="Previous">--}}
{{--                                            <span aria-hidden="true">&laquo;</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li class="page-item"><a class="page-link-1" href="#"><small>1</small></a></li>--}}
{{--                                    <li class="page-item"><a class="page-link" href="#"><i--}}
{{--                                                class="fa-solid fa-angle-right"></i></a></li>--}}
{{--                                    <li class="page-item">--}}
{{--                                        <a class="page-link" href="#" aria-label="Next">--}}
{{--                                            <span aria-hidden="true">&raquo;</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

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

