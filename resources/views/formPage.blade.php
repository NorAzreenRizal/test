<style>
input[type=text],input[type=email],input[type=password],input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button, a {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover, a:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  
}

.center {
  margin: auto;
  width: 50%;
  border: 3px solid black;
  padding: 10px;
}
.error {
    color: red;
}
a {
  color: white;
  text-decoration: none; /* no underline */
}

</style>
    <div style="width:50%; align:center; " class="center">
        {{-- form --}}
        <form action="/" method="POST">
        @csrf
            <div style="padding: 20px;">
                <input placeholder="Name" type="text" name="name">
                @error('name')
                <div class="error">{{ $message }}</div>
                @enderror

                <input placeholder="Email" type="email" name="email">
                @error('email')
                <div class="error">{{ $message }}</div>
                @enderror

                <input placeholder="Password" type="password" name="password">
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror

                <label for="gender">Gender:</label>
                {{--select box--}}
                <select placeholder="Gender" name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label for="birthday">Birthday:</label>
                <input placeholder="Birthday" type="date" name="birthday">
                @error('birthday')
                <div class="error">{{ $message }}</div>
                @enderror


                <label for="status">Status Active:</label>
                {{--check box--}}
                {{--value='0' for inactive user--}}
                <input type='hidden' value='0' name='status'>
                {{--value='1' for active user--}}
                <input type="checkbox" id="status" name="status" value="1">
                
                <button type="submit">Submit</button>
            </div>
            <div style="margin: auto ;width: 19%;padding: 10px;">
            {{-- redirect to table page --}}
            <a  href="/tablePage">Go to Table Page</a>
            </div>
            
        </form>
    </div>