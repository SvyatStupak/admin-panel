@extends('layouts.admin_layout')

@section('title', 'Все категории')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Все категории</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->

    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="card">
            <div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                      <tr>
                          <th style="width: 5%">
                              ID
                          </th>
                          <th style="width: 30%">
                              Название
                          </th>
                      </tr>
                  </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{ $category['id'] }}
                            </td>
                            <td>
                                {{ $category['title'] }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Редактировать
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Удалить
                                </a>
                            </td>
                        </tr>
                      @endforeach

                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

</section>
<!-- /.content -->

@endsection





