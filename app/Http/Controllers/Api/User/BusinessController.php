<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * @group Business Endpoints
 * @authenticated
 *
 * APIs for authentication users
 */
class BusinessController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if ($this->checkOwnerShip())
                return $next($request);
            else {
                response(['error' => 'You dont have permission to access this business'], 401)->send();
                exit;
            }
        });
    }

    /**
     * Creates a new  business in the system
     *
     * @return \Illuminate\Http\Response    
     */
    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
            'url' => 'nullable|string|unique:businesses,url',
        ]);

        $request['owner_id'] = auth()->id();

        if ($request->url == null) {
            $request['url'] = Business::getUniqueUrl();
        }
        $business = Business::create($request->only('name', 'country', 'size', 'category', 'industry', 'url', 'owner_id'));

        return $business;
    }

    /**
     * Retrieves user business data 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {

        return $business;
    }


    /**
     * Updates an existing business in the system
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, Business $business)
    {
        $this->validate($request, [
            "name"  => "nullable|string|max:255",
            "category"  => "nullable|string|max:255",
            "industry"  => "nullable|string|max:255",
            "country"  => "nullable|string|max:255",
            "size"  => "nullable|string|max:255",
            "aim"  => "nullable|string|max:255",
            "payroll"  => "nullable|string|max:255",
            "notes"  => "nullable|string|max:255",
            "first_day"  => "nullable|string|max:255",
            "default_shift_hours"  => "nullable|numeric|max:255",
            "default_break_duration"  => "nullable|numeric|max:255",
            "prevent_changes_to_shift"  => "nullable|string|max:255",
            "shift_notifications_recipient"  => "nullable|string|max:255",
            "shift_removal_notification"  => "nullable|string|max:255"
        ]);

        $data = array_filter($request->only(
            "name",
            "profile_photo_path",
            "category",
            "industry",
            "country",
            "size",
            "aim",
            "payroll",
            "notes",
            "url",
            "first_day",
            "default_shift_hours",
            "default_break_duration",
            "prevent_changes_to_shift",
            "shift_notifications_recipient",
            "shift_removal_notification"
        ));
        if (count($data) > 0)
            $business->update($data);
        return ['success' => true, 'message' => 'Data was updated successfully'];
    }

    /**
     * Deletes a Business  from the system
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(Business $business)
    {
        return $business->delete();
    }

    private function checkOwnerShip()
    {


        $routeName = Route::getCurrentRoute()->getName();
        $owner_id = request()->route('business')->owner_id ?? null;
        $exceptRoutes = ["business.create"];
        return !in_array($routeName, $exceptRoutes) && $owner_id == auth()->id();
    }


    /**
     * Creates the location of a business.
     *
     * @group Business Location
     */

    public function createLocation(Request $request, Business $business)
    {
        $this->validate($request, [
            'name' => "required|string|max:255",
            'address' => "required|string|max:255",
            'cordinates' => "required|string|max:255",
        ]);

        $location = [...$request->only('name', 'address', 'cordinates'), 'business_id' => $business->id, 'owner_id' => $business->owner_id];
        return Location::create($location);
    }

    /**
     * Get all locations of a business.
     *
     * @group Business Location
     * 
     * @response [
     *     {
     *         "id": 1,
     *         "name": "Location Name 1",
     *         "address": "123 Main St",
     *         "coordinates": "40.7128,-74.0060",
     *         "business_id": 1,
     *         "created_at": "2023-05-23T10:00:00.000000Z",
     *         "updated_at": "2023-05-23T10:00:00.000000Z"
     *     },
     *     {
     *         "id": 2,
     *         "name": "Location Name 2",
     *         "address": "456 Elm St",
     *         "coordinates": "42.3601,-71.0589",
     *         "business_id": 1,
     *         "created_at": "2023-05-23T11:00:00.000000Z",
     *         "updated_at": "2023-05-23T11:00:00.000000Z"
     *     }
     * ]
 
     */

    public function getAllLocation(Business $business)
    {
        return $business->location;
    }

    /**
     * Get the location of a business.
     *
     * @group Business Location
     * 
     * 
     * @response {
     *     "id": 1,
     *     "name": "Location Name",
     *     "address": "123 Main St",
     *     "coordinates": "40.7128,-74.0060",
     *     "business_id": 1,
     *     "created_at": "2023-05-23T10:00:00.000000Z",
     *     "updated_at": "2023-05-23T10:00:00.000000Z"
     * }
     * @response 404 {
     *     "error": "Location not found"
     * }
     */
    public function getLocation(Business $business, Location $location)
    {
        if ($business->id == $location->business_id) {
            return $location;
        }
        return response(['error' => 'Location not found'], 404);
    }
    /**
     * Update the location of a business.
     *
     * @group Business Location
     * 

     * 
     * @bodyParam name string required The name of the location. Example: New Location
     * @bodyParam address string required The address of the location. Example: 123 Main St
     * @bodyParam coordinates string required The coordinates of the location. Example: 40.7128,-74.0060
     * 
     * @response 200 {
     *     "message": "Location updated successfully"
     * }
     * @response 404 {
     *     "error": "Location not found"
     * }
     */
    public function updateLocation(Request $request, Business $business, Location $location,)
    {
        $this->validate($request, [
            'name' => "required|string|max:255",
            'address' => "required|string|max:255",
            'cordinates' => "required|string|max:255",
        ]);


        if ($business->id == $location->business_id) {
            $location->update($request->only('name', 'address', 'cordinates'));
        }
        return response(['error' => 'Location not found'], 404);
    }

    /**
     *Deletes a location for the given business.
     * @group Business Location
     *@return mixed Returns true on successful deletion and error response if location not found
     *@response 200 {
     *"message": "Location deleted successfully"
     *}
     *@response 404 {
     *"error": "Location not found"
     *}
     *
     */

    public function deleteLocation(Business $business, Location $location)
    {
        if ($business->id == $location->business_id) {
            return $location->delete();
        }
        return response(['error' => 'Location not found'], 404);
    }
}
