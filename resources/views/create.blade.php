<form action="/" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name"></br></br>

    <label for="email">Email:</label>
    <input type="email" name="email"></br></br>

    <label for="password">Password:</label>
    <input type="password" name="password"></br></br>

    <label for="gender">Gender:</label>
    <!--select box-->
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select></br> </br>

    <label for="birthday">Birthday:</label>
    <input type="date" name="birthday"></br></br>

    <label for="status">Status Active:</label>
    <!--check box-->
    <input type="checkbox" id="status" name="status" value="active"><br></br>
    
    <button>Submit</button>
    <button>Go to Table Page</button>
</form>