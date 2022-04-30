@extends('layouts.admin')

@section('content')

<a href="{{ route('add.reponse') }}"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i>Ajouter</button></a><br><br>

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
                <th class="text-center" style="width: 100px;">Etudiant</th>
                <th class="visible-lg">Matière</th>
                <th class="text-center visible-lg">Année académique</th>
                <th class="text-center">Titre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reponses as $reponse)
            <tr>
                <td class="text-center"><strong>{{$reponse->id}}</strong></td>
                <td class="text-center"><strong>{{$reponse->users->name}}</strong></td>
                <td class="text-center visible-lg">{{$reponse->matieres->libelle_mat}} </td>
                <td class="text-center visible-lg">{{$reponse->annee_acas->libelle_aca}}</td>
                <td class="text-center visible-lg"><a href="javascript:void(0)">{{$reponse->titre}} </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END All Orders Content -->
</div>

@endsection