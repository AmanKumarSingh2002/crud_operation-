<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
     <form action="/update/{{$data->id}}" method="post">
        @csrf 
        <input type="hidden" name="_method" value="put">
        <div>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Enter email">
        </div>
        <div>
            <input type="text" name="name"  value="{{$data->name}}" placeholder="Enter name">
        </div>
        <div>
            <input type="text" name="username"  value="{{$data->username}}" placeholder="Enter username">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
     </form>
</div>
