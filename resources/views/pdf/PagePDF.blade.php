<!DOCTYPE html>
<html lang="en">

<style>
    .list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }
    
</style>

<body class="vertical dark ">
    <div class="wrapper">
        <main role="main" class="main-content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-md-12 my-4">
                                <h2 class="h4 mb-1">Details </h2>
                                <div class="card shadow">
                                    <div class="card-body">

                                        <table border="2">
                                            <thead>
                                                <tr>
                                                    <th>Caractere</th>
                                                    <th>Nombre</th>
                                                    <th>Date</th>
                                                    <th>Temps</th>
                                                    <th>Date et temps</th>
                                                    <th>Texte</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <tr>
                                                        <td>{{ $type->caractere }}</td>
                                                        <td>{{ $type->nombre }}</td>
                                                        <td>{{ $type->daty }}</td>
                                                        <td>{{ $type->times }}</td>
                                                        <td>{{ $type->datytime }}</td>
                                                        <td>{{ $type->texte }}</td>
                                                    </tr>
                                            </tbody>
                                        </table>

                                        <h2>Bonjour</h2>

                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>ID</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($image as $img)
                                                    <tr>
                                                        <td>{{ $img->id }}</td>
                                                        <td>
                                                            <div class="avatar avatar-md">
                                                                <img src="{{ $img->image }}" alt="..."
                                                                    class="avatar-img rounded-circle" style="width: 100px; height: 100px;">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>