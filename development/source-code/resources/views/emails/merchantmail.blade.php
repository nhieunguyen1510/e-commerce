<div id=":sm" class="a3s aXjCH m158f411e37846171"><div style="margin:0;padding:0;width:100%;background-color:#f2f4f6"><div class="adM">
    </div><table width="100%" cellpadding="0" cellspacing="0">
        <tbody>
            <tr>
                <td style="width:100%;margin:0;padding:0;background-color:#f2f4f6" align="center">
                    <table width="100%" cellpadding="0" cellspacing="0">

                        <tbody>
                            <tr>
                                <td style="padding:25px 0;text-align:center">
                                    <a style="font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:16px;font-weight:bold;color:#2f3133;text-decoration:none" href="http://localhost:8000" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=vi&amp;q=http://localhost:8000&amp;source=gmail&amp;ust=1481650132189000&amp;usg=AFQjCNEoVuOyLO59jYjIarrmgZ3P-A8S-Q">
                                MINX
                            </a>
                                </td>
                            </tr>


                            <tr>
                                <td style="width:100%;margin:0;padding:0;border-top:1px solid #edeff2;border-bottom:1px solid #edeff2;background-color:#fff" width="100%">
                                    <table style="width:auto;max-width:570px;margin:0 auto;padding:0" align="center" width="570" cellpadding="0" cellspacing="0">
                                        <tbody>
                                            <tr>
                                                <td style="font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;padding:35px"><span class="im">

                                                    <h1 style="margin-top:0;color:#2f3133;font-size:19px;font-weight:bold;text-align:left">
                                                        Thông tin đơn hàng mới
                                                    </h1>


                                                    <p style="margin-top:0;color:#74787e;font-size:16px;line-height:1.5em">
                                                        Chúng tôi đã nhận được yêu cầu mua hàng từ tài khoản.<b>{{ $donhang->ten_nguoi_nhan }}</b>
                                                    
                                                        Đây là thông tin giao hàng và danh sách sản phẩm mà tài khoản <b>{{ $donhang->ten_nguoi_nhan }}</b> yêu cầu
                                                    </p>


                                                    </span><div style="background:#eff0f4;border:1px solid #e2e2e2;margin-top:10px;width:100%">
    <table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr style="padding:10px">
                <td colspan="2" style="border-top:1px solid #eff0f4">
                    <table style="padding:7px 0">
                        <tbody>
                            <tr>
                                <td style="padding:2px 8px 0px 15px">Mã số đơn hàng:</td>
                                <td style="padding:2px 8px 0px 15px"><strong>{{ $donhang->id }}</strong></td> 
                            </tr> 
                            <tr>
                                <td style="padding:2px 8px 0px 15px">Thời gian đặt hàng:</td> 
                                <td style="padding:2px 8px 0px 15px"><strong>{{ $donhang->ngay_tao }}</strong></td> </tr>                         
                            <tr>
                                <td style="padding:2px 8px 0px 15px">Tên người nhận:</td> <td style="padding:2px 8px 0px 15px"><strong>{{ $donhang->ten_nguoi_nhan }}</strong></td> 
                            </tr> 
                            <tr>
                                <td style="padding:2px 8px 0px 15px">Số điện thoại người nhận:</td> <td style="padding:2px 8px 0px 15px"><strong>{{ $donhang->so_dien_thoai_giao_hang }}</strong></td> 
                            </tr> 
                            <tr>
                                <td style="padding:2px 8px 0px 15px">Địa chỉ người nhận:</td> <td style="padding:2px 8px 0px 15px"><strong>{{ $donhang->dia_chi_giao_hang }}</strong></td> 
                            </tr> 
                            
                        </tbody>
                    </table> 
                </td> 
            </tr> 
        </tbody>
    </table> 
</div>

                                                   

                                                    <p style="margin-top:0;color:#74787e;font-size:16px;line-height:1.5em">
                                                        Thân,<br>Minx
                                                    </p>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

<tr><td><div style="width:100%;height:30px;color:#f30;text-align:center"><p style="font-size:26px;font-weight:bold">Chi Tiết Hóa Đơn</p> </div>
<table width="100%" border="1" style="border-collapse:collapse;font-size:15px;text-align:center">
    <tbody><tr style="background:red;font-size:18px;font-weight:bold;color:white">
        <td class="m_-8540189194084074751title" width="10%" height="50px">STT</td>
        <td class="m_-8540189194084074751title" width="35%">Tên Sản Phẩm</td>
        <td class="m_-8540189194084074751title" width="20%">Số Lượng(cái)</td>
        <td class="m_-8540189194084074751title" width="20%">Đơn giá(VND)</td>
        <td class="m_-8540189194084074751title" width="25%">Thành Tiền(vnđ)</td>
    </tr>
    <?php $stt=0;$tongtien=0; ?>
    @foreach($danhsachchitietsanpham as $ct)
    <?php $stt++;$tongtien = $tongtien+ $ct->tong_tien ; ?>
                <tr>
            <td height="30px">{{ $stt }}</td>
            <td>{{ $ct->san_pham->ten }}</td>
            <td>{{ $ct->so_luong }}</td>
            <td>{{ $ct->don_gia_san_pham }}</td>
            <td>{{ number_format($ct->tong_tien ,0,",",".")}}</td>
    </tr>
      @endforeach                       
                            
        </tbody>
                    </table>
        <div style="width:100%;height:40px;margin-top:10px"><div style="float:right;font-size:20px;font-weight:bold;color:#099"><p>Tổng Tiền: <span style="margin:auto 5px;color:#f30">{{ number_format($tongtien ,0,",",".")}} </span> VNĐ</p> </div> </div>
                           
                        </td></tr></tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table><div class="yj6qo"></div><div class="adL">
    </div><div class="m_-8540189194084074751yj6qo adL"></div><div class="adL">
    </div><div class="m_-8540189194084074751adL adL">
    </div><div class="adL">
</div></div><div class="adL">
</div></div>