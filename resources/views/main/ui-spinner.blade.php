@extends('layouts.master')

@section('title', 'Modernize Bootstrap Admin')

@section('pageContent')

        @include('layouts.breadcrumb', ['title' => 'Spinner', 'subtitle' => 'Home'])
          <div class="row">
            <!-- ----------------------------------- -->
            <!-- 1. Border Spinner -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Border Spinner -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Border Spinner</h4>
                  <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </div>
              <!-- end Border Spinner -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 2. Placement Flex -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Placement Flex -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Placement Flex</h4>
                  <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end Placement Flex -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 3. Placement Flex -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Spinner Colors -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Spinner Colors</h4>
                  <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-border text-secondary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-border text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-border text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-border text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-border text-info" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-border text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </div>
              <!-- end Spinner Colors -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 4. Loading with Text -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Loading with Text -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Loading with Text</h4>
                  <div class="d-flex align-items-center">
                    <strong>Loading...</strong>
                    <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                  </div>
                </div>
              </div>
              <!-- end Loading with Text -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 5. Text Align -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Text Align -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Text Align</h4>
                  <div class="text-center">
                    <div class="spinner-border" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end Text Align -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 6. Size -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Size -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Size</h4>
                  <div class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow spinner-grow-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </div>
              <!-- end Size -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 7. Custom Style -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Custom Style -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Custom Style</h4>
                  <div class="spinner-border" style="width: 3rem; height: 3rem" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow" style="width: 3rem; height: 3rem" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </div>
              <!-- end Custom Style -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 8. Spinner with Buttons -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Spinner with Buttons -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Spinner with Buttons</h4>
                  <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="visually-hidden">Loading...</span>
                  </button>
                  <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                  </button>
                </div>
              </div>
              <!-- end Spinner with Buttons -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 9. Growing Spinner with Buttons -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Growing Spinner with Buttons -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Growing Spinner with Buttons</h4>
                  <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    <span class="visually-hidden">Loading...</span>
                  </button>
                  <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    Loading...
                  </button>
                </div>
              </div>
              <!-- end Growing Spinner with Buttons -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 10. Growing Spinner -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Growing spinner -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Growing spinner</h4>
                  <div class="spinner-grow" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-secondary" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-info" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div class="spinner-grow text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </div>
              <!-- end Growing spinner -->
            </div>

            <!-- ----------------------------------- -->
            <!-- 11. Alignment -->
            <!-- ----------------------------------- -->
            <div class="col-lg-6 d-flex align-items-stretch">
              <!-- start Alignment -->
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title mb-3">Alignment</h4>
                  <div class="spinner-border m-3" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                </div>
              </div>
              <!-- end Alignment -->
            </div>
          </div>
@endsection

@section('scripts')
@endsection
