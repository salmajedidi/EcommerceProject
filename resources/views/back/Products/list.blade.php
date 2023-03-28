@extends('layouts.backLayout')
@section('title', 'PRODUCTS LIST')
@section('content')
 <!-- Content wrapper -->
 <div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-4 px-4 mb-4" style="background-color: white;border-radius: 0.375rem;font-size:18px;">
            <span class="text-muted fw-light">Total</span> 250 produits
            <a href="{{route('product.create')}}"> <button class="primary-btn" style="float: right;">Ajouter un produit</button></a>
        </h4>
        
        <!-- Borderless Table -->
        <div class="card">
            <h5 class="card-header">Produits</h5>
            <div class="table-responsive text-nowrap">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th>Ref</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Fournisseur</th>
                    <th>prix</th>
                    <th>Quantité</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>N° {{$product->id}}</td>
                        <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                <img src="{{asset('/backAssets/img/products/'.$product->image)}}" alt="" class="rounded-circle" />
                            </li> 
                            <li class="ml-2"><strong>{{$product->name}}</strong></li>
                        </ul>
                        
                        </td>
                        <td>{{$product->categorie}}</td>
                        <td>{{$product->fournisseur}}</td>
                        <td>{{$product->price}} DT</td>
                        <td>{{$product->quantity}}</td>
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