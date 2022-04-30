@extends('layouts.admin')

@section('content')
<!-- All Orders Block -->
<div class="block full">
    <!-- All Orders Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>Mes cours</strong></h2>
    </div>
    <!-- END All Orders Title -->

    <!-- All Orders Content -->
    <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="text-center">Nom du cours</th>
                <th class="visible-lg">Matière</th>
                <th class="text-center">Année académique</th>
                <th class="text-center">Fichier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cours as $cour)
            <tr>
                <td class="text-center"><strong>{{$cour->id}}</strong></td>
                <td class="visible-lg">{{$cour->nom}}</td>
                <td class="visible-lg">{{$cour->matieres->libelle_mat}}</td>
                <td class="text-center visible-lg">{{$cour->annees->libelle_aca}}</td>
                <td class="visible-lg"><a href="javascript:void(0)">{{$cour->upload}}</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END All Orders Content -->
</div>

@endsection