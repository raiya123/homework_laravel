<link rel="stylesheet" href="css/app.css">
  <div class="container mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Post ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>User ID</th>
            </tr>
        </thead>
        @foreach ($posts as $item)
        <tbody>
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->body}}</td>
            <td>{{$item->user_id}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
  </div>