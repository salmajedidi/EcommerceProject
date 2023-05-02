@extends('layouts.backLayout')
@section('title', 'PRODUCTS LIST')
@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-4 px-4 mb-4" style="background-color: white;border-radius: 0.375rem;font-size:18px;">
                    <span class="text-muted fw-light">Ajouter</span> un produit
                    <a href="{{route('product.index')}}"> <button class="primary-btn" style="float: right;">Liste des produits</button></a>
                </h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                   
                    <div class="card-body">
                      <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('success'))
                            <div class="container">
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            </div>
                        @endif
                        <div class="row my-3">

                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-name">Nom</label>
                            <div class="col-sm-4 mt-3">
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="name" id="basic-default-name" />
                                @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label for="exampleFormControlSelect1" class="col-sm-2 mt-3 col-form-label">Catégorie</label>
                            <div class="col-sm-4 mt-3">
                                <select class="form-select @error('categorie') is-invalid @enderror" name="categorie" id="exampleFormControlSelect1" >
                                    <option selected disabled>choisir une catégorie</option>
                                    @foreach($categories as $categorie)
                                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                                    @endforeach
                                </select>

                                @error('categorie')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-company">prix</label>
                            <div class="col-sm-4 mt-3">
                                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="basic-default-company"/>
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-email">Quantité</label>
                            <div class="col-sm-4 mt-3">
                                <input type="number" id="basic-default-email" name="quantity" class="form-control @error('quantity') is-invalid @enderror"/>
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label for="exampleFormControlSelect2" class="col-sm-2 mt-3 col-form-label">Fournisseur</label>
                            <div class="col-sm-4 mt-3">
                                <select class="form-select @error('fournisseur') is-invalid @enderror" name="fournisseur" id="exampleFormControlSelect2" >
                                    <option selected disabled> choisir un fournisseur </option>
                                    @foreach($fournisseurs as $fournisseur)
                                        <option value="{{$fournisseur->id}}">{{$fournisseur->nom}}</option>
                                    @endforeach
                                </select>
                                @error('fournisseur')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-phone">Image</label>
                            <div class="col-sm-4 mt-3">
                                <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="formFile" />
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-message">Description</label>
                            <div class="col-sm-10 mt-3">
                                <textarea id="basic-default-message" name="description" style="min-height: 120px" class="form-control @error('description') is-invalid @enderror"></textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-12 mt-3">
                                <button type="submit" class="primary-btn">Ajouter</button>
                            </div>

                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
          </div>
          <!-- Content wrapper -->
@endsection