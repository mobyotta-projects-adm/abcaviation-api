<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Business;
use Illuminate\Http\Request;

/**
 * @group Business Endpoints
 * @authenticated
 *
 * APIs for authentication users
 */
class BusinessController extends Controller
{

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
        $this->checkOwnerShip();
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
        $this->checkOwnerShip();
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
        $business = request()->route('business');
        /// todo: implement middleware
        if ($business->owner_id != auth()->id()) {
            response(['error' => 'You dont have permission to access this business'], 401)->send();
            exit;
        }
    }
}
