@include('comman.header')
<div class="container">
     <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
     <form action="/addStudents" method="post">
      @csrf
       <div class="input"> <input type="text " placeholder="Enter the name" name="name" ></div>
        <div class="input"><input type="email" placeholder="enter yur email" name="email"></div>
        <div class="input"><input type="text" placeholder="Enter your username" name="username"></div>
       <div> <button>Submit</button></div>
     </form>
</div>
