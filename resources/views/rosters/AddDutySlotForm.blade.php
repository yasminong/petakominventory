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
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 9px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        /* Pop-up Styling */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 90%;
            height: 90%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .popup {
            background-color: #fff;
            padding: 15px;
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
    <br>

    <div class="popup">
                <h2 align="center">Add Schedule</h2>
                <br>
                <form class="popup-form" action="{{ route('rosters.AddDutySlot') }}" method="POST">
                @csrf
                <!-- Include your form fields here -->
                <table class="table">
                    <thead class=" text-primary">
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label for="colFormLabelLg" class="col-form-label lg">Name:</label>
                            <td class="col-md-9">
                                <input type="text" class="form-control" id="colFormLabelLg" value="" name="name" id="name" placeholder="Name" required>
                            </td>
                            </td>
                        </tr>
                        </td>
                            <td>
                            <label for="colFormLabelLg" class="col-form-label lg">Day :</label>
                                <td class="col-md-9">
                                <div id="day" id="colFormLabelLg" >
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
                                <div id="time" id="colFormLabelLg" >
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
                            <button class="popup-buttons" type="submit">Submit</button>
                            <button class="popup-buttons" type="button" onclick="closePopup()">Cancel</button>  
                    </tbody>
                </table>   
                </form>
</div>


    
</x-app-layout>