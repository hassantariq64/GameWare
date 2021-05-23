
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\style5.css">
    <link rel="stylesheet" href="css\style6.css">
</head>
<body>
<section class="get-in-touch">
   <h1 class="title">Bug & Error Forum</h1>
   <form class="contact-form row" action="{{url('/bug_forum')}}" method="POST">
   @csrf
     <!-- <div class="form-field col-lg-12 ">
         <input id="user_id" class="input-text js-input" type="text" required>
         <label class="label" for="company">User Id</label>
      </div> -->

      <div class="form-field col-lg-12 ">
         <input id="user_id" name="user_id" class="input-text js-input" type="text" required>
         <label class="label" for="user_id">User Id</label>
      </div>

      <div class="form-field col-lg-12">
         <input id="query" name="queries" class="input-text js-input" type="text" required>
         <label class="label" for="queries">Please enter your query/issue</label>
      </div>
       
      <div class="form-field col-lg-12">
         <input id="solution" name="solution" class="input-text js-input" type="text" required>
         <label class="label" for="solution">Solution</label>
      </div>

      <!-- <div class="form-field col-lg-12">
      <div class="form-group"> <label for="form_message">Message *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>

      </div>
       -->

      <div class="form-field col-lg-12">
         <!-- <input class="submit-btn" type="submit" value="Submit"> -->
         <button class="submit-btn" type="submit" value="Submit">Submit</button>
      </div>
   </form>
</section>
</body>
</html>
 