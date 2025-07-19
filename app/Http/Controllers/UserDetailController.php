<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class UserDetailController extends Controller
{
    public function mainUpdate(Request $request)
    {
        $user = $request->user();
        $detail = $user->detail()->firstOrCreate([]);

        $validator = $request->validate(
            [
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'birth_date' => 'nullable|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'username' => [
              'nullable',
              'string',
              'max:255',
              Rule::unique('user_details', 'username')->ignore($detail->id),
            ],
            ]
        );

        $detail->update($validator);

        return back()->with('updateMessage', 'The main form is updated!');
    }

    public function descriptionUpdate(Request $request)
    {
        $user = $request->user();
        $detail = $user->detail()->firstOrCreate([]);

        $validator = $request->validate(
            [
            'description' => "nullable|string|max:1000",
            ]
        );

        $detail->update(
            [
            'description' => $validator['description'],
            ]
        );

        return back()->with('updateMessage', "Description is updated!");

    }

    public function skillsUpdate(Request $request)
    {
        $user = $request->user();
        $skills = $request->input('skills');

        // فرض: user_details رابطه one-to-one داره
        $detail = $user->detail;

        if ($detail) {
            $detail->skills = json_encode($skills);
            $detail->save();
        }

        return response()->json(['status' => 'saved', 'skills' => $skills]);
    }

    public function avatarUpdate(Request $request)
    {
        $request->validate(
            [
            'profile_image' => "required|image|mimes:jpg,jpeg,png,webp|max:500",
            ]
        );

        $user = $request->user();
        $detail = $user->detail;

        // حذف تصویر قبلی در صورت وجود
        if ($detail && $detail->profile_image && Storage::disk('public')->exists($detail->profile_image)) {
            Storage::disk('public')->delete($detail->profile_image);
        }

        // ذخیره تصویر جدید
        $path = $request->file('profile_image')->store('profiles', 'public');

        // به‌روزرسانی اطلاعات کاربر
        $detail->profile_image = $path;
        $detail->save();

        return back()->with('updateMessage', "User profile is updated");
    }

}
