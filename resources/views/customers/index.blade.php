
    <!-- add page -->
    <a href="/customers/create">Add Customer</a>

    <!-- list view -->
    <!-- <div class="container">
        <label>Active Customers List</label><hr>
        @//foreach(//$//activeCustomers as $///activeCustomer)
            <p>Name - // { // {// $ // activeCustomer//->//name }}<i>(By //{///{ //$///activeCustomer///->///company//>///name }})</i></p>
            <hr>
        @//endforeach
    </div>
    <div class="container">
        <label>Inactive Customers List</label><hr>
        ///@///foreach(///$i//nactiveCustomers as ///$///inactiveCustomer)
            <p>Name - ///{///{// /$/i/nactiveCustomer//->///name }}<i>(By ///{///{//// ///$////inactiveCustomer//->////company///->/n//ame }})</i></p>
            <hr>
        ///@///e//nd/foreach
    </div> -->

    <div class="container">
        <label>
            Customer List
        </label>
        @foreach($customers as $customer)
        <p>
        <a href="/customers/{{ $customer->company_id }}">{{ $customer->name }}</a>
              ------------------ {{ $customer->active }}</p><hr>
        @endforeach
    </div>