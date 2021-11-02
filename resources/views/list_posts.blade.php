<table>
    <thead>
        <th>UserID</th>
        <th>id</th>
        <th>title</th>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
        <td>{{$post->userId}}</td>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <tr>
        @endforeach
    </tbody>
</table>