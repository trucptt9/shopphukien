@extends('layout')
@section('content')
<div class="table-agile-info">
<h4 class="panel-heading">
     Đơn hàng của tôi
    </h4>

    <h2 class="title text-center">Lịch sử đặt hàng</h2>
			<div class="table-responsive">
			<table class="table table-striped b-t b-light">
				<thead>
				<tr>
					
					<th>ID đơn hàng</th>
					<th colspan='4' class="text-center">Chi  tiết</th>
					<th>Tổng giá trị đơn hàng</th>
					<th>Ngày đặt hàng</th>
					<th>Tình trạng đơn hàng</th>
					
					
					<th style="width:30px;"></th>
				</tr>
        <tr>
          <th></th>
          <th>ID sản phẩm</th>
          <th>Tên sản phẩm</th>
          <th>Số lượng</th>
          <th>Giá</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
				</thead>
				<tbody>
        <?php
          $count = -1;
          
          ?>
				@foreach($all_order as $key => $order)
        <?php
        $count++;
        
        ?>
				<tr>
					<td>{{$order->order_id}}</td>
          <td colspan='4'>
            <table class="table table-striped b-t b-light">
            @foreach($product_of_order[$count] as $detail)  
                <tr>
                  <td>{{$detail->product_id}}</td>
                  <td>{{$detail->product_name}}</td>
                  <td>{{$detail->product_qty}}</td>
                  <td>{{$detail->price}}</td>
                </tr>
              @endforeach
            </table> 
          </td>
					<td>{{number_format($order->order_total).' VND'}}</td>
					<td>{{date('d/m/Y', strtotime($order->order_ngaydathang))}}</td>
					<td>{{$order->order_status}}</td>
					
					
				</tr>
				@endforeach
        
				</tbody>
			</table>
			</div>
@endsection