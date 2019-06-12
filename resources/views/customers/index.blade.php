
    <form action="customers" method="POST">

        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email</label>
        <input type="text" name="email" value="{{ old('email') }}"><br><br>

        <label>Active</label>
        <select name="active" id="active">
            <option value="" disabled >Select Customer Status</option>
            <option value="1">Active</option>
            <option value="2">Interactive</option>
        </select>

        <div>
            {{ $errors->first('name') }}
            {{ $errors->first('email') }}
        </div>

        <input type="submit" value="Submits">

        @csrf
    </form>

    <div class="container">
        <label>Customers List</label><hr>
        @foreach($customers as $customer)
            <p>Name - {{ $customer->name }}<i>(By {{ $customer->email }})</i><b>{{ $customer->active }}</b></p>
            <hr>
        @endforeach
    </div>

