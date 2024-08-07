<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roster') }}
        </h2>
    </x-slot>
    <head>
            <title>Duty Slot</title>
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
                    background-color: #AA4A44;
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
                .edit {
                padding: 10px 20px;
                background-color: 	#1F3AD0 ;
                color: white;
                text-decoration: none;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin: 0 10px;
                }
                .delete {
                padding: 10px 20px;
                background-color:#D01F3D  ;
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
        <h1 class="card-title" align="center" > DUTY SLOT </h1>
        <br>
    <body class="relative overflow-x-auto">
        <table class="w-full text-sm text-left ">
            <tr>
            <th scope="col" class="px-6 py-3" align="center">No</th>
            <th scope="col" class="px-6 py-3" align="center">Name</th>
                <th scope="col" class="px-6 py-3" align="center">Day</th>
                <th scope="col" class="px-6 py-3" align="center">Time</th>
                <th scope="col" class="px-6 py-3" align="center">Action</th>
            </tr>
            @foreach($Roster as $Roster)
            <tr>
                <td class="px-6 py-4" align="center">{{$loop->iteration}}</td>
                <td class="px-6 py-4" align="center">{{$Roster->name}}</td>
                <td class="px-6 py-4" align="center">{{$Roster->day}}</td>
                <td class="px-6 py-4" align="center">{{$Roster->time}}</td>
                <td class="px-6 py-4" align="center">

                    <a href="/rosters/UpdateDutySlotForm/{{$Roster->id}}" >
                    <button type="button" class="edit">{{ __('Edit') }}</button>
                    </a>
                    <a href="/rosters/DeleteDutySlot/{{$Roster->id}}" onclick="return confirm ('Confirm delete?')">
                            <button  type="button" class="delete">{{ __('Delete') }}</button>
                        </a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <a href="/rosters/AddDutySlot">
                            <button type="button" class="popup-buttons">{{ __('BACK') }}</button>
                        </a>
                        <br>
    </body>
           
  

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