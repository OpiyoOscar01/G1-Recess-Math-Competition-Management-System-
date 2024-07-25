<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    /**
     * Handle upload of question files.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleFileUpload(Request $request)
    {
        // Validate the request
        $request->validate([
            'file' => 'required|max:20480|mimes:xls,xlsx,pdf', // Adjust max size to bytes (20480 = 20MB)
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $uploadedFile = $request->file('file');
            $fileName = $uploadedFile->getClientOriginalName();

            // Generate a unique file name to prevent overwriting
            $uniqueFileName = pathinfo($fileName, PATHINFO_FILENAME) . '_' . time() . '.' . $uploadedFile->getClientOriginalExtension();

            // Store file in 'uploads' directory under 'public' disk
            $filePath = $uploadedFile->storeAs('uploads', $uniqueFileName, 'public');

            // Store the file details in the database
            $file = new File();
            $file->name = $uniqueFileName; // Save unique file name
            $file->path = $filePath; // Store the full path including storage path
            $file->save();

            return redirect()->back()->with("okay", "File uploaded successfully");
        }

        return redirect()->back()->with("error", "File upload failed");
    }


}

