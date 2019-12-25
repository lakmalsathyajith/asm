<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
    <tbody>
        <tr>
            <td align="center" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" id="template_container" style="
-webkit-box-shadow:0 0 0 3px rgba(0,0,0,0.025) !important;
box-shadow:0 0 0 3px rgba(0,0,0,0.025) !important;
-webkit-border-radius:6px !important;
border-radius:6px !important;
background-color: #fafafa;
border-radius:6px !important;
max-width: 487px;">
                    <tbody>
                        <tr>
                            <td align="center" valign="top">
                                <!-- Header -->
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header" style="
background-color: #fff;
color: #f1f1f1;
-webkit-border-top-left-radius:6px !important;
-webkit-border-top-right-radius:6px !important;
border-top-left-radius:6px !important;
border-top-right-radius:6px !important;
border-bottom: 0;
font-family:Arial;
font-weight:bold;
line-height:100%;
vertical-align:middle;">
                            <tbody><tr>
                                <td>
                                    <h1 style=" color: #f20000; margin:0; padding: 28px 24px; display:block; font-family:Arial;
                                    font-size: 11px; font-weight:bold; text-align:left; line-height: 150%; " id="logo ">
                                        <a style=" color: #f20000; text-decoration: none; " href="https://www.apartmentstaysmelbourne.com.au/" title="Apartment Stays Melbourne" target="_self "><img src="{{asset('images/main-logo.png')}}" alt="logo " class="mailtpl_img " height="65"></a>
                                    </h1>

                                </td>
                            </tr>
                        </tbody></table>
                        <!-- End Header -->
                    </td>
                </tr>
                <tr>
                    <td align="center " valign="top ">
                        <!-- Body -->
                        <table border="0 " cellpadding="0 " cellspacing="0 " width="100% " id="template_body ">
                            <tbody><tr>
                                <td valign="top " style=" background-color: #fafafa; " id="mailtpl_body_bg ">
                                    <!-- Content -->
                                    <table border="0 " cellpadding="20 " cellspacing="0 " width="100% ">
                                        <tbody><tr>
                                            <td valign="top ">
                                                <div style="color: rgb(47, 47, 47); font-family: Arial; font-size: 14px;
                                    line-height: 150%; text-align: left; " id="mailtpl_body ">
<h3>Enquiry Details</h3>
<ul>
<li><strong>First name:</strong>&nbsp;{{$data['first_name']}}</li>
<li><strong>Last Name:</strong>&nbsp;{{$data['last_name']}}</li>
<li><strong>Email:</strong>&nbsp;{{$data['email']}}</li>
<li><strong>Phone:</strong>&nbsp;{{$data['phone']}}</li>
@if($data['enquiry_type']=='booking')
</ul>
<br>
<ul>
<li><strong>Apartment Type:</strong>&nbsp;{{$data['apartment_type']}}</li>
<li><strong>Suburb:</strong>&nbsp;{{$data['suburb']}}</li>
<li><strong>State:</strong>&nbsp;{{$data['state']}}</li>
<?php

?>
<li><strong>Check In:</strong>&nbsp;{{  substr($data['checkIn'],0,15) }}</li>
<li><strong>Check Out:</strong>&nbsp;{{ substr($data['checkOut'],0,15)  }}</li>
<li><strong>Adults:</strong>&nbsp;{{$data['adults']}}</li>
<li><strong>Children:</strong>&nbsp;{{$data['children']}}</li>
<li><strong>Price Min:</strong>&nbsp;{{$data['price_min']}}</li>
<li><strong>Price Max:</strong>&nbsp;{{$data['price_max']}}</li>
<li><strong>Message:</strong>&nbsp;{{$data['message']}}</li>
</ul>
@else
<li><strong>Message:</strong>&nbsp;{{$data['message']}}</li>
@endif

</ul>
</div>
</td>
</tr>
</tbody></table>
<!-- End Content -->
</td>
</tr>
</tbody></table>
<!-- End Body -->
</td>
</tr>
<tr>
<td align="center " valign="top ">
<!-- Footer -->
<table border="0 " cellpadding="10 " cellspacing="0 " width="100% " id="template_footer " style=" border-top:1px solid
                                    #E2E2E2; background: #eee; -webkit-border-radius:0px 0px 6px 6px; -o-border-radius:0px 0px
                                    6px 6px; -moz-border-radius:0px 0px 6px 6px; border-radius:0px 0px 6px 6px; ">
    <tbody><tr>
        <td valign="top ">
            <table border="0 " cellpadding="10 " cellspacing="0 " width="100% ">
                <tbody><tr>
                    <td colspan="2 " valign="middle " id="credit " style=" border:0; color: #777; font-family: Arial; font-size:
                                    12px; line-height:125%; text-align:center; ">© {{date("Y")}} {{ config('app.name', 'ASM') }}</td>
                </tr>
            </tbody></table>
        </td>
    </tr>
</tbody></table>
<!-- End Footer -->
</td>
</tr>
</tbody></table>
        </td>
</tr>
</tbody></table>