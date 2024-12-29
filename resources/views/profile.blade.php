@extends("layouts.default")
@section("title", "Hospitalmanagement - Home")
@section("content")
    <main class="container" style="max-width: 2000px" >
        <section>
        <div className="profile-container" style="padding: 20px;  max-width: 600px; margin-top: 40px; margin-left:450px; background-color: #f9f9f9; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); ">
            <h1 style="text-align: center; margin-bottom: 20px;">Welcome, Udari Nipunya</h1>
            <p>Email: hdunipunya@gmail.com</p>
            
            <h2>Your Consultations</h2>
            <ul style="list-style: none; padding: 0;">
                
                    <li style="margin: 10px 0; background: #fff;  padding: 10px; border: 1px solid #ddd; border-radius: 4px;" key={index}>
                        <strong>Date:</strong> 12/29/2024, 
                        <strong> Doctor:</strong> Dr.Peramuna Fernando, 
                        <strong> Status:</strong> ongoing
                    </li>
                
            </ul>

            <div className="update-password-container" style="max-width: 400px; margin: 50px auto; padding: 20px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); font-family: 'Arial', sans-serif; text-align: center;">
            <h2>Update Password</h2>
<form action="{{ route('profile.update-password') }}" method="POST">
    @csrf
    @method('PUT')

    <div style=" margin-bottom: 15px; text-align: left;">
        <label for="current_password" style="display: block; font-weight: bold; margin-bottom: 5px; color: #555;">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 4px; outline: none; box-sizing: border-box;">
    </div>
    <div style=" margin-bottom: 15px; text-align: left;">
        <label for="new_password" style="display: block; font-weight: bold; margin-bottom: 5px; color: #555;">New Password:</label>
        <input type="password" id="new_password" name="new_password" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 4px; outline: none; box-sizing: border-box;">
    </div>
    <div style=" margin-bottom: 15px; text-align: left;">
        <label for="new_password_confirmation" style="display: block; font-weight: bold; margin-bottom: 5px; color: #555;">Confirm New Password:</label>
        <input type="password" id="new_password_confirmation" name="new_password_confirmation" required style="width: 100%; padding: 10px; font-size: 1em; border: 1px solid #ddd; border-radius: 4px; outline: none; box-sizing: border-box;">
    </div>
    <button type="submit" style="display: block; width: 100%; padding: 10px 15px; background-color: #007bff; color: #fff; font-size: 1em; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">Update Password</button>
</form>
            </div>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<div className="delete-profile-container" style="max-width: 400px; margin: 50px auto; padding: 20px; background-color: #fff8f8; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); font-family: 'Arial', sans-serif; text-align: center;">
<form action="{{ route('profile.delete') }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger" style="display: inline-block; padding: 10px 20px; background-color: #dc3545; color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;">Delete Profile</button>
</form>
</div>
        </div>
        </section>
    </main>
@endsection