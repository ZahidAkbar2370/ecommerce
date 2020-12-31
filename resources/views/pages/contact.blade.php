@extends('layout')
@section('content')
    

<form action="{{URL::to('/message')}}" method="post">
                        @csrf()
                        @if(!empty($messages))
                        {{$messages}}
                        @endif
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h1><i class="fa fa"></i>Contact Us</h1>
                                    <p class="m-0">Enter Your Detail</p>
                                </div>
                            </div>
                            <div class="card-body p-3" style="margin-left: 34%">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Enter Name" required style="width:320px">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="example@gmail.com" style="width:320px" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" placeholder="Your Message" name="message" style="width:320px" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Send Message" class="btn btn-info btn-block rounded-0 py-2" style="width:200px">
                                </div>
                            </div>

                        </div>
                    </form>



@endsection