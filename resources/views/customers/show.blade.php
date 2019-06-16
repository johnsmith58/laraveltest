

<div class="container">

    <h1>Detail for {{ $customer->name }}</h1>

    <a href="/customers/{{ $customer->id }}/edit">Edit</a>

    <p><strong>Name : </strong>{{ $customer->name }}</p>
    <p><strong>Email : </strong>{{ $customer->email }}</p>
    <p><strong>Company : </strong>{{ $customer->company->name }}</p>

</div>
