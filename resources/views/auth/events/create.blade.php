<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="container-fluid bg-dark" id="nav">
       <div class="row">
            <div class="col-3">
                <h3>Event Platform</h3>

            </div>

            <div class="col-7">
                <h4>Wordskill</h4>
            </div>

            <div class="col-2">
                <a href="{{url('auth/login')}}">sign out </a>
            </div>
       </div>
    </div>

    <div class="container-fluid ">

        <div class="row">

            <div class="col-3" id="aside">
                <a  href="{{url('events')}}">Events</a><br><br>
                <a href="{{url('rooms')}}">Rooms</a><br><br>
                <a href="{{url('sessions')}}">Sessions</a><br><br>
                <a href="{{url('tickets')}}">Tickets</a><br><br>
                <a href="{{url('channels')}}">Channels</a><br><br>

            </div>

            <div class="col-9">
                <div class="row ml-2">
                    <h4>Manage Events</h4>

                </div><br>
                <hr>
                <div class="row ml-2">
                    <h5>Create new event</h5>
                </div>
                <form action="" method="POST">
                    <label for="">Name</label><br>
                    <input type="text" name="name" placeholder="Name event"  class="form-control col-6"><br><br>

                    <label for="">Slug</label><br>
                    <input type="text" name="slug" placeholder="slug"  class="form-control col-6"><br><br>

                    <label for="">Date</label><br>
                    <input type="date" name="date" placeholder="" class="form-control col-6"><br><br>
                    <div class="row">
                        <div class="col-6"><button class="btn btn-primary" type="submit">Save event</button></div>
                        <div class="col-6"> <a href="#">cancel</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
