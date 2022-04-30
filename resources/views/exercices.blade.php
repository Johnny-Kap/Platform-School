@extends('layouts.admin')

@section('content')

<a href="{{ route('add_homework') }}"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ajouter</button></a><br><br>

<!-- All Orders Block -->
<div class="block full">
    <!-- All Orders Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>Tous</strong> les exercices</h2>
    </div>
    <!-- END All Orders Title -->

    <!-- All Orders Content -->
    <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="visible-lg">Matiere</th>
                <th class="text-center visible-lg">Niveau</th>
                <th class="text-center">Fichier</th>
            </tr>
        </thead>
        <tbody>
            @foreach($works as $work)
            <tr>
                <td class="text-center"><strong>{{$work->id}}</strong></td>
                <td class="text-center visible-lg">{{$work->matieres->libelle_mat}}</td>
                <td class="text-center visible-lg">{{$work->niveaux->libelle_niv}} </td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">{{$work->upload}} </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END All Orders Content -->
</div>

@endsection