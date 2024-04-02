@extends('master.admin')

@foreach ($orders as $item)
@if ($item->status == 0)
@section('title','List Orders Unconfirmed')
@elseif ($item->status == 1)
@section('title','List Orders Confirm')
@elseif ($item->status == 2)
@section('title','List Orders Paid')
@else
@section('title','Cancelled')                   
@endif
@endforeach

@section('main')

    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>Order date</th>
                <th>Status</th>
                <th>Total Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                    <td>
                        @if ($item->status == 0)
                            <span>Unconfimred</span>
                        @elseif ($item->status == 1)
                            <span>Confirm</span>
                        @elseif ($item->status == 2)
                            <span>paid</span>
                        @else
                            <span>Cancelled</span>
                        @endif
                    </td>
                    <td>{{ number_format($item->totalPrice) }}</td>
                    <td>
                        <a href="{{ route('order.show', $item->id) }}" class="btn btn-sm btn-primary">Detail</a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>

@stop()
