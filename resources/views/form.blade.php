<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Contact Form #1</title>
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row align-items-center">
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <h2 class="mb-5">Fill the form. <br> It's easy.</h2>
                        <form method="POST" action="{{ url('form-store') }}" id="form-store" name="form-store" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="subsidiary">Subsidiary:</label>
                                    <input type="text" class="form-control" name="subsidiary" id="subsidiary" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="cluster">Cluster:</label>
                                    <input type="text" class="form-control" name="cluster" id="cluster" placeholder="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="supervisor_name">Name of Supervisor:</label>
                                    <input type="text" class="form-control" name="supervisor_name" id="supervisor_name" placeholder="">
                                </div>
                            </div>
                            <br>
                            <h3>Please Choose Yes or No</h3>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="attention_pledge">I pledge to give the customer my utmost attention and
                                        priority in his/her dealings with JGC by doing the following:</label>
                                    <ul>
                                        <li>I will be at my workstation on or before 08:00 a.m. each working day.</li>
                                        <li>I will answer the telephone by the third ring professionally.</li>
                                        <li>I will serve the customer politely and promptly.</li>
                                        <li>I will go the 'extra mile' to delight the customer.</li>
                                        <li>I will be a good team player.</li>
                                        <li>I will upgrade myself and assist my colleagues acquire knowledge and skills.</li>
                                        <li>I will ensure my work is completed within the appropriate time frame.</li>
                                        <li>I will demonstrate JGC's core values in my dealings with the customer.</li>
                                        <li>I will dress appropriately to conform to JGC's dress code.</li>
                                        <li>I will show respect to my customers, supervisors, peers, and subordinates at all times.</li>
                                    </ul>
                                    <br>
                                    <input type="radio" name="attention_pledge" value="yes" required> Yes
                                    <input type="radio" name="attention_pledge" value="no" required> No
                                </div>
                            </div>
                            <br>
                            <h3>Upload Documents:</h3>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="passport_photo">Upload Passport Photograph:</label>
                                    <input type="file" name="passport_photo" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="signature">Upload Signature:</label><br>
                                    <input type="file" name="signature" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>


                        <div id="form-message-warning mt-4"></div>
                        <div id="form-message-success" style="display:none;">
                            Your message was sent, thank you!
                        </div>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <h3 class="mb-4">Let's talk about everything.</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique
                            magni. Magni, laboriosam perferendis maxime!</p>
                        <p><a href="#">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
