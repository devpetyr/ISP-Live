@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="main_bg">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="student_1">
                        <h4>Homevisits List</h4>
                        <i class="fa-solid fa-magnifying-glass"></i> <input type="text"
                                                                            data-kt-user-table-filter="search" value="" id="txt_search"
                                                                            class="form-control form-control-solid w-250px ps-14"
                                                                            placeholder="Search . . . .">
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="student_2">
                        <a href="javascript:void(0)" data-bs-toggle="modal"
                           data-bs-target="#staticBackdrop_3"><i class="fa-solid fa-plus"></i>New
                            School</a>
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
                                    <th>Host Name</th>
                                    <th>Visit Date</th>
                                    <th>Visit Time</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="{{asset('admin/images/table_3.jpg')}}" class="img-fluid" alt=""> <a
                                            href="javascript:void(0)">
                                            Manali Patel</a></td>
                                    <td><a href="javascript:void(0)">30-04-2022</a></td>
                                    <td class="edu"><a href="javascript:void(0)">12:00:00</a></td>
                                    <td>
                                        <ul class="me_ico">
                                            <li><a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#staticBackdrop_3"> <i
                                                        class="fa-solid fa-pencil"></i></a></li>
                                            <li><a href="javascript:void(0)" class="md-trigger"
                                                   data-modal="modal-12"> <i
                                                        class="fa-solid fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
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
