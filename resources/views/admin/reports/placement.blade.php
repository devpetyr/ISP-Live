@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="main_bg">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="student_1">
                        <h4>Placement Report</h4>
                        <i class="fa-solid fa-magnifying-glass"></i> <input type="text"
                                                                            data-kt-user-table-filter="search" value="" id="txt_search"
                                                                            class="form-control form-control-solid w-250px ps-14"
                                                                            placeholder="Search . . . .">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="student_2">
                        <a href="javascript:void(0)"><i class="fa-solid fa-plus"></i>New Host</a>
                    </div>
                </div>
            </div>

            <div class="main_table">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-xs-12">
                        <div class="table_content">
                            <div style="overflow-x: auto;">
                                <table id="example" class="table" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th><a href="javascript:void(0)"> Student Last Name</a></th>
                                        <th><a href="javascript:void(0)"> Student First Name</a>
                                        </th>
                                        <th><a href="javascript:void(0)"> Host First Name</a></th>
                                        <th><a href="javascript:void(0)"> Host Last Name</a></th>
                                        <th><a href="javascript:void(0)"> Host Address</a></th>
                                        <th><a href="javascript:void(0)"> Host City</a></th>
                                        <th><a href="javascript:void(0)"> Host Email</a></th>
                                        <th><a href="javascript:void(0)"> Host Cell Phone</a></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0)">Patel</a></td>
                                        <td><a href="javascript:void(0)">Anand</a></td>
                                        <td class="edu"><a href="javascript:void(0)">Manali</a></td>
                                        <td class="edu"><a href="javascript:void(0)">Patel</a>
                                        </td>
                                        <td class="edu"><a href="javascript:void(0)">Test</a></td>
                                        <td><a href="javascript:void(0)">Apache Junction</a></td>
                                        <td><a href="javascript:void(0)">manali@spaarg.com</a></td>
                                        <td><a href="javascript:void(0)">122-222-2222</a></td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="pagin_mian">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pagi_cont">
                            <h5>Showing 1 to 1 of 1 entries</h5>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="my_pagi">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa-solid fa-angle-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link-1"
                                                             href="#"><small>1</small></a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fa-solid fa-angle-right"></i></a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
