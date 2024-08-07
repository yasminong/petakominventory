<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roster') }}
        </h2>
    </x-slot>
    <style>

        .push-top {
        margin-top: 20px;
        }
        .header {
        padding: 100px;
        text-align: center;
        }
        .function {
            text-align: center;  
        }
        .add {
                
                background-color: #0096FF;
                color: white;
                }
                .view {
                
                background-color:#0096FF  ;
                color: white;
                }
        


    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="bg-image" style="background-image: url('https://image.cnbcfm.com/api/v1/image/105382858-1533706147272gettyimages-155033354.jpeg?v=1650376166&w=1600&h=900');height: 25vh">
                        <div class="header text-white">
                            <h1><b>WELCOME TO PETAKOM INVENTORY MART MANAGEMENT</b></h1>
                        </div>
                    </div>
                    <br>
                    <div class="function">
                        <a class = "button" href="{{ route('rosters.AddDutySlot') }}">
                            <x-button class="add" >{{ __('ADD SLOT') }}</x-button>
                        </a>
                        <a class = "button" href="{{ route('rosters.ViewDutySlot') }}">
                            <x-button class="view">{{ __('VIEW SLOT') }}</x-button>
                        </a>
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