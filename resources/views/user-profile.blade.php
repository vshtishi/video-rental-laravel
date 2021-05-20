@extends('layouts.app')

@section('head_scripts')
    <script>
        var loadFile = function (event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
@section('content')
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Account settings
        </h4>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                           href="#account-change-password">Change password</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-my-booking">My Bookings</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-offers">Look for offers</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-signout">Sign Out</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="card-body media align-items-center">

                                <img id="output"
                                     src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt=""
                                     class="d-block ui-w-80 img-fluid">
                                <div class="media-body ml-4">
                                    <label for="file" class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput" accept="image/*" id="file"
                                               onchange="loadFile(event)" style="display: none;">
                                    </label>

                                    <div class="text-light small mt-1">JPG, GIF or PNG</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control mb-1" value="First Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" value="Last Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" value="Username">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <input type="text" class="form-control mb-1" value="name@gmail.com">
                                </div>
                            </div>
                        </div>

                        <!--change password-->
                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">Current password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">New password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Repeat new password</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!--info-->
                        <div class="tab-pane fade" id="account-info">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">Bio</label>
                                    <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                </div>
                            </div>
                        </div>

                        <!--My bookings-->
                        <div class="tab-pane fade" id="account-my-booking">
                            <div class="card-body pb-2">

                                <div class="form-group">
                                    <label class="form-label">bokings</label>
                                    <h2>My bookings will apear here</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-right mt-3">
            <button type="button" class="btn btn-primary">Save changes</button>&nbsp;
            <button type="button" class="btn btn-default">Cancel</button>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@endsection
