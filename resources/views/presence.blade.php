@extends('layouts.admin')

@section('content')

<a href="{{ route('add_presence') }}"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Post</button></a><br><br>

<!-- All Orders Block -->
<div class="block full">
    <!-- All Orders Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>All</strong> Orders</h2>
    </div>
    <!-- END All Orders Title -->

    <!-- All Orders Content -->
    @foreach($show as $allows)
        <span> {{ $allows->status }} </span>
    @endforeach
    <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="visible-lg">Libelle</th>
                <th class="text-center visible-lg">Date</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685199</strong></a></td>
                <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                <td class="text-center">
                    <div class="btn-group btn-group-xs">
                        <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                        <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- END All Orders Content -->
</div>

@endsection