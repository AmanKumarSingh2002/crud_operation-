<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
     @include('comman.header')
     <h1>Student List</h1>
     <a href="/form"><button>Create</button></a>
     <form action="{{'/search'}}" method="get">
        @csrf
     <input type="text" placeholder="Search for the student " name="search"> <button><i class='bx bx-search'></i></button>
     </form>
     <a href="/getStudents"><button>Get All Students</button></a>
     <form action="/multiDelete" method="post" >
        @csrf
     <table>
        <tr>
            <th>Select</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Username</th>
            <th colspan=>Operations</th>
        </tr>
        @foreach($students as $s)
        <tr>
            <th><input type="checkbox" name="id[]" value="{{$s->id}}"></th>
            <th>{{$s->id}}</th>
            <th> {{$s->name}} </th>
            <th>{{$s->email}}</th>
            <th>{{$s->username}}</th>
            <th><a href="{{'/edit/'.$s->id}}"><button>Edit</button></th>
            <th><a href="{{'delete/'.$s->id}}"><button>Delete</button><a></th>
        </tr>
        @endforeach
     </table>
     <button type="submit">Delete</button>
     </form>
     <br><br>
     {{$students->links()}}
</div>
<style>
    .w-5.h-5{
        width:30px;
    }
</style>
