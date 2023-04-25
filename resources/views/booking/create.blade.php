





<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
           <div class="p-6 bg-white border-b border-gray-200">
  
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Laravel 8 </title>
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
                <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
                <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
            </head>
            <body>
              
                <div class="container">
                  <h2></h2>
                   <form class="form-horizontal" action="{{route('booking.store')}}" Method="post" enctype="multipart/form-data">
                     @csrf
                                      
                
                     <div class="form-group">
                        <label class="control-label col-sm-2" for="select_city">City:</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="select_city">
                            <option value="">Select City</option>
                            <option value="Nagpur">Nagpur</option>
                          
                        </select>
                        </div>
                    </div> 
                
                
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="select_vehical">Select Vehical:</label>
                      <div class="col-sm-10">
                      <select class="form-control" name="select_vehical">
                          <option value="">Select Vehical</option>
                          <option value="Normal">Normal</option>
                          <option value="Luxury">Luxury</option>
                          <option value="Sports">Sports</option>
                      </select>
                      </div>
                  </div>
                
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="date">Choose Date:</label>
                        <div class="col-sm-10">          
                          <input type="date" class="form-control" id="date" placeholder="Enter Price" name="date">
                        </div>
                      </div>
                
                     
                
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="booking_type">Booking Type:</label>
                        <div class="col-sm-10">    
                        <select class="form-control" name="booking_type">
                            <option value="">Select Booking Type</option>
                            <option value="1">1</option>
                            <option value="0">0</option>
                       
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="half">Half Time:</label>
                        <div class="col-sm-10">    
                        <select class="form-control" name="half">
                            <option value="">Select Time</option>
                            <option value="100Km/h">Half</option>
                            <option value="200Km/h">Full</option>
                            <option value="300Km/h">Hour</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="from">From:</label>
                        <div class="col-sm-6">          
                          <input type="date" class="form-control" id="from" placeholder="Enter Price" name="from">
                        </div>
                        <label class="control-label col-sm-4" for="to">To:</label>
                        <div class="col-sm-6">          
                          <input type="date" class="form-control" id="to" placeholder="Enter Price" name="to">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="text">Destination Text:</label>
                        <div class="col-sm-10">          
                          <input type="text" class="form-control" id="text" placeholder="Enter Destination Text" name="text">
                        </div>
                      </div>

                      

                      
                
                  
                   
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </body>
    </div>
  </div>
  </div>
  </div>
  
  
  <script type="text/javascript">
  
  
  </script>
  </html>
  </x-app-layout>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  