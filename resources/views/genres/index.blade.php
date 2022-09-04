<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>List Genre | Exercise 6</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        {{-- Icon --}}
        {{-- Icon --}}
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="#page-top">Exercise Kedaireka</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('list') }}">Admin</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
        <!-- Header-->
        <section style="min-height:100vh;"class="masthead-content pt-5">
            <div class="container px-5 mt-5 pt-5">
                <div class="d-flex justify-content-between">
                    <h1 class="mb-1 fs-2">List Genre</h1>
                    <a href="{{ route('list') }}" class="btn btn-primary add ms-auto rounded-pill px-5">
                        List Buku
                    </a>
                </div>
                <hr class="mb-4">

                <table class="table table-striped table-hover table-borderless">
                    <thead id="table-head">
                        <tr>
                            <th class="text-center me-5" style="width: 8%">No.</th>
                            <th class="text-center me-5" style="width: 20%">Nama</th>
                            <th class="text-center me-5" style="width:25%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genres as $index => $item)
                            <tr class="text-center align-middle">
                                <td style="width: 8%">{{ $index + 1 }}</td>
                                <td class="text-start" style="width: 20%">{{ $item->name }}</td>
                                <td>
                                    <div class="d-flex justify-content-center mb-0">
                                        {{-- <a href="{{ route('edit', $item->id) }}" class="btn btn-success rounded-pill edit px-3">
                                            Edit <i class="ri-edit-line align-middle"></i>
                                        </a> --}}
                                        <form action="{{ route('genre_hapus', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger rounded-pill delete ms-2 px-3" type="submit">
                                                Hapus <i class="ri-delete-bin-3-line align-middle"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>

                <div class="col-3 ms-auto">
                    <a href="{{ route('genre_create') }}" class="btn btn-primary add ms-auto rounded-pill px-5 me-5">
                        Tambah Genre
                    </a>
                </div>
            </div>
    </div>
</section>
        <!-- Content section 1-->
        
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Created with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-balloon-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.49 10.92C19.412 3.382 11.28-2.387 8 .986 4.719-2.387-3.413 3.382 7.51 10.92l-.234.468a.25.25 0 1 0 .448.224l.04-.08c.009.17.024.315.051.45.068.344.208.622.448 1.102l.013.028c.212.422.182.85.05 1.246-.135.402-.366.751-.534 1.003a.25.25 0 0 0 .416.278l.004-.007c.166-.248.431-.646.588-1.115.16-.479.212-1.051-.076-1.629-.258-.515-.365-.732-.419-1.004a2.376 2.376 0 0 1-.037-.289l.008.017a.25.25 0 1 0 .448-.224l-.235-.468ZM6.726 1.269c-1.167-.61-2.8-.142-3.454 1.135-.237.463-.36 1.08-.202 1.85.055.27.467.197.527-.071.285-1.256 1.177-2.462 2.989-2.528.234-.008.348-.278.14-.386Z"/>
              </svg> by Muhammad Habib Taqiyullah</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
