@extends('layout.master')

@section('index')
  {{$name}} ++ {{$age}} <hr>


  @forelse ($items as $item )
{{$loop->iteration}} -- {{$item}} <br>
{{-- $loop->index 迴圈方法 --}}
{{-- (查PDF VIEW P24) index,iteration,remaining,count,last,first  比較少用的:depth,parent --}}
  {{-- @empty 如果沒有值 出現內容 --}}
  @empty
沒有商品 123
  @endforelse

@endsection

