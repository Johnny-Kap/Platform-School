@extends('layouts.admin')

@section('content')
<a href="{{ route('add_matiere') }}"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ajouter</button></a>
<br><br>
<!-- All Orders Block -->
<div class="block full">
    <!-- All Orders Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>Toutes</strong> les matières</h2>
    </div>
    <!-- END All Orders Title -->

    <!-- All Orders Content -->
    <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="visible-lg">Matière</th>
                <th class="text-center visible-lg">Ajouté le</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shows as $show)
            <tr>
                <td class="text-center"><strong>{{$show->id}}</strong></td>
                <td class="visible-lg">{{$show->libelle_mat}}</td>
                <td class="text-center visible-lg">{{$show->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END All Orders Content -->
</div>

@endsection