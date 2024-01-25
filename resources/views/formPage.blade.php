    {{-- display error message when submit empty form --}}
    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- form --}}
    <form action="/" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name"></br></br>

    <label for="email">Email:</label>
    <input type="email" name="email"></br></br>

    <label for="password">Password:</label>
    <input type="password" name="password"></br></br>

    <label for="gender">Gender:</label>
    {{--select box--}}
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select></br> </br>

    <label for="birthday">Birthday:</label>
    <input type="date" name="birthday"></br></br>

    <label for="status">Status Active:</label>
    {{--check box--}}
    {{--value='0' for inactive user--}}
    <input type='hidden' value='0' name='status'>
    {{--value='1' for active user--}}
    <input type="checkbox" id="status" name="status" value="1"><br></br>
    
    <button>Submit</button>
    {{-- redirect to table page --}}
    <button><a href="/tablePage">Go to Table Page</a></button>
</form>