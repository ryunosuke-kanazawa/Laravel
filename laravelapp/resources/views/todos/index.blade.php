<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoリスト</title>
</head>
<body>
    <div class="container mt-3">
        <h1>Todoリスト</h1>
    </div>
    <div class="container mt-3">
        <div class="container mb-4">
            {!! Form::open(['route' => 'todos.store', 'method' => 'POST']) !!}
            {{ csrf_field() }}
                <div class="row">
                    {{ Form::text('newTodo', null, ['class' => 'form-control col-8 mr-5']) }}
                    {{ Form::date('newDeadline', null, ['class' => 'mr-5']) }}
                    {{ Form::submit('新規追加', ['class' => 'btn btn-primary']) }}
                </div>
            {!! Form::close() !!}
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col" style="width: 60%">Todo</th>
                    <th scope="col">期限</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="todo">やること</th>
                    <td>2022年9月6日</td>
                    <td><a href="" class="btn btn-primary">編集</a></td>
                    <td>{{ Form::submit('削除', ['class' => 'btn btn-danger']) }}</td>
                </tr>
                <tr>
                    <th scope="row">やることやることやることやることやることやることやることやることやることやることやることやることやることやることやることやることやることやることやることやることやることやること</th>
                    <td>2020年9月7日</td>
                    <td><a href="" class="btn btn-primary">編集</a></td>
                    <td>{{ Form::submit('削除', ['class' => 'btn btn-danger']) }}</td>
                </tr>
                <tr>
                    <th scope="row">やることやること</th>
                    <td>2022年9月8日</td>
                    <td><a href="" class="btn btn-primary">編集</a></td>
                    <td>{{ Form::submit('削除', ['class' => 'btn btn-danger']) }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>