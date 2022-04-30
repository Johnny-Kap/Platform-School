@extends('layouts.admin')

@section('content')
<!-- Dashboard 2 Header -->
<div class="content-header">
    <ul class="nav-horizontal text-center">
        <li>
            <a href="{{ route('cours') }}"><i class="gi gi-book_open"></i> Cours</a>
        </li>
        <li>
            <a href="{{ route('homework') }}"><i class="gi gi-book_open"></i> Exercices</a>
        </li>
        <li>
            <a href="{{ route('note') }}"><i class="gi gi-book_open"></i> Attribuer notes</a>
        </li>
        <!-- <li>
            <a href="{{ route('home.w') }}"><i class="gi gi-book_open"></i> Attribuer notes</a>
        </li> -->
    </ul>
</div>
<!-- Orders and Products -->
<div class="row">
    <div class="col-lg-6">
        <!-- Latest Orders Block -->
        <div class="block">
            <!-- Latest Orders Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="page_ecom_orders.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                </div>
                <h2><strong>Calendrier</strong></h2>
            </div>
            <!-- END Latest Orders Title -->

            <!-- Latest Orders Content -->
            @include('includes.calendar')
            <!-- END Latest Orders Content -->
        </div>
        <!-- END Latest Orders Block -->
    </div>
    <div class="col-lg-6">
        <!-- Top Products Block -->
        <div class="block">
            <!-- Top Products Title -->
            <div class="block-title">
                <div class="block-options pull-right">
                    <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                </div>
                <h2><strong>Dernières</strong> connexions</h2>
            </div>
            <!-- END Top Products Title -->

            <!-- Top Products Content -->
            <table class="table table-borderless table-striped table-vcenter table-bordered">
                <thead>
                    <td>Utilisateur</td>
                    <td>Adressse IP</td>
                    <td>Navigateur</td>
                    <td>Dernière date et heure en activité</td>
                    <td>Dernier temps mis en activité</td>
                </thead>
                <tbody>
                    @foreach($data as $datas)
                    @php

                    $dt = Carbon\Carbon::createFromTimestamp($datas->last_activity)->toDateTimeString();

                    $tt = Carbon\Carbon::parse(gmdate("Y-m-d\TH:i:s", $datas->last_activity))->diffForHumans();

                    @endphp
                    <tr>
                        <td class="text-center" style="width: 50px;"><a href="page_ecom_product_edit.html"><strong>{{$datas->user_id}}</strong></a></td>
                        <td><a href="page_ecom_product_edit.html">{{$datas->ip_address}}</a></td>
                        <td class="text-center"><strong>435</strong> {{$datas->user_agent}}</td>
                        <td class="hidden-xs text-center">{{$dt}}</td>
                        <td class="hidden-xs text-center">{{$tt}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- END Top Products Content -->
        </div>
        <!-- END Top Products Block -->
    </div>
</div>
<!-- END Orders and Products -->
<!-- END Dashboard 2 Header -->
@endsection