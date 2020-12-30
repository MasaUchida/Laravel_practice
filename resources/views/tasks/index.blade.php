<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="id=edge">
        <title>To Do App</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <header>
            <nav class="my-navbar">
                <a class="my-navbar-brand" href="/">To Do App</a>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col col-md-4">
                        <nav class="panel panel-default">
                            <div class="panel-heading">フォルダ</div>
                            <div class="panel-body">
                                <a href="#" class="btn btn-default btn-black">フォルダを追加する</a>
                            </div>
                            <div class="list-group">
                                @foreach($folders as $folder)
                                    <a href="{{route('tasks.index',['id'=>$folder->id])}}" class="list-group-item {{$current_folder_id === $folder->id ? 'active' : ''}}">
                                        {{ $folder->title }}
                                    </a>
                                @endforeach
                            </div>
                        </nav>
                    </div>
                    <div class="column col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">タスク</div>
                            <div class="panel-body">
                                <div class="text-right">
                                    <a href="#" class="btn btn-default btn-black">タスクを追加する</a>
                                </div>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>タイトル</th>
                                        <th>状態</th>
                                        <th>期限</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>{{ $task->title }}</td>
                                            <td>
                                                <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
                                            </td>
                                            <td>{{ $task->formatted_due_date }}</td>
                                            <td><a href="#">編集</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>