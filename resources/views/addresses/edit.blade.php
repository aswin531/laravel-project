<form action="{{ route('UpdateAddress', $address) }}" method="POST" class="address-form">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $address->name }}" required>
    </div>

    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" value="{{ $address->phone_number }}" required>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ $address->address }}" required>
    </div>

    <button type="submit">Update</button>
</form>


<style>
    .address-form {
    width: 300px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 10px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button[type="submit"] {
    background-color: #4c555f;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #3d444c;
}

</style>