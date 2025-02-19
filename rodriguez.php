<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LabAct4 Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <div class="container rounded-3 w-75 p-3 my-5" style="background:#ff6240">
  <div class="row">
    <div class="col-4 d-flex justify-content-center align-items-center">
        <div class="text-white fw-bold display-4 text-center">
            Meralco Billing Form
        </div>
    </div>

    <div class="col-8">
        <div class="container bg-light w-100 rounded-3 p-3">

            <form action="jroutput.php" method="post">
                <div class="row">
                    <label for="" class="d-block mb-3">Customer Name:</label>
                    <div class="col-5">
                        <div class="container">
                            <input type="text" name="jrLname" id="lastname" class="form-control">
                            <label for="lastname" class="fw-light">Last Name: </label>

                        </div>
                    </div>

                    <div class="col-5">
                        <div class="container">
                            <input type="text" name="jrFname" id="jrFname" class="form-control">
                            <label for="firstname" class="fw-light">First Name: </label>

                        </div>
                    </div>              

                    <div class="col-2">
                        <div class="container">
                            <input type="text" name="jrMI" id="jrMI" class="form-control">
                            <label for="middleI" class="fw-light">Middle Initial: </label>

                        </div>
                    </div>

                    <div class="row mt-4">

                    <label for="" class="d-block mb-3">Address:</label>
                    <div class="col-8">
                        <div class="container">
                            <input type="text" name="jrAdd1" id="firstadd" class="form-control">
                            <label for="firstadd" class="fw-light">Building number, Street, Brgy.</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="container">
                        <input type="text" name="jrAdd2" id="secondadd" class="form-control">
                        <label for="secondadd" class="fw-light">City</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5">
                            <div class="container">
                                <input type="text" name="jrAdd3" id="thirdadd" class="form-control">
                                <label for="thirdadd" class="fw-light">Province</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="container">
                                <input type="text" name="jrAdd4" id="fourthadd" class="form-control">
                                <label for="fourthadd" class="fw-light">Country</label>
                    </div>  
                    </div>

                            <div class="col-2">
                                <div class="container">
                                <input type="text" name="jrAdd5" id="fifthhadd" class="form-control">
                                <label for="fifth" class="fw-light">ZIP</label>
                                </div>
                            </div>
                </div>

                <div class="row mt-4">
                    <label for="" class="d-block mb-3">No. of Kilowatts</label>
                    <div class="col">
                        <div class="container">
                            <input type="number" name="jrkilowatts" id="kilowatts" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col mx-2">
                        <div class="text-white container-fluid rounded-3 p-2 my-3" style="background:#FF6240">
                            <div class=" d-block p-2">
                                <span class="display-6 fw-bold fs-1 d-block ">Subsciption Type</span>

                                <div class="form-check-inline">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" name="sub" id="" class="form-check=input" value="Residential">
                                            <label for="">Residential (2.75 per KW) </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check-inline">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" name="sub" id="" class="form-check=input" value="Industrial">
                                            <label for="">Industrial (3.75 per KW) </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check-inline">
                                    <div class="row">
                                        <div class="col">
                                            <input type="radio" name="sub" id="" class="form-check=input" value="Commercial">
                                            <label for="">Commercial (4.75 per KW) </label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col mx-2">
                        <div class="text-white container-fluid rounded-3 p-2 my-3" style="background:#FF6240">
                            <div class=" d-block p-2">
                                <span class="fw-bold display-6 fs-1 d-block">Other Charges</span>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" name="Disconnection" id="" class="form-check-input">
                                            <label for="" class="form-check-label">Disconnection (Php 500.00)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">   
                                        <div class="form-check">
                                            <input type="checkbox" name="Reconnection" id="" class="form-check-input">
                                            <label for="" class="form-check-label">Reconnection (Php 600.00)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" name="Late Payment" id="" class="form-check-input">
                                            <label for="" class="form-check-label">Late Payment (30% of the Energy Charge)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" name="Additional" id="" class="form-check-input">
                                            <label for="" class="form-check-label">Additional Electricity Meter (Php 750.00)</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input type="checkbox" name="EMT" id="" class="form-check-input">
                                            <label for="" class="form-check-label">Electricity Meter Transfer (Php 1,500.00)</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col text-center mt-3">
                            <input type="submit" name="sub" value="Compute" class="btn" style="background-color: #ff6240">
                        </div>
                    </div>  


                </div>  

            </form>
        </div>



    </div>
  </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
