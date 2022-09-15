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
                        <div class="table_content ">
                            <table class="display data-table" style="width:100%">
                                <thead>
                                <tr>
                                    <th class="dt-sno-width">S.No</th>
                                    <th class="dt-fn-width">First Name</th>
                                    <th class="dt-ln-width">Last Name</th>
                                    <th class="dt-e-width">Student Email</th>
                                    <th class="dt-prc-width">Fees Amount</th>
                                    <th class="dt-td-width">Transaction Date</th>
                                    <th class="dt-stat-width">Status</th>
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
                    ajax: "{{ route('admin_student_payments') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                        {data: 'student_fname', name: 'getUser.first_name'},
                        {data: 'student_lname', name: 'getUser.last_name'},
                        {data: 'student_email', name: 'getUser.email'},
                        {data: 'fees', name: 'fees'},
                        {data: 'payment_transaction_date', name: 'getPayment.created_at'},
                        {data: 'is_paid', name: 'is_paid'},
                    ],
                    createdRow: function ( row, data, index ) {
                        if (data['is_paid'] === "Succeeded") {
                            $('td', row).eq(6).css('background-color', '#e0ede0');
                            $('td', row).eq(6).css('color','#008000');
                        } else {
                            $('td', row).eq(6).css('background-color', '#fbfbdd');
                            $('td', row).eq(6).css('color','#b4b411');
                        }
                        $('td', row).eq(6).addClass('text-right');
                        $('td', row).eq(6).css('width', '12%');
                    }
                });
            });
        </script>
    @endpush
@endsection
