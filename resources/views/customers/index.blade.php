
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
        <label>Active Customers List</label><hr>
        @foreach($activeCustomers as $activeCustomer)
            <p>Name - {{ $activeCustomer->name }}<i>(By {{ $activeCustomer->email }})</i><b>{{ $activeCustomer->active }}</b></p>
            <hr>
        @endforeach
    </div>
    <div class="container">
        <label>Inactive Customers List</label><hr>
        @foreach($inactiveCustomers as $inactiveCustomer)
            <p>Name - {{ $inactiveCustomer->name }}<i>(By {{ $inactiveCustomer->email }})</i><b>{{ $inactiveCustomer->active }}</b></p>
            <hr>
        @endforeach
    </div>

