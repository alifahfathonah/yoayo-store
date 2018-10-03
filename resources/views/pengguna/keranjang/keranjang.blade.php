@extends('pengguna.master')


@section('title', 'Keranjang')


@section('extra_css')

    {{ Html::style('user_assets/vendors/bootstrap-selector/css/bootstrap-select.min.css') }}
    
@endsection


@section('content')

@if (empty($data_keranjang[0]))
    
<section class="shopping_cart_area my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart_items">
                    <h3>Keranjang Belanja</h3>
                    <div class="table-responsive-md">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <a href="" style="font-size: 1.5em; color: red;"><i class="fa fa-trash"></i></a>
                                        {{-- {{ Html::image('user_assets/img/icon/close-icon.png') }} --}}
                                    </th>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                {{ Html::image('user_assets/img/product/cart-product/cart-3.jpg') }}
                                            </div>
                                            <div class="media-body">
                                                <h4>Round Sunglasses</h4><br>
                                                <p>Berat: 0.1Kg</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><p class="red">$150</p></td>
                                    <td>
                                        <div class="quantity">
                                            <h6>Quantity</h6>
                                            <div class="custom">
                                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count pr-2" type="button"><i class="icon_minus-06"></i></button>
                                                <input type="text" name="qty" id="sst" maxlength="12" value="1" class="input-text qty" style="width: 100px;">
                                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count pl-2" type="button"><i class="icon_plus"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                    <td><p>$150</p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart_totals_area">
                    <h4>Cart Totals</h4>
                    <div class="cart_t_list">
                        <div class="media">
                            <div class="d-flex">
                                <h5>Subtotal</h5>
                            </div>
                            <div class="media-body">
                                <h6>$14</h6>
                            </div>
                        </div>
                        <div class="media">
                            <div class="d-flex">
                                <h5>Jasa Kurir</h5>
                            </div>
                            <div class="media-body">
                                {{ Html::image('user_assets/img/jne.jpg', 'Jne Support', [
                                    'class' => 'img-fluid mx-auto',
                                ]) }}
                            </div>
                        </div>
                    </div>
                    <div class="total_amount row m0 row_disable">
                        <div class="float-left">
                            Total
                        </div>
                        <div class="float-right">
                            $400
                        </div>
                    </div>
                </div>
                <button type="submit" value="submit" class="btn subs_btn form-control">Proceed to checkout</button>
            </div>
        </div>
    </div>
</section>

@else

<section class="emty_cart_area my-5">
    <div class="container">
        <div class="emty_cart_inner">
            <i class="icon-handbag icons"></i>
            <h3>Keranjang Anda Masih Kosong</h3>
            <h4>Silahkan <a href="{{ route('beranda') }}">Kembali</a></h4>
        </div>
    </div>
</section>

@endif

@endsection

@section('extra_js')
    {{ Html::script('user_assets/vendors/bootstrap-selector/js/bootstrap-select.min.js') }}  
    <script>
    $(document).ready(function () {
        $.get('http://127.0.0.1:8000/api/v1/provinsi').done(function (data) {
            console.log(data)
        })
    })
    </script>  
@endsection