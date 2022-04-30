@extends('layouts.admin')

@section('content')

<!-- All Orders Block -->
<div class="block full">
    <!-- All Orders Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>Mes</strong> notes</h2>
    </div>
    <!-- END All Orders Title -->

    <!-- All Orders Content -->
    <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
        <thead>
            <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="visible-lg">Etudiant</th>
                <th class="text-center visible-lg">Matiere</th>
                <th class="text-center">Année académique</th>
                <th class="text-center">Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notes as $note)
            <tr>
                <td class="text-center"><strong>{{$note->id}}</strong></td>
                <td class="visible-lg">{{$note->users->name}}</td>
                <td class="text-center visible-lg">{{$note->matieres->libelle_mat}}</td>
                <td class="text-center visible-lg">{{$note->annee_acas->libelle_aca}}</td>
                <td class="text-center visible-lg">{{$note->note}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- END All Orders Content -->
</div>

@endsection