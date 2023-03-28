@extends('layouts.backLayout')
@section('title', 'PRODUCTS LIST')
@section('content')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-4 px-4 mb-4" style="background-color: white;border-radius: 0.375rem;font-size:18px;">
                    <span class="text-muted fw-light">Ajouter</span> un catégorie
                    <button class="primary-btn" style="float: right;">Liste des catégories</button>
                </h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                   
                    <div class="card-body">
                      <form method="POST" action="{{route('categorie.store')}}" enctype="multipart/form-data">
                        @csrf
                        @if(session()->has('success'))
                            <div class="container">
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            </div>
                        @endif
                        <div class="row my-3">

                            <label class="col-sm-1 mt-3 col-form-label" for="basic-default-name">Nom</label>
                            <div class="col-sm-9 mt-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="basic-default-name" />
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-sm-1 mt-3">
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