<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
                /* The side navigation menu */
        .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
        margin-left: -200px;
        font-family:Verdana, Geneva, Tahoma, sans-serif ;
        border-radius: 15px;
        }

        /* Sidebar links */
        .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
        }

        /* Active/current link */
        .sidebar a.active {
        background-color: #04AA6D;
        color: white;
        }

        /* Links on mouse-over */
        .sidebar a:hover:not(.active) {
        background-color: #555;
        color: rgb(0, 0, 0);
        width: 350px; /* Expands width on hover */
        height: auto; /* Adjusts height automatically */
        padding: 25px; /* Increases inner spacing */
        background-color: #85808b; /
    }


        /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
        div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
        }

        .test {
            margin-bottom: 20px;
        }

        /* .header1 {
            padding-left: -400px; 
        } */
        .header1 a:hover:not(.active) {
        /* background-color: #555; */
        color: rgb(0, 0, 0);
        width: 100px; /* Expands width on hover */
        height: auto; /* Adjusts height automatically */
        padding: 10px; /* Increases inner spacing */
        /* background-color: #85808b; / */
        border-radius: 10px; /* Adjust the value for how much curve you want */
        /* background-color: #f0f0f0; Optional: Add a hover background color */
        transition: all 0.3s ease; /* Smooth transition for hover effect */

        }



        .logout {
            /* background-color: #555; */
            color: rgb(0, 0, 0);
            /* width: 350px; Expands width on hover */
        }

        .logout:hover {
            background-color: #555;
            color: rgb(0, 0, 0);
            border-radius: 10px;
            /* width: 350px; Expands width on hover */
        }

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Optional: to prevent scrolling if content overflows */
        }

        .background1 {
            background-image: url('https://img.freepik.com/free-photo/front-view-cute-young-girl-boy-posing-together_23-2148465743.jpg?t=st=1734549304~exp=1734552904~hmac=7cc7a223a0309ce6dc2e06bbddbc2225a04d58b4906300b07c82b1a86bae4202&w=996');
            background-size: cover; /* Ensure the image covers the entire page */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent tiling */
            filter: blur(5px); /* Apply blur effect */
            position: fixed; /* Ensure it stays in place during scrolling */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Ensure it's behind other content */
        }

        /* Overlay effect */
        .background-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
            z-index: -1; /* Ensure it's behind other content but above the background image */
        }
                .navbar-brand {
            border-radius: 10% ; /* Adjust the value for the desired curve */
            padding: 5px 10px; /* Optional: Add padding for spacing */
            background-color: #f8f9fa; /* Optional: Add a background color */
            color: #343a40; /* Optional: Set text color */
            /* text-decoration: none; /* Remove underline from link */
            display: inline-block; Ensure proper alignment with rounded corners */
            transition: all 0.3s ease; /* Optional: Add smooth hover effect */
        }

        .navbar-brand:hover {
            background-color: #ffffff; /* Optional: Change background on hover */
            color: #ffffff; /* Optional: Change text color on hover */
        }

        .nav-item:hover{
            background-color: #1b29c41f; /* Optional: Change background on hover */
            color: #1478dd; 
            border-radius: 10px;
        }

        .navbar-brand {
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; /* Change to your desired font */
            font-size: 20px; /* Adjust font size */
            font-weight: bold;
            /* font-style: italic; Apply italic styling (or use 'normal') */
            color: #343a40; /* Change text color */
            text-transform:none; /* Optional: Make text uppercase */
         }
         nav.navbar.test.header1 { 
            /* topic with white color box */
            background-color: #f8f9fa; /* Change background color */
           
            /* box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); Add shadow */
            padding: 20px; /* Add more padding */
            font-family: 'Arial', sans-serif; /* Change font */
            border-radius: 15px ; 
}

       
       
        

         



        /* On screens that are less than 700px wide, make the sidebar into a topbar */
        @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
            margin-left: 200px;
        }
        .sidebar a {float: left;}
        div.content {margin-left: 0;}
        }

        /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
        @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
        }

    </style>
</head>
<body>
  <div class="container header1">
    
            <div class="row ">
                <div class="col-md-10"> 

{{-- header        --}}

<div class="header1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light test header1">
        <a class="navbar-brand" href="#">Student Management System</a>
        {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> --}}

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @auth
                    <!-- Profile Page Button -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                    </li>
        
                    <!-- Logout Button -->
                    <li class="nav-item">

                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link logout" style="cursor: pointer;">Log Out</button>
                            {{-- <a class="nav-link" href="{{ route('profile.edit') }}">Log Out</a> --}}

                        </form>
                    </li>
                @else
                    <!-- Login and Register Buttons -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log in</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @endauth
            </ul>
        </div>
        
        <div class="background1">   
        
        </nav>
    </div>
        </div>
    </div>
    <div class="row">
    <div class="col-md-1"> 
        <!-- The sidebar -->
        <div class="sidebar">
        <a class="active" href="#home">Home</a>
        <a href="{{ url('/students')}}">Notice</a>
        <a href="{{ url('/students1')}}">Students</a>
        <a href="{{ url('/teachers')}}">Teachers</a>
        <a href="#contact">Courses</a>
        <a href="#about">Enrollment</a>
        <a href="#about">Payment</a>
        </div>

 
    </div>
    <div class="col-md-9">
        <div class="content">
            @yield("content")
        </div>

    </div>
    </div>

  </div>
</div>
    


</body>
</html>