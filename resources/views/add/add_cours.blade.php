@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic Form Elements Block -->
        <div class="block">
            <!-- Basic Form Elements Title -->
            <div class="block-title">
                <h2><strong>Nouveau</strong> cours</h2>
            </div>
            <!-- END Form Elements Title -->

            <!-- Basic Form Elements Content -->
            <form action="{{ route('added.cours') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-text-input">Libelle du cours</label>
                    <div class="col-md-9">
                        <input type="text" id="example-text-input" name="nom" class="form-control" placeholder="Text">
                        <span class="help-block">This is a help text</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-select">Niveau</label>
                    <div class="col-md-9">
                        <select id="example-select" name="niveau" class="form-control" size="1">
                            @foreach($niveaux as $niveau)
                            <option value="{{$niveau->id}}">{{$niveau->libelle_niv}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-select">Matiere</label>
                    <div class="col-md-9">
                        <select id="example-select" name="matiere" class="form-control" size="1">
                            @foreach($matieres as $matiere)
                            <option value="{{$matiere->id}}">{{$matiere->libelle_mat}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-select">Année académique</label>
                    <div class="col-md-9">
                        <select id="example-select" name="annee" class="form-control" size="1">
                            @foreach($annees as $annee)
                            <option value="{{$annee->id}}">{{$annee->libelle_aca}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="example-file-input">Fichier</label>
                    <div class="col-md-9">
                        <input type="file" id="example-file-input" name="file">
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-md-9 col-md-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Submit</button>
                        <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                    </div>
                </div>
            </form>
            <!-- END Basic Form Elements Content -->
        </div>
        <!-- END Basic Form Elements Block -->
    </div>
</div>

@endsection