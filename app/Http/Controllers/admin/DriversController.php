<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function index(){
        $drivers = Driver::all();
        return view('admin.drivers.drivers')->with('drivers', $drivers);
    }
    

    // public function deleteDrivers($id) {
    //     $driver = Driver::findOrFail($id);
    //     $driver->delete();

    //     return back()
    //         ->with('success', 'Driver deleted successfully!');
    // }

    // public function updateDriver($id){
    //     $driver = Driver::findOrFail($id);
    //     return view('admin.drivers.updateDrivers')->with('driver', $driver);
    // }

    // public function updatedDriver(Request $request, $id){

    //     $driver = Driver::findOrFail($id);

    //     $request->validate([
    //         'name' => 'required|string',
    //         'age' => 'required|integer',
    //         'busno' => 'required|numeric',
    //     ]);

    //     $driver->update([
    //         'name' => $request->input('name'),
    //         'age' => $request->input('age'),
    //         'busno' => $request->input('busno'),
    //     ]);

    //     return redirect()->route('admin.drivers')
    //         ->with('success', 'driver updated successfully!');
    // }

    // public function createDriver()
    // {
    //     return view('admin.drivers.create');
    // }

    // public function addDriver(Request $request, $driversId){
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'gender' => 'required|string|max:10',
    //         'age' => 'required|int',
    //         'phone' => 'required|string|max:11',
    //         'address' => 'required|string|max:100',
    //         // Add other validation rules as needed
    //     ]);
    
    //     $driver = Driver::create([
    //         'name' => $request->input('name'),
    //         'age' => $request->input('age'),
    //         'busno' => $request->input('busno'),
    //         'id' => $driversId
    //     ]);
    
    //     return redirect()->route('showDriver', ['driverId' => $driversId])
    //         ->with('success', 'Driver added successfully!');
    // }

    public function showDriver($driversId){

        $drivers = Driver::findOrFail($driversId);
        $driver = $drivers->driver;
    
        return view('admin.drivers.showDriver', compact('drivers', 'driver'));
    }

    // public function storeDriver(Request $request, $driversId){

    //         $driversId = $request->input('drivers');
    
    //         $drivers = Driver::findOrFail($driversId);
    
    //         $request->validate([
    //             'name' => 'required|string|max:255',
    //             'age' => 'required|int',
    //             'busno' => 'required|string|max:50',
    //         ]);
    
    //         $driver = new Driver([
    //             'name' => $request->input('name'),
    //             'age' => $request->input('age'),
    //             'busno' => $request->input('busno'),
    //         ]);
    
    //         $drivers->drivers()->save($driver);
    
    //         return redirect()->route('showDriver', $drivers->id)
    //             ->with('success', 'Driver registered successfully!');
    // }

    // public function deleteDriver($driverId){

    //     $driver = Driver::findOrFail($driverId);

    //     $driver->delete();

    //     return redirect()->route('showDriver', $driver->id)->with('success', 'Driver deleted successfully!');
    // }

    // public function update(Request $request, $driversId){
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'age' => 'required|int',
    //         'busno' => 'required|int|max:50',
    //     ]);
    
    //     $driver = Driver::findOrFail($driversId);
    
    //     $driver->update([
    //         'name' => $request->input('name'),
    //         'age' => $request->input('age'),
    //         'busno' => $request->input('busno'),
    //     ]);
    
    //     return redirect()->route('showDriver', $driver->id)
    //         ->with('success', 'Driver updated successfully!');
    // }
}