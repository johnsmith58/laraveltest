

<h1>Edit Detail - {{ $customer->name }}</h1>
<!-- edit -->
<form action="/customers/{{ $customer->id }}" method="POST">
    @method('PATCH')

    @include('customers.form')

    <input type="submit" value="Update">

</form>
