@extends('link')
@php $total = 0 @endphp
<div class="container-cart mt-5">
  <h2>Detail Pembelian</h2>
  <hr>
  <div class="row">
    @foreach ($keranjang as $item)
    @php $total += $details['price'] * $details['quantity'] @endphp
    <div class="col-6">
      <img src="{{$item->image}}"  class="cart1" alt="">
    </div>
    <div class="col-6">
      <h3>{{$item->name}}</h3>
      <p>Harga: Rp{{$item->price}}</p>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
      <form>
        <label for="quantity">Jumlah:{{$total}}</label>               
        <input type="number" id="quantity" name="quantity" value="1" min="1">
    </form>
    </div>
    <div class="payment mt-5">
      <h3>Ringkasan Pembayaran</h3>
      <hr>
      <table>
        <tr>
          <td>Subtotal:</td>
          <td>Rp100.000</td>
        </tr>
        <tr>
          <td>Ongkos Kirim:</td>
          <td>Rp10.000</td>
        </tr>
        <tr>
          <td>Total:</td>
          <td>Rp110.000</td>
        </tr>
      </table>
      <div class="button-cont">
        <button type="submit">Bayar Sekarang</button>
      </div>
      <a href="/cart" class="btn btn-primary mt-4">Back</a>
      <button type="submit" class="btn-cont ">Keranjang</button>
    </div>
    @endforeach
  </div>
</div>