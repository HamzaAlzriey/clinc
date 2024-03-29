﻿@extends('layouts.app')
@section('content')
    

<div class="container" style="margin-top:100px">
    <hr />
    <div class="row">
        <div class="col-sm-10">
            <h1>Profile</h1>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-3">
            <!-- left col -->

            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                    class="avatar rounded-circle img-thumbnail" alt="avatar" />
                <h6>Upload a different photo...</h6>
                <input type="file" class="text-center center-block file-upload" />
            </div>
            <br />
        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">
            <form class="form" action="profile/{{$profile->id}}" method="POST" id="registrationForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="first_name">
                            <h4>First name</h4>
                        </label>
                        <input type="text" class="form-control" name="firstName" id="first_name"
                            placeholder="first name" title="enter your first name if any." 
                            value="{{$profile->firstName}}"
                            />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="last_name">
                            <h4>Last name</h4>
                        </label>
                        <input type="text" class="form-control" name="lastName" id="last_name"
                            placeholder="last name" title="enter your last name if any." 
                            value="{{$profile->lastName}}"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="phone">
                            <h4>Phone</h4>
                        </label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="enter phone"
                            title="enter your phone number if any."  value="{{$profile->phone}}"/>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Email</h4>
                        </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com"
                            title="enter your email." value="{{$profile->email}}"  />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="email">
                            <h4>Location</h4>
                        </label>
                        <input type="text" class="form-control" id="location" placeholder="somewhere"
                            title="enter a location" value="soon" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br />
                        <button class="btn btn-lg btn-success  d-flex" type="submit">
                            <i class="material-icons mr-1"> save </i> Save
                        </button>
                    </div>
                </div>
            </form>

            <hr />
        </div>
        <!-- /tab-content -->
    </div>
    <!-- /col-9 -->

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2019 Maba</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

@endsection
