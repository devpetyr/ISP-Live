<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ISP | Registration Form</title>
</head>
<style>
    .btn_verify {
        font-size: 15px;
        line-height: 20px;
        font-weight: 600;
        color: #fafcff;
        border-radius: 50px;
        border: 2px solid #ffffff;
        text-transform: capitalize;
        display: flex;
        height: 44px;
        width: 158px;
        align-items: center;
        justify-content: center;
        background: #15304e;
        margin: 30px auto 10px;
        text-decoration: none;
    }
</style>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <!--HEADER -->
    <tbody>
    <tr>
        <td align="center">
            <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td align="center" valign="top" background="" bgcolor="" style="">
                        <table class="col-600" width="600" height="400" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td height="40"></td>
                            </tr>
                            <tr>
                                <td align="center" style="line-height: 0px;">
                                    <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="{{asset('web/images/logo.jpg')}}" alt="The Education Team">
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="font-family: 'Raleway', sans-serif;font-size:37px;color: #000;line-height:24px;font-weight: bold;letter-spacing: 5px;">
                                    Registration Form
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="font-family: 'Lato', sans-serif;font-size:15px;color: #000;line-height:24px;font-weight: 300;">
                                    Registration form has been successfully submitted <br>Quick Review.
                                </td>
                            </tr>
                            <tr>
                                <td height="30"></td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <!-- END HEADERR -->
    <!-- START SHOWCASE -->
    <tr>
        <td align="center">
            <table class="col-600" width="600" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-left:20px;margin-right:20px;">
                <tbody>
                <tr>
                    <td height="35"></td>
                </tr>
                <tr>
                    <td align="center" style="font-family: 'Raleway', sans-serif; font-size:22px; font-weight: bold; color:#333;">Registration Form</td>
                </tr>
                <tr>
                    <td height="10"></td>
                </tr>
                <tr>
                    <td align="center" style="font-family: 'Lato', sans-serif; font-size:14px; color:#757575;padding: 0px 51px;line-height: 0.8rem; font-weight: 300;">

                        <p>Full Name : <b>{{$details->username}}</b></p>

                        <p>Email : <b>{{$details->email}}</b></p>

                        <a href="{{route('user_verified', $details->id)}}" class="btn_verify" target="_blank" >Verify your Account</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td height="5"></td>
    </tr>

    </tbody>
</table>


</body>
</html>
