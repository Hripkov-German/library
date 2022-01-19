@extends('layouts.app')

@section('template_title')
    Book
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Книги') }}
                            </span>

{{--                            Фильтр по авторам--}}
                            <form method="GET">
                                <select name="author_filter">
                                    @foreach(App\Models\Author::all() as $author)
                                        <option value="{{ $author->name }}">{{ $author->name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm float-right">Выбрать автора</button>
                            </form>

                             <div class="float-right">
                                <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Добавить') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <?php
                    if (isset($_GET['author_filter'])) {
                        $books = App\Models\Book::whereHas('authors', function ($i) {
                            $i->where('name', '=', $_GET['author_filter']);
                        })->paginate();
                    }
                    ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">

                                <thead class="thead">
                                    <tr>
                                        <th>id</th>

										<th>Название</th>
                                        <th>Автор(ы)</th>
										<th>Год издания</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                            <td>{{ $book->id }}</td>

											<td>{{ $book->title }}</td>
                                            <td>@foreach($book->authors as $author)
                                                    {{ $author->name }};
                                                @endforeach</td>
											<td>{{ $book->date_published }}</td>

                                            <td>
                                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">
{{--                                                    <a class="btn btn-sm btn-primary " href="{{ route('books.show',$book->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>--}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('books.edit',$book->id) }}"><i class="fa fa-fw fa-edit"></i> Редактировать</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Удалить</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $books->links() !!}
            </div>
        </div>
    </div>
@endsection
