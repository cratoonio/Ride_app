
<?php include 'header.php'; ?>
<body>
    <?php include 'nav.php' ?>
    <!-- Main jumbotron for a primary m arketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome!</h1>

      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-xs-6">
            <a href="#" class="btn btn-block btn-lg btn-default">new ride</a>
        </div>

          <div class="col-xs-6">
              <a href="#" class="btn btn-block btn-lg btn-default">tramp</a>
          </div>
      </div>

          <hr>

    <div class="well">
        <div class="row">
            <div class="col-xs-10">
            <label for="origin">Origin</label>
            <input type="text" name="origin" placeholder="Origin" class="form-control">
                </div>
            <div class="col-xs-2">
            <label for="withPay">Pay</label>
            <input type="checkbox" name="withPay" class="checkbox form-control">
        </div>
        </div>
            <div class="row">
                <div class="col-xs-12">
                <label for="amount">Amount</label>
                <input type="number" name="amount" placeholder="amount" class="form-control">
                </div>
            </div>

        <div class="row ">
            <div class="col-xs-12">
            <label for="stops">stops</label>
            <input type="text" name="stops" placeholder="Stops" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <label for="destination">destination</label>
            <input type="text" name="destination" placeholder="Destination" class="form-control">
            </div>
        </div>
    </div>
        <div class="row well">
            <div class="col-xs-12">
            <div class="col-xs-3">
                <a href="#" class="btn-block btn btn-primary">f</a>
            </div>
            <div class="col-xs-3">
                <a href="#" class="btn-block btn btn-primary">WA</a>
            </div>
            <div class="col-xs-3">
                <a href="#" class="btn-block btn btn-primary">SMS</a>
            </div>
            <div class="col-xs-3">
                <a href="#" class="btn-block btn btn-primary">Phone</a>
            </div>
        </div>
        </div>

     </div>

    <?php include 'footer.php'; ?>
