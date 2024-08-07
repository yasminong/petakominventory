<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roster') }}
        </h2>
    </x-slot>
    <head>
            <style>
                table{
                    width: 100%;
                    border-collapse: collapse;
                    align:center;
                }
                td,th{
                    padding: 20px;
                    border: 2px solid #ccc;
                    background-color: 	#FFFAFA;
                }
                th {
                    background-color: #DB7093;
                    color: white;
                }
                .popup-buttons {
                padding: 10px 20px;
                background-color: 	#0096FF;
                color: white;
                text-decoration: none;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin: 0 10px;
                }
                

            </style>
        </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="h4 p-3 bg-info bg-opacity-10 border border-info-subtle border-start-0 rounded-end" align="center">
                        UPDATE DUTY SLOT 
                    </div>
                </div>
                <form action="{{route('rosters.UpdateDutySlotForm', $Roster->id)}}" method="post" >
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label for="colFormLabelLg" class="col-form-label lg">Name:</label>
                                        <td class="col-md-9">
                                            <input type="text" class="form-control" id="colFormLabelLg" value="{{ $Roster->name }}" name="name" id="name" placeholder="Name" required>
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="colFormLabelLg" class="col-form-label lg">Day :</label>
                                            <td class="col-md-9">
                                            <div id="employment_type" id="colFormLabelLg" >
                                            <select id="day" name="day">
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                            </select>
                                            </div>
                                        </td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <label for="colFormLabelLg" class="col-form-label lg">Time:</label>
                                            <td class="col-md-9">
                                            <div id="employment_type" id="colFormLabelLg" >
                                            <select id="time" name="time">
                                                <option value="08:00 - 10:00">08:00 - 10:00</option>
                                                <option value="10:00 - 12:00">10:00 - 12:00</option>
                                                <option value="12:00 - 14:00">12:00 - 14:00</option>
                                                <option value="14:00 - 16:00">14:00 - 16:00</option>
                                                <option value="16:00 - 18:00">16:00 - 18:00</option>
                                            </select>
                                            </div>
                                        </td>
                                        </td>
                                    </tr>   
                                </tbody>
                            </table>
                            <br>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end" align="center">
                                <button class="popup-buttons" type="submit">UPDATE</button>
                            
                                    <a href="/rosters/UpdateDutySlot" onclick="return confirm('Are You Sure?')"><button class="popup-buttons" type="button">CANCEL</button></a>
                                </div>
                            
                            </div>
                    </div>
                </form>
            </div>
        </div>

         

        </div>
            </div>
        </div>
    </div>


            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
              
                <!-- Page content-->
                <div class="container-fluid">
                   @yield('content')
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