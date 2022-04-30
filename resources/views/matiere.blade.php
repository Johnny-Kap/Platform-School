@extends('layouts.admin')

@section('content')
<a href="{{ route('suivre_mat') }}"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Suivre</button></a><br><br>

<!-- All Orders Block -->
<div class="block full">
    <!-- All Orders Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>Matières</strong> suivies</h2>
    </div>
    <!-- END All Orders Title -->

    <!-- All Orders Content -->
    <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="visible-lg">Enseignant</th>
                <th class="text-center visible-lg">Matiere</th>
                <th class="text-center">Niveau</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shows as $show)
            <tr>
                <td class="text-center"><strong>{{$show->id}}</strong></td>
                <td class="visible-lg">{{$show->users->name}}</td>
                <td class="text-center visible-lg">{{$show->matieres->libelle_mat}}</td>
                <td class="text-center visible-lg">{{$show->niveaux->libelle_niv}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END All Orders Content -->
</div>

@endsection