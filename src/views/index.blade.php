<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messaging</title>
</head>
<body>
    <h4>Send a message</h4>
    <div class="container-fluid">
        <div class="row">
         <form method="post" action="{{ route('message.send') }}">
             @csrf
             <div class="form-group row">
                 <div class="col-md-6">
                     <label class="form-label">Email</label>
                     <input type="text" name="email" class="form-control" placeholder="Enter your email">
                 </div>
             </div>
             <div class="form-group row">
                 <label class="form-label">Message</label>
                 <textarea class="form-control" placeholder="Enter some message" name="message"></textarea>
             </div>
             <div class="col-md-6 col-md-offset-4">
                 <button type="submit">Send</button>
             </div>
         </form>
        </div>
    </div>
</body>
</html>
