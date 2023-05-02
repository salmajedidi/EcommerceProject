@extends('layouts.backLayout')
@section('title', 'PRODUCTS LIST')
@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-4 px-4 mb-4" style="background-color: white;border-radius: 0.375rem;font-size:18px;">
                    <span class="text-muted fw-light">Ajouter</span> un fournisseur
                    <a href="{{route('fournisseur.index')}}"> <button class="primary-btn" style="float: right;">Liste des fournisseurs</button></a>
                </h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                   
                    <div class="card-body">
                      <form method="POST" action="{{route('fournisseur.store')}}" enctype="multipart/form-data">
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
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="basic-default-name" />
                                @error('nom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-name">Prénom</label>
                            <div class="col-sm-4 mt-3">
                                <input type="text" class="form-control @error('prenom') is-invalid @enderror"  name="prenom" id="basic-default-name" />
                                @error('prenom')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-company">Adresse</label>
                            <div class="col-sm-4 mt-3">
                                <input type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="basic-default-company"/>

                                @error('adresse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            
                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-company">Société</label>
                            <div class="col-sm-4 mt-3">
                                <input type="text" class="form-control @error('societe') is-invalid @enderror" name="societe" id="basic-default-company"/>
                                @error('societe')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-email">Email</label>
                            <div class="col-sm-4 mt-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="basic-default-email" name="email" class="form-control"/>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <label class="col-sm-2 mt-3 col-form-label" for="basic-default-email">Téléphone</label>
                            <div class="col-sm-4 mt-3">
                                <input type="tel" id="basic-default-email" class="form-control @error('tel') is-invalid @enderror" name="tel" class="form-control"/>
                                @error('tel')
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