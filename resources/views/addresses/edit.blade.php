<form action="{{ route('UpdateAddress', $address) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $address->name }}" required>

    <label for="phone_number">Phone Number</label>
    <input type="text" name="phone_number" id="phone_number" value="{{ $address->phone_number }}" required>

    <label for="address">Address</label>
    <input type="text" name="address" id="address" value="{{ $address->address }}" required>

    <button type="submit">Update</button>
</form>
