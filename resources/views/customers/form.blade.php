
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') ?? $customer->name }}"><br><br>

        <label>Email</label>
        <input type="text" name="email" value="{{ old('email') ?? $customer->email }}"><br><br>

        <label>Active</label>
        <select name="active" id="active">
            <option value="1" {{ $customer->active == 'Active' ? 'selected' : '' }}>Active</option>
            <option value="2" {{ $customer->active == 'Inactive' ? 'selected' : '' }}>Inactive</option>
        </select>

        <label>Company</label>
        <select name="company_id" id="company_id">
        @foreach($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
            <hr>
        @endforeach
        </select>

        <div>
            {{ $errors->first('name') }}
            {{ $errors->first('email') }}
        </div>

        @csrf 