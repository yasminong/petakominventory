<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roster') }}
        </h2>
    </x-slot>
    <style>
        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            align:center;
            
            
        }

        table {
            width: 100%;
            border-collapse: collapse;
            align:center;
        }

        th, td {
            padding: 20px;
            border: 2px solid #ccc;
            background-color: 	#FFFAFA;
        }

        th {
            background-color: 	#AA4A44;
            color: white;
        }
        h1 {
            color: black;
            font-size: 40px;
        }

        /* Pop-up Styling */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup {
            background-color: #fff;
            padding: 30px;
            border-radius: 4px;
        }

        .popup-buttons {
            margin-top: 20px;
        }

        .popup-buttons button {
            padding: 10px 20px;
            background-color: #0096FF;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 0 10px;
        }

        .popup {
        position: relative;
    }

    .close-icon {
        position: absolute;
        top: 10px;
        right: 20px;
        cursor: pointer;
        font-size: 20px;
        color: #888;
    }  
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <br>
    <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <br>
                <h1 class="card-title" align="center" > Schedule</h1>
                <br>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        
                    <table>

                      <tr>
                          <th></th>
                          <th>08:00 - 10:00</th>
                          <th>10:00 - 12:00</th>
                          <th>12:00 - 14:00</th>
                          <th>14:00 - 16:00</th>
                          <th>16:00 - 18:00</th>
                      </tr>
                      <tr>
                          <th>Monday</th>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Monday')->where('time', '08:00 - 10:00')->first()?->name}}',)">
                          {{ $Roster->where('day', 'Monday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Monday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Monday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                        </td>
                          <td onclick="showPopup('{{$Roster->where('day', 'Monday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Monday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                       
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Monday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Monday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                     
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Monday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Monday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                        
                        </td>
                      </tr>
                      <tr>
                          <th>Tuesday</th>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Tuesday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Tuesday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                       
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Tuesday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Tuesday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                          
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Tuesday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Tuesday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                        
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Tuesday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Tuesday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                    
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Tuesday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Tuesday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                       
                        </td>
                      </tr>
                      <tr>
                          <th>Wednesday</th>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Wednesday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Wednesday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                        
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Wednesday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Wednesday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                      
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Wednesday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Wednesday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                     
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Wednesday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Wednesday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                   
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Wednesday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Wednesday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
             
                        </td>
                      </tr>
                      <tr>
                          <th>Thursday</th>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Thursday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{$Roster->where('day', 'Thursday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
             
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Thursday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Thursday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                         
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Thursday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Thursday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                 
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Thursday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Thursday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                       
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Thursday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Thursday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                
                        </td>
                      </tr>
                      <tr>
                          <th>Friday</th>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Friday')->where('time', '08:00 - 10:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Friday')->where('time', '08:00 - 10:00')->first()?->name }}<br>
                   
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Friday')->where('time', '10:00 - 12:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Friday')->where('time', '10:00 - 12:00')->first()?->name }}<br>
                  
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Friday')->where('time', '12:00 - 14:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Friday')->where('time', '12:00 - 14:00')->first()?->name }}<br>
                          
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Friday')->where('time', '14:00 - 16:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Friday')->where('time', '14:00 - 16:00')->first()?->name }}<br>
                
                        </td>
                          <td onclick="showPopup('{{ $Roster->where('day', 'Friday')->where('time', '16:00 - 18:00')->first()?->name }}')">
                          {{ $Roster->where('day', 'Friday')->where('time', '16:00 - 18:00')->first()?->name }}<br>
                  
                        </td>
                      </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>

         
      </div>
            </div>
        </div>
    </div>

      </div>
</div>
        </div>
       
        
        <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted" align="center">Copyright &copy; PETAKOM Inventory Mart 2023</div>
                            <div align="center">
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
        <!-- Bootstrap core JS-->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script type="text/javascripts" src="{{ URL::asset('assets/js/custom.js')}}"></script>
    </body>
</html>
</x-app-layout>