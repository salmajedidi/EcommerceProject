@extends('layouts.backLayout')
@section('title', 'fournisseurS LIST')
@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-4 px-4 mb-4" style="background-color: white;border-radius: 0.375rem;font-size:18px;">
            <span class="text-muted fw-light">Total</span> 250 Fournisseurs
            <a href="{{route('fournisseur.create')}}"> <button class="primary-btn" style="float: right;">Ajouter un Fournisseur</button></a>
        </h4>
        
        <!-- Borderless Table -->
        <div class="card">
            <h5 class="card-header">Fournisseurs</h5>
            <div class="table-responsive text-nowrap">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th>Ref</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>Société</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($fournisseurs as $fournisseur)
                    <tr>
                        <td>N° {{$fournisseur->id}}</td>
                        <td><strong>{{$fournisseur->nom}}</strong></td>
                        <td>{{$fournisseur->prenom}}</td>
                        <td>{{$fournisseur->adresse}}</td>
                        <td>{{$fournisseur->societe}}</td>
                        <td>{{$fournisseur->email}}</td>
                        <td>{{$fournisseur->tel}}</td>
                        <td>
                            <a class="btn-link" href="javascript:void(0);"><span class="badge rounded-pill bg-label-success"><i class="bx m-0 mx-1 bx-show-alt me-1"></i></span></a>
                            <a class="btn-link" href="javascript:void(0);"><span class="badge rounded-pill bg-label-warning"><i class="bx m-0 mx-1 bx-edit-alt me-1"></i></span></a>
                            <a class="btn-link" href="javascript:void(0);"><span class="badge rounded-pill bg-label-danger"><i class="bx m-0 mx-1 bx-trash me-1"></i></span></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <!--/ Borderless Table -->

        <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
@endsection