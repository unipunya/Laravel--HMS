@extends("layouts.default")
@section("title", "Hospitalmanagement - Home")
@section("content")
    <main class="container" style="max-width: 2000px">
        <section>
        <header className="app-header" style=" background: linear-gradient(135deg, #45a049, #3f51b5); color: white; padding: 20px 10px; margin-bottom: 50px; border-radius: 8px;">
                <h1 style="font-size: 2.5rem; margin-bottom: 10px; text-align: center;">Welcome to the Hospital Management System</h1>
                <p style="text-align: center;">Your one-stop solution for managing hospital operations efficiently.</p>
                </header>

                <div>
                                <h2 style="text-align: center;">-Cornerstone of Medical Efficiency-</h2>
                                <div className="features-section" style="display: flex; justify-content: space-around; margin-top: 50px;margin-bottom: 70px;">
                                    <div className="feature" style="background: linear-gradient(135deg, #9ed6a1, #9ea4c5); padding: 15px; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); max-width: 300px; text-align: left;">
                                        <h3>Easy Appointment Booking</h3>
                                        <p>Schedule your appointments with doctors easily through our platform.</p>
                                    </div>
                                    <div className="feature" style="background: linear-gradient(135deg, #9ed6a1, #9ea4c5); padding: 15px; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); max-width: 300px; text-align: left;">
                                        <h3>Efficient Patient Management</h3>
                                        <p>Seamlessly manage patient records and treatment histories.</p>
                                    </div>
                                    <div className="feature" style="background: linear-gradient(135deg, #9ed6a1, #9ea4c5); padding: 15px; border-radius: 8px; box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); max-width: 300px; text-align: left;">
                                        <h3>Advanced Reporting</h3>
                                        <p>Generate insightful reports to make better healthcare decisions.</p>
                                    </div>
                                </div>


            <div class="row">
            @foreach($services as $service)
            <div class="col-12 col-md-6 col-lg-7">
                <div class="container" style="background-color:rgb(207, 227, 215); width:1250px; ">
                    <div style="margin: bottom 70px; ">
                <img style="margin-top: 10px;" src="{{$service->image}}" width="250px" height="250px">
                <div>
                    <h2><a style="color: black; margin-top: 40px; text-decoration:none;" href="{{route('services.details', $service->slug)}}">{{$service->title}}</a></h2>
                <p style="margin-bottom: 40px;">{{$service->description}}</p>
                </div>
                </div>
                </div>
                </div>
            @endforeach
            </div>
             
        </section>
    </main>
@endsection